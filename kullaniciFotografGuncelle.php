<?php

   include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
   include('./session.php');

    $fotograf_link=$_POST['fotograf_link'];
    

    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"UPDATE users SET RESIM_LINK='".$fotograf_link."'  WHERE ID = '".$login_session_user_id."';");

    //echo "kullanıcı Başarıyla eklendi!";

    mysql_close($connection); // Connection Closed

?>