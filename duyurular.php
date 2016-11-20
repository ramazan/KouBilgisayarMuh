
	<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
	include_once './session.php';  
	?>
		<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
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
                            <table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-example'>";

								        

								            echo "<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Başlık</th>
                                        <th>İçerik</th>
                                        <th>Tür</th>
                                        <th>Sil</th>
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
								                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='duyuruSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button</td>";
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


						 }else{


						 $sql = "SELECT users.NAME,announcements.TITLE,announcements.MESSAGE,announcements.DUYURU_TURU,announcements.DATE , announcements.ID
						FROM announcements INNER JOIN users ON users.ID=announcements.USER_ID ORDER BY ID";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
								       
								     
								        echo "<div class='panel-body'>
                            <table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-example'>";

								        

								            echo "<thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Başlık</th>
                                        <th>İçerik</th>
                                        <th>Tür</th>
                                        <th>Ekleyen</th>
                                        <th>Sil</th>
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
								                echo "<td><button class='btn btn-danger btn-sm' data-title='Delete' data-toggle='modal' onclick='duyuruSil(".$row['ID'].")'><span class='glyphicon glyphicon-trash'></span></button</td>";
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
     


	