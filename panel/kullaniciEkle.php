<?php

   include_once '../dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $adSoyad=$_POST['adSoyad'];
    $email=$_POST['email'];
    $sifre=$_POST['sifre'];
    $rol=$_POST['rol'];

    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"INSERT INTO users (EMAIL,PASSWORD,NAME,ROLE) 
        VALUES('".$email."' , '".MD5($sifre)."', '".$adSoyad."' ,'".$rol."')");

    //echo "kullanıcı Başarıyla eklendi!";

    mysql_close($connection); // Connection Closed
?>