<?php

   include('session.php');
   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

	$newPassword=$_POST['password'];

	//Şifreyi güncelle
	mysqli_query($con,"UPDATE users SET PASSWORD= '".MD5($newPassword)."' WHERE ID= '".$login_session_user_id."'");

	//echo "Şifre Başarıyla değişti!";

	mysql_close($connection); // Connection Closed
?>