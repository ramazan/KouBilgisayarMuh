<?php
    include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
    include_once './session.php';  
    ?>

<div class="row" >
	<div class="col-lg-12" style="border:2px solid #ddd;margin-top: 20px;background-color: #ecf0f1;" >
	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" onclick='P_OnIzle()' href="#">Ön İzleme</a></li>
	    <li><a data-toggle="tab" onclick='P_Guncelle()' href="#">Güncelleme</a></li>
	  </ul>
		<div id="Profil_OnIzleme" class="row" style="margin-top: 10px;margin-bottom: 10px;" >
		
            			<?php


                                    if($con === false){
                                    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
                                    }

                                                #Sorgu yapılıyor..
                                        $sql = "SELECT * FROM users WHERE ID = '".$login_session_user_id."';";

                                            if($result = mysqli_query($con, $sql)){
                                                if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
                                                    while($row = mysqli_fetch_array($result)){


                                                                echo "<div  class='col-lg-2 col-md-3' >
                                        <div align='center'>
                                        <img class='img-responsive img-profile' width='147px' height='147px'   src='".$row['RESIM_LINK']."' alt=''>
                                        </div>
                                        <div class='list-group' style='margin-top: 10px'>
                                           <a href='#' class='list-group-item active' style='border-color: #34495e;background-color: #34495e;'>Ön İzleme</a>
                                           <a href='#' class='list-group-item'>Kullanıcılar<span class='badge orange' style='background-color: #f39c12;'>".$kullanici_sayisi."</span></a>
                                         </div>
                                    </div>";
                                                              
                                                  echo "<div class='col-lg-6 col-md-5' >
                                <h1 style='font-size: 26px;font-weight: 400;text-align:center;'>". $login_session_name."</h1><br>";
                                echo "<h1 style='font-size: 20px;font-weight: 400;'>Araştırma Alanlarınız:</h1>
                                <ul class='list-inline'>";
                                    
                              echo "<li><i class='fa fa-trophy fa-muted'></i>".$row['ARASTIRMA_ALAN']."</li></ul></div>";

                              echo "<div class='col-lg-4 col-md-4' >
                                <h1 style='font-size: 20px;font-weight: 400;'>İletişim Bilgileriniz:</h1>
                                <p><i class='fa fa-globe fa-muted fa-fw'></i>  <a href='#'>".$row['WEBSITE']."</a></p><p><i class='fa fa-phone fa-muted fa-fw'></i> ".$row['TELEFON']."</p><p><i class='fa fa-envelope-o fa-muted fa-fw'></i><a href='#'>".$row['EMAIL']." </a></p> <hr style='border-top: 1px solid #333;'/><p><i class='fa fa-envelope-o fa-info fa-fw'></i>Ana Bilim Dalı: ".$row['ANA_BILIM_DALI']."</p><p><i class='fa fa-envelope-o fa-info fa-fw'></i>Oda No: ".$row['ODA_NO']."</p> </div>";
                        }

                                                                mysqli_free_result($result);
                                                            } else{
                                                                echo "Aranan kayıtlar bulunamadı :( .";
                                                            }
                                                        } else{
                                                            echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
                                                        }                       
                        
                ?>       
		
                    
                </div>
		<div id="Profil_Guncelle" class="row" style="margin-top: 10px;margin-bottom: 10px;display: none" >
				<div id="userTabContent" class="tab-content">

                                    <div class="tab-pane fade active in" id="profile-settings">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <ul id="userSettings" class="nav nav-pills nav-stacked">
                                                
                                                    <li class="active"><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Profil Resminiz</a>
                                                    </li>
                                                    <li class=""><a href="#Akademik" data-toggle="tab"><i class="fa fa-book"></i> Akademik</a>
                                                    </li>
                                                    <li class=""><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Şifre Değiştirin</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-9">
                                                <div id="userSettingsContent" class="tab-content">
                                                
                                                    <div class="tab-pane fade in active" id="profilePicture">
                                                    <div id="loading_resim_guncelle" style="display: none; text-align: center;">
                                                              <p><img src="img/ajax-loader.gif" />  Lütfen Bekleyin..</p>
                                                    </div>
                                                     <div id="messagesPhotoUpload" class="alert alert-success" role="alert" style="text-align:center ; display: none;">
                                                            <b id="messagesPhotoUploadMessage"></b>
                                            </div> 
                                                        
                                                        <?php

                                                            $sql = "SELECT RESIM_LINK FROM users WHERE ID = '".$login_session_user_id."';";

                                                                if($result = mysqli_query($con, $sql)){
                                                                    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
                                                                        while($row = mysqli_fetch_array($result)){
                                                                    
                                                                    echo  "<img class='img-responsive img-profile' width='147px' height='147px'
                                                                            src='".$row['RESIM_LINK']."'>";                        
                                                                        }

                                                                        mysqli_free_result($result);
                                                                    } else{
                                                                        echo "Aranan kayıtlar bulunamadı :( .";
                                                                    }
                                                                } else{
                                                                    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
                                                                }                       
                                            
                                                    ?>
                                                        <br>
                                                                

                                                              
                                            
                                            <form id="PhotoYukleForm" enctype="multipart/form-data" role="form">
                                                <label>Yeni resim seçin:</label>
                                                    <input type="file" name="file" id="file">
                                             <p class="help-block"><i class="fa fa-warning"></i> Resim: JPG, GIF, PNG olmalıdır</p>          
                                                 <button type="submit" class="btn btn-success" >Profil resminizi güncelleyin</button>
                                              </form>
                                                </div>
                                                    <div class="tab-pane fade" id="changePassword">
                                                      <div id="loading_sifre_guncelle" style="display: none; text-align: center;">
                                                          <p><img src="img/ajax-loader.gif" />  Lütfen Bekleyin..</p>
                                                      </div>
                                                        <div id="profile_update_alert" class="alert alert-success" role="alert" style="text-align:center ; display: none;">
                                                            <b id="pass_validate"></b>
                                                        </div>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>Yeni Şifreniz</label>
                                                            <input class="form-control" value="" type="password" id="yeni_sifre" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Yeni şifrenizi tekrar girin:</label>
                                                                <input class="form-control" value="" type="password" id="yeni_sifre_tekrar" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-success" id="sifreGuncelle">Şifreyi Güncelleyin</button>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade " id="Akademik">
                                                        <div id="loading_akademik_guncelle" style="display: none; text-align: center;">
                                                                  <p><img src="img/ajax-loader.gif" />  Lütfen Bekleyin..</p>
                                                        </div>
                                                    <div id="AkademikMesajDiv" class="alert alert-success" role="alert" style="text-align:center ; display: none;">
                                                            <b id="AkademikMesaj"></b>
                                                        </div>
                                                         
                        <?php

                        if($con === false){
                        die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
                        }

                                    #Sorgu yapılıyor..
                            $sql = "SELECT * FROM users WHERE ID = '".$login_session_user_id."';";

                                if($result = mysqli_query($con, $sql)){
                                    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
                                        while($row = mysqli_fetch_array($result)){
                                      
                                            echo " <div class='form-group'>
                                                                <label><i class='fa fa-laptop'></i> Ana Bilim Dalınız:</label>
                                                                <input class='form-control' id='anabilimdali' value='".$row['ANA_BILIM_DALI']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label><i class='fa fa-home'></i> Oda NO:</label>
                                                                <input class='form-control' id='odano' value='".$row['ODA_NO']."' >
                                                            </div>
                                                           
                                                            <div class='form-group'>
                                                                <label><i class='fa fa-phone-square'></i> Telefon:</label>
                                                                <input class='form-control' id='telefon' value='".$row['TELEFON']."'  type='text'>
                                                            </div>
                                                             <div class='form-group'>
                                                                <label><i class='fa fa-globe fa-fw'></i> Websiteniz:</label>
                                                                <input class='form-control' id='website'  value='".$row['WEBSITE']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label><i class='fa fa-info fa-fw'></i> Araştırma Alanlarınız:</label>
                                                                <textarea class='form-control' id='arastirmaalan' rows='3'>".$row['ARASTIRMA_ALAN']."</textarea> </div>";
    
                                        }

                                        mysqli_free_result($result);
                                    } else{
                                        echo "Aranan kayıtlar bulunamadı :( .";
                                    }
                                } else{
                                    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
                                }                       
            
                                 ?>
                                                            <button class="btn btn-info" id="AkademikBilgiGuncelle">Güncelle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

		</div>
	</div>
</div>