<?php
    include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select EMAIL from users where EMAIL = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['EMAIL'];
   
   if(!isset($_SESSION['login_user'])){
   	echo "Bu sayfayı görüntüleme yetkiniz yoktur!";
      header("location:giris.php");
   }
?>