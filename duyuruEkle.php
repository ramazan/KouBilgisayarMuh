<?php
   include('./session.php');
   include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $baslik=$_POST['baslik'];
    $icerik=$_POST['icerik'];
    $duyuruTuru=$_POST['duyuruTuru'];
    $etlinlikGun = $_POST['etlinlikGun'];   
    $etlinlikAy =  $_POST['etlinlikAy'];
    $RESIM_LINK =  $_POST['resimLink'];

    if($duyuruTuru == "Etkinlik"){

    	    //duyuru tabloya kaydet
    mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU,ETKINLIK_GUN,ETKINLIK_AY) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."','".$etlinlikGun."','".$etlinlikAy."')");

    alert($duyuruTuru);
    }elseif ($duyuruTuru == "Haber" || $duyuruTuru == "Slider") {
        # code...
         mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU,RESIM_LINK) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."','".$RESIM_LINK."')");

    }
    else{

    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."')");
    }

    mysql_close($connection); // Connection Closed
?>