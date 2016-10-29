<?php
	include_once '../dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
?>
<!-- Kullanıcılar Sayfası Başlangıcı -->
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <button  class="btn btn-success" onclick="duyuruEkle()">Duyuru Ekle</button>
            
            		<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

						#Sorgu yapılıyor..
						$sql = "SELECT * FROM announcements ORDER BY ID";

						if($result = mysqli_query($con, $sql)){
						    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
						       
						     
						        echo "<div> <br>";
						        echo "<table class='table table-bordered  table-inverse'>";
						            echo "<thead><tr  class='bg-success' >";
						                echo "<th>ID</th>";
						                echo "<th>BAŞLIK</th>";
						                echo "<th>İÇERİK</th>";
						                echo "<th>EKLEYEN</th>";
						                 echo "<th>TARİH</th>";
						            echo "</tr></thead><tbody>";
						            $sayac=0;
						        while($row = mysqli_fetch_array($result)){
						            echo "<tr>";
						            $sayac++;
						                echo "<td>" . $sayac . "</td>";
						                echo "<td>" . $row['TITLE'] . "</td>";
						                echo "<td>" . $row['MESSAGE'] . "</td>";
						                echo "<td>" . $row['USER_ID'] . "</td>";
						                echo "<td>" . $row['DATE'] . "</td>";
						            echo "</tr>";
						        }

						        echo "</tbody></table>";
						        echo "</div></body></html>";

						        mysqli_free_result($result);
						    } else{
						        echo "Aranan kayıtlar bulunamadı :( .";
						    }
						} else{
						    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
						}

						mysqli_close($con);
				
					?>
           
		        </div>
		    </div>
		<!-- Kullanıcılar Sayfası Sonu -->



	