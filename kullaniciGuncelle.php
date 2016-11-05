<?php

   include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
   include('./session.php');

    $odano=$_POST['odaNo'];
    $anabilimdali=$_POST['anaBilimDali'];
    $telefon=$_POST['Telefon'];
    $website=$_POST['Website'];
    $arastirmaalan=$_POST['ArastirmaAlan'];


    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"UPDATE users SET ANA_BILIM_DALI='".$anabilimdali."', ODA_NO='".$odano."', 
                         TELEFON='".$telefon."',  WEBSITE='".$website."', ARASTIRMA_ALAN='".$arastirmaalan."'
                         WHERE ID = '".$login_session_user_id."';");

    //echo "kullanıcı Başarıyla eklendi!";

    mysql_close($connection); // Connection Closed

?>