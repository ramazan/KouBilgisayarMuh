
	<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
?>
<!-- Kullanıcılar Sayfası Başlangıcı -->
				<div class="col-md-12 col-md-offset-0">
             

					<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}


						 if ($login_session_role == "user") {

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE USER_ID ='".$login_session_user_id."' ORDER BY ID";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
								       
								     
								        echo "<div id='page-modal' class='container' style='padding-top: 20px;'>
								        <div class='row'><div class='panel panel-primary'><br><div  style='padding-left: 20px'>";

								        echo " <button  class='btn btn-success' onclick='duyuruEkle()'><span class='glyphicon glyphicon-plus'></span> Duyuru Ekle</button>";

								            echo "</div><br><div class='panel-heading'><h2 class='panel-title'
								            style='text-align:center'>Duyurular Listesi</h2></div><br>";

								                echo "<div id='personsList'><table class='table'><thead style='text-align:center;'><tr class='filters'>
													<th><input type='text' class='form-control'
														placeholder='#' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='BAŞLIK' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='İÇERİK' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='TÜR' disabled></th>";

								            echo "</tr></thead><tbody>";
								            $sayac=0;
								        while($row = mysqli_fetch_array($result)){
								            echo "<tr>";
								            $sayac++;
								                echo "<td>" . $sayac . "</td>";
								                echo "<td>" . $row['TITLE'] . "</td>";
								                echo "<td>" . $row['MESSAGE'] . "</td>";
								                echo "<td>" . $row['DUYURU_TURU'] . "</td>";
								                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='duyuruSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button</td>";
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


						 }else{


						 $sql = "SELECT users.NAME,announcements.TITLE,announcements.MESSAGE,announcements.DUYURU_TURU,announcements.DATE , announcements.ID
						FROM announcements INNER JOIN users ON users.ID=announcements.USER_ID ORDER BY ID";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
								       
								     
								        echo "<div id='page-modal' class='container' style='padding-top: 20px;'>
								        <div class='row'><div class='panel panel-primary'><br><div  style='padding-left: 20px'>";

								        echo " <button  class='btn btn-success' onclick='duyuruEkle()'><span class='glyphicon glyphicon-plus'></span> Duyuru Ekle</button>";

								            echo "</div><br><div class='panel-heading'><h2 class='panel-title'
								            style='text-align:center'>Duyurular Listesi</h2></div><br>";

								                echo "<div id='personsList'><table class='table'><thead style='text-align:center;'><tr class='filters'>
													<th><input type='text' class='form-control'
														placeholder='#' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='BAŞLIK' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='İÇERİK' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='TÜR' disabled></th>
													<th><input type='text' class='form-control'
														placeholder='EKLEYEN' disabled></th>"	;

								            echo "</tr></thead><tbody>";
								            $sayac=0;
								        while($row = mysqli_fetch_array($result)){
								            echo "<tr>";
								            $sayac++;
								                echo "<td>" . $sayac . "</td>";
								                echo "<td>" . $row['TITLE'] . "</td>";
								                echo "<td>" . $row['MESSAGE'] . "</td>";
								                echo "<td>" . $row['DUYURU_TURU'] . "</td>";
								                echo "<td>" . $row['NAME'] . "</td>";
								                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='duyuruSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button</td>";
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

						 }

						
			
					?>
           
		        </div>
		    </div>
		<!-- Kullanıcılar Sayfası Sonu -->



	