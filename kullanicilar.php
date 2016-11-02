<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
?>

    

				<div class="row">
                <div class="col-lg-12" style="margin-top: 15px">
                <button  class='btn btn-success' onclick='kullaniciEkle()'><span class='glyphicon glyphicon-plus'></span> Kullanıcı Ekle</button>
                <br/>
                <br/>
             			<div class="panel panel-default">
                        <div class="panel-heading">
                            Kullanıcılar Listesi
                        </div>

					<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

						#Sorgu yapılıyor..
						$sql = "SELECT * FROM users ORDER BY ID";

						if($result = mysqli_query($con, $sql)){
						    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
						       
						     
						        echo "<div class='panel-body'><table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-kullanici'>";

								            

								     echo "<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>İsim</th>
                                        <th>Mail</th>
                                        <th>Rol</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead><tbody>";
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

						        echo "</tbody></table></div>";

						        mysqli_free_result($result);
						    } else{
						        echo "Aranan kayıtlar bulunamadı :( .";
						    }
						} else{
						    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
						}

			
					?>
           
		       </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

		<!-- Kullanıcılar Sayfası Sonu -->
<script>
    $(document).ready(function() {
        $('#dataTables-kullanici').DataTable({
            responsive: true
        });


    });
    </script>


	