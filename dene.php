<?php
include_once './dbbaglantisi.php';
if($con === false){
              die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
            }

                  #Sorgu yapılıyor..
              $sql = "SELECT ID,YAYIN_SURESI FROM announcements WHERE STATUS='1';";

                if($result = mysqli_query($con, $sql)){
                    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
                    
                        while($row = mysqli_fetch_array($result)){

                           $dateBugun = new DateTime();
 
                            $DuyuruTarihi =  $dateBugun->format('Y-m-d');
                         
                             if($DuyuruTarihi == $row['YAYIN_SURESI']){
                                echo "tarih geçti ";
                             }
                        }


                        mysqli_free_result($result);
                    } else{
                        echo "Aranan kayıtlar bulunamadı :( .";
                    }
                } else{
                    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
                }   
  ?>