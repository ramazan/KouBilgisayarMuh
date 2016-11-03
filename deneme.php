   <div class='col-sm-3 news-item'>
  <div class='news-img'>
    <a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-news'>
    	<img src='".$row['RESIM_LINK']."' class='img-responsive'/></a>
  </div>
  <div class="news-text">
    <h3><a href="#" class="su-link" data-toggle='modal' data-target='#duyuru".$row['ID']."' data-ua-action="hp-news">2016-2017 Vize Sınavları Hk.</a></h3>
    <p>Bölümümüz 2016-2017 Vize Sınav Programı ektedir.</p>
  </div>
</div>


<?php


						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Haber' LIMIT 3 OFFSET 3;";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										$sayac=1;
								        while($row = mysqli_fetch_array($result)){
								      
echo "<li><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' style='font-size: 14px; font-weight: 700;' class='su-link'  data-ua-action='hp-news'>".$row['TITLE']."</a></li>";
			

						 echo "<div class='modal fade' id='duyuru".$row['ID']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display:none;'>
                    <div class='modal-dialog'>
                      <div class='modal-content'>
                        <div class='modal-header' style='background-color: #009E49;'>
                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
                          <h4 style='color:white;' class='modal-title' id='myModalLabel'>";
                          echo "<div>".$row['TITLE']."</div></h4></div>";
                          
                          $bosluk = array("\n","/g");
                          $row['MESSAGE'] = str_replace($bosluk, "<br />", $row['MESSAGE']); 

                          echo " <div class='modal-body'>
                          <div class='duyuruMetni'>".$row['MESSAGE']."</div>";
                          echo " <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Kapat</button>
                        </div></div></div></div></div>";
			
								        }


								        mysqli_free_result($result);
								    } else{
								        echo "Aranan kayıtlar bulunamadı :( .";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}						
			
	?>


























<div class="title"> <a href="#" class="text-justify" data-toggle="modal" data-target="#duyuru4831"> Sınıf Ve Bolum Temsilcileri Secimi </a>
                  <div class="modal fade" id="duyuru4831" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #009E49;">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">
                            <div class="duyuruBaslik">Sınıf Ve Bolum Temsilcileri Secimi</div>
                          </h4>
                        </div>
                        <div class="modal-body">
                          <div class="duyuruMetni"> Her iki ogretime ait tum sınıflar icin sınıf temsilecileri ve bunlar arasından da bolum temsilcisi secimi, 9 Kasım 2016 Çarşamba ekte verilen saatlerde ve yerlerde yapılacaktır. Sınıf ve bolum temsilcisi secmekteki amac, yine ekteki yonetmelikte belirtilmiştir. Aday olacak ogrencilerin 9 Kasımdan once bana hangi ogretim ve sınıftan aday olacaklarına dair bir mail atmaları gerekmektedir (suleyman.eken@kocaeli.edu.tr). Aday ogrencilerin yonetmelikteki 5. maddeye haiz olmaları gerekmektedir. </div>
                                                    <hr>
                          <div class="author"> Ek : <a style="color:##428bca" href="files/221_merged_document.pdf">indir</a> </div>
                                                                            </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                </div>










          