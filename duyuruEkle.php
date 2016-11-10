<?php
   include('./session.php');
   include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $baslik=$_POST['baslik'];
    $icerik=$_POST['icerik'];
    $duyuruTuru=$_POST['duyuruTuru'];
    $etlinlikGun = $_POST['etlinlikGun'];   
    $etlinlikAy =  $_POST['etlinlikAy'];
    $RESIM_LINK =  $_POST['resimLink'];
    $yayinSuresi =  $_POST['yayinSuresi'];

    if($yayinSuresi =='NULL'){
            $sonTarih = 'NULL';
    }else{

         $bugunTarih = date("Y/m/d");
          $newDateDay = date("d", strtotime($bugunTarih));
          $newDateMonth = date("m", strtotime($bugunTarih));
         $newDateYear = date("Y", strtotime($bugunTarih));
         $newDateDay = $newDateDay + $yayinSuresi;
          $date = new DateTime();

         $date->setDate( intval($newDateYear), intval($newDateMonth),  intval($newDateDay));

           $sonTarih =  $date->format('Y/m/d');
    }
    
   // echo "son tarih =   $sonTarih";

    if($duyuruTuru == "Etkinlik"){

    	    //duyuru tabloya kaydet
    mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU,ETKINLIK_GUN,ETKINLIK_AY,YAYIN_SURESI) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."',
                '".$etlinlikGun."','".$etlinlikAy."','".$sonTarih."')");

    alert($duyuruTuru);
    }elseif ($duyuruTuru == "Haber" || $duyuruTuru == "Slider") {
        # code...
         mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU,RESIM_LINK,YAYIN_SURESI) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."','".$RESIM_LINK."','".$sonTarih."')");

    }
    else{

    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"INSERT INTO announcements (TITLE,MESSAGE,USER_ID,DUYURU_TURU,YAYIN_SURESI) 
        VALUES('".$baslik."' , '".$icerik."', '".$login_session_user_id."' ,'".$duyuruTuru."','".$sonTarih."')");
    }

    mysql_close($connection); // Connection Closed
?>