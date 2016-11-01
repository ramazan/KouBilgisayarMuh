<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
?>
<!-- Kullanıcılar Sayfası Başlangıcı -->
		
				<div class="col-md-8 col-md-offset-1">
            

					<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

						#Sorgu yapılıyor..
						$sql = "SELECT * FROM users ORDER BY ID";

						if($result = mysqli_query($con, $sql)){
						    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
						       
						     
						        echo "<div id='page-modal' class='container' style='padding-top: 20px;padding-left:100px;'>
						        <div class='row'><div class='panel panel-primary'><br><div  style='padding-left: 20px'>";

						        echo " <button  class='btn btn-primary' onclick='kullaniciEkle()'><span class='glyphicon glyphicon-plus'></span> Kullanıcı Ekle</button>";

						            echo "</div><br><div class='panel-heading'><h2 class='panel-title'
						            style='text-align:center'>Kişiler Listesi</h2></div><br>";

						                echo "<div id='personsList'><table class='table'><thead style='text-align:center;'><tr class='filters'>
											<th><input type='text' class='form-control'
												placeholder='#' disabled></th>
											<th><input type='text' class='form-control'
												placeholder='AD' disabled></th>
											<th><input type='text' class='form-control'
												placeholder='Soyad' disabled></th>
											<th><input type='text' class='form-control'
												placeholder='Rol' disabled></th>";

						            echo "</tr></thead><tbody>";
						            $sayac=0;
						        while($row = mysqli_fetch_array($result)){
						            echo "<tr>";
						            $sayac++;
						                echo "<td>" . $sayac . "</td>";
						                echo "<td>" . $row['NAME'] . "</td>";
						                echo "<td>" . $row['EMAIL'] . "</td>";
						                echo "<td>" . $row['ROLE'] . "</td>";
						                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='KullaniciSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button</td>";
						            echo "</tr>";
						        }

						        echo "</tbody></table>";
						        echo "</div></div></div></body></html>";

						        mysqli_free_result($result);
						    } else{
						        echo "Aranan kayıtlar bulunamadı :( .";
						    }
						} else{
						    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
						}

			
					?>
           
		        </div>
		    </div>

		<!-- Kullanıcılar Sayfası Sonu -->



	