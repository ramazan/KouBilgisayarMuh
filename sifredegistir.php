<?php

   include('session.php');
   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

	$newPassword=$_POST['password'];

	//Şifreyi güncelle
	mysqli_query($con,"UPDATE users SET PASSWORD= '".MD5($newPassword)."' WHERE EMAIL= '".$login_session_email."'");

	//echo "Şifre Başarıyla değişti!";

	mysql_close($connection); // Connection Closed
?>