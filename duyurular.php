	<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
	include_once './session.php';  
	?>
		<script>
    $(document).ready(function() {
        $('#dataTables-duyurular').DataTable({
            responsive: true,
            "bJQueryUI": false,
            "bAutoWidth": false,
            "oLanguage": {
              "sEmptyTable": "No incompleted albums found!", //when empty
                    "sSearch": "<span>Arama:</span> _INPUT_", //search
                    "sLengthMenu": "<span>Kaç Kayıt Gösterilsin : </span>_MENU_  ", //label
                    "sZeroRecords": "Eşleşen Kayıt Bulunmadı",  
                    "sEmptyTable": "Bu Tabloda Hiç Veri Yok.",
                    "oPaginate": { "sFirst": "İlk", "sLast": "Son", "sNext": "Sonraki", "sPrevious": "Önceki" } //pagination

            }
        });
       
    });
    </script>
				<div class="row">
                <div class="col-lg-12" style="margin-top: 15px">
                <button  class='btn btn-success' onclick='duyuruEkle()'><i class="fa fa-plus"></i> Duyuru Ekle</button>
                <br/>
                <br/>
             			<div class="panel panel-default">
                        <div class="panel-heading">
                            Duyurular Listesi
                        </div>

					<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}


						 if ($login_session_role == "user") {

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE USER_ID ='".$login_session_user_id."' ORDER BY ID";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
								       
								      echo "<div class='panel-body'>
                            <table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-duyurular'>";

								        

								            echo "<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Başlık</th>
                                        <th>İçerik</th>
                                        <th>Tür</th>
                                        <th>#</th>   
                                    </tr>
                                </thead><tbody>";
								            $sayac=0;
								        while($row = mysqli_fetch_array($result)){
								            echo "<tr class='odd gradeA'>";
								            $sayac++;
								                echo "<td>" . $sayac . "</td>";
								                echo "<td>" . $row['TITLE'] . "</td>";
								                echo "<td>" . $row['MESSAGE'] . "</td>";
								                echo "<td class='center'>" . $row['DUYURU_TURU'] . "</td>";
								                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='duyuruSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button><br><br>";
								                 echo "<button class='btn btn-primary btn-sm'  data-toggle='modal' onclick='duyuruGuncelle(".$row['ID'].")'><span class='glyphicon glyphicon-edit'></span></button></td>";
								                 echo"<div id='duyuru".$row['ID']."' class='modal fade' role='dialog'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header' align='center'>
					<button type='button' class='close' data-dismiss='modal'>&times;</button>
					<h4 class='modal-title'>Duyuru Güncelle</h4>
				</div>
				<div id='duyuruGuncelleDiv".$row['ID']."' class='modal-body'>
					<p style='text-align: center; font-size: 15px;' id='duyuruGuncelleleMesaj".$row['ID']."' class='label label-danger'></p>
          <div id='loading_duyuru_guncelle".$row['ID']."' style='display: none; text-align: center;'>
          <p><img src='img/ajax-loader.gif' />  Lütfen Bekleyin..</p>
        </div>
					<br>
					<br>
					      <fieldset>


                                 <div id='duyuruGuncelleDivIcerik' >
                                <div class='form-group' >
                              		<label for='duyuruGuncelleBasligi".$row['ID']."'>Duyuru Başlığı:</label>
                                   <input class='form-control' required placeholder='Duyuru Başlığı' id='duyuruGuncelleBasligi".$row['ID']."' type='text'
                                    value='". $row['TITLE'] ."'>
                                     
                                   </input>
                                </div>
                                <div class='form-group'>
                              		<label for='duyuruGuncelleIcerigi'>Duyuru İçeriği:</label>
                                    <textarea class='form-control'  required rows='5' placeholder='Duyuru İçeriği' 
                                    id='duyuruGuncelleIcerigi".$row['ID']."'>". $row['MESSAGE'] ."</textarea>

                                </div>


                    </div>            								


  			<div id='duyuruGuncelleyayinDiv'>
                       <div class='row'>

                          <div class='form-group col-sm-12'>   
                                <label>Yayın Süresi Durumu :</label>
                               "; if($row['YAYIN_SURESI'] != "0000-00-00")
                               		$row['YAYIN_SURESI'] = $row['YAYIN_SURESI'] ." tarihinde yayından kalkacak.";
                               	  else
                               	  		$row['YAYIN_SURESI'] = "Sürekli yayında kalsın";

                               		echo "". $row['YAYIN_SURESI'] ."

                             </div>
                              </div> 
                    </div>
                
                    <div id='duyuruGuncelleyayinSuresiDiv'>
                       <div class='row'>

                          <div class='form-group col-sm-6'>   
                                <label for='duyuruGuncelleYayinSuresi".$row['ID']."'>Kaç gün yayında kalsın ? :</label>
                                <select class='form-control' id='duyuruGuncelleYayinSuresi".$row['ID']."'>
                                  

                                  <option selected>Sürekli yayında kalsın</option>"; for ($i=1; $i <=31 ; $i++) { 
                                      
                                         echo '<option>'.$i.'</option>'; 
                                      }
                               		
                  
                                echo "</select>
                             </div>
                              </div> 
                    </div>




                           </fieldset>
				</div>
				<div class='modal-footer' style='text-align: center;'>
					<button id='duyuruGuncelleButton".$row['ID']."' class='btn btn-success'>Güncelle</button>
					<button class='btn btn-primary' data-dismiss='modal'>Vazgeç</button>
				</div>
			</div>
		</div>
	</div>";
								            echo "</tr>";


								        }

								        echo "</tbody></table></div>";


								        echo "";
								       
								        mysqli_free_result($result);
								    } else{
								       echo "<div style='text-align:center' class='alert alert-danger'>Henüz Hiç Duyurunuz Yok!</div>";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}


						 }else{


						 $sql = "SELECT users.NAME,announcements.TITLE,announcements.MESSAGE,announcements.DUYURU_TURU,announcements.DATE , announcements.ID,announcements.YAYIN_SURESI
						FROM announcements INNER JOIN users ON users.ID=announcements.USER_ID ORDER BY ID";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
								       
								     
								        echo "<div class='panel-body'>
                            <table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-duyurular'>";

								        

								            echo "<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Başlık</th>
                                        <th>İçerik</th>
                                        <th>Tür</th>
                                        <th>Ekleyen</th>
                                        <th>#</th>
                                    </tr>
                                </thead><tbody>";
								            $sayac=0;
								        while($row = mysqli_fetch_array($result)){
								            echo "<tr class='odd gradeA'>";
								            $sayac++;
								            
								                echo "<td>" . $sayac . "</td>";
								                echo "<td>" . $row['TITLE'] . "</td>";
								                echo "<td>" . $row['MESSAGE'] . "</td>";
								                echo "<td class='center'>" . $row['DUYURU_TURU'] . "</td>";
								                echo "<td class='center'>" . $row['NAME'] . "</td>";
								                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='duyuruSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button><br><br>";
								                 echo "<button class='btn btn-primary btn-sm'  data-toggle='modal' onclick='duyuruGuncelle(".$row['ID'].")'><span class='glyphicon glyphicon-edit'></span></button></td>";
								                 echo"<div id='duyuru".$row['ID']."' class='modal fade' role='dialog'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header' align='center'>
					<button type='button' class='close' data-dismiss='modal'>&times;</button>
					<h4 class='modal-title'>Duyuru Güncelle</h4>
				</div>
				<div id='duyuruGuncelleDiv".$row['ID']."' class='modal-body'>
					<p style='text-align: center; font-size: 15px;' id='duyuruGuncelleleMesaj".$row['ID']."' class='label label-danger'></p>
          <div id='loading_duyuru_guncelle".$row['ID']."' style='display: none; text-align: center;'>
          <p><img src='img/ajax-loader.gif' />  Lütfen Bekleyin..</p>
        </div>
					<br>
					<br>
					      <fieldset>


                                 <div id='duyuruGuncelleDivIcerik' >
                                <div class='form-group' >
                              		<label for='duyuruGuncelleBasligi".$row['ID']."'>Duyuru Başlığı:</label>
                                   <input class='form-control' required placeholder='Duyuru Başlığı' id='duyuruGuncelleBasligi".$row['ID']."' type='text'
                                    value='". $row['TITLE'] ."'>
                                     
                                   </input>
                                </div>
                                <div class='form-group'>
                              		<label for='duyuruGuncelleIcerigi'>Duyuru İçeriği:</label>
                                    <textarea class='form-control'  required rows='5' placeholder='Duyuru İçeriği' 
                                    id='duyuruGuncelleIcerigi".$row['ID']."'>". $row['MESSAGE'] ."</textarea>

                                </div>


                    </div>            								


  			<div id='duyuruGuncelleyayinDiv'>
                       <div class='row'>

                          <div class='form-group col-sm-12'>   
                                <label>Yayın Süresi Durumu :</label>
                               "; if($row['YAYIN_SURESI'] != "0000-00-00")
                               		$row['YAYIN_SURESI'] = $row['YAYIN_SURESI'] ." tarihinde yayından kalkacak.";
                               	  else
                               	  		$row['YAYIN_SURESI'] = "Sürekli yayında kalsın";
                               		echo "". $row['YAYIN_SURESI'] ."

                             </div>
                              </div> 
                    </div>
                
                    <div id='duyuruGuncelleyayinSuresiDiv'>
                       <div class='row'>

                          <div class='form-group col-sm-6'>   
                                <label for='duyuruGuncelleYayinSuresi".$row['ID']."'>Kaç gün yayında kalsın ? :</label>
                                <select class='form-control' id='duyuruGuncelleYayinSuresi".$row['ID']."'>
                                  

                                  <option selected>Sürekli yayında kalsın</option>"; for ($i=1; $i <=31 ; $i++) { 
                                      
                                         echo '<option>'.$i.'</option>'; 
                                      }
                               		
                  
                                echo "</select>
                             </div>
                              </div> 
                    </div>




                           </fieldset>
				</div>
				<div class='modal-footer' style='text-align: center;'>
					<button id='duyuruGuncelleButton".$row['ID']."' class='btn btn-success'>Güncelle</button>
					<button class='btn btn-primary' data-dismiss='modal'>Vazgeç</button>
				</div>
			</div>
		</div>
	</div>";
								            echo "</tr>";
								        }

								        echo "</tbody></table></div>";
								        

								        mysqli_free_result($result);
								    } else{
								        echo "<div style='text-align:center' class='alert alert-danger'>Henüz Hiç Duyurunuz Yok!</div>";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}

						 }

					?>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
     


	