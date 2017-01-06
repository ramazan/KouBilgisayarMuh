<?php
   include('./session.php');
   include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

    $baslik=$_POST['baslik'];
    $icerik=$_POST['icerik'];
    $yayinSuresi =  $_POST['yayinSuresi'];
    $ID=$_POST['ID'];


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
    
 

    //Kullanıcıyı tabloya kaydet
    mysqli_query($con,"UPDATE announcements SET TITLE = '".$baslik."' , MESSAGE = '".$icerik."' , YAYIN_SURESI =  '".$sonTarih."' WHERE ID = '".$ID."';");
    

    mysql_close($connection); // Connection Closed
?>