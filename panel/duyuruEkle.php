<?php
   include('../session.php');
   include_once '../dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $baslik=$_POST['baslik'];
    $icerik=$_POST['icerik'];
    $duyuruTuru=$_POST['duyuruTuru'];

    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."')");

    mysql_close($connection); // Connection Closed
?>