<?php

   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $ID=$_POST['ID'];
  
    //Kullanıcıyı sil
        mysqli_query($con,"DELETE FROM announcements WHERE ID = '".$ID."'");


    //echo "kullanıcı Başarıyla eklendi!";

    mysql_close($con); // Connection Closed
?>