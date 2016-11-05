<div class="row" >
	<div class="col-lg-12" style="border:2px solid #ddd;margin-top: 20px;background-color: #ecf0f1;" >
	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" onclick='P_OnIzle()' href="#">Ön İzleme</a></li>
	    <li><a data-toggle="tab" onclick='P_Guncelle()' href="#">Güncelleme</a></li>
	  </ul>
		<div id="Profil_OnIzleme" class="row" style="margin-top: 10px;margin-bottom: 10px;" >
		
			<div  class="col-lg-2 col-md-3" >
				<div align="center">
				<img class="img-responsive img-profile"   src="img/AKavak.jpg" alt="">
				</div>
				<div class="list-group" style="margin-top: 10px">
                   <a href="#" class="list-group-item active" style="border-color: #34495e;background-color: #34495e;">Ön İzleme</a>
                   <a href="#" class="list-group-item">Duyurularınız<span class="badge" style="background-color: #16a085;">4</span></a>
                   <a href="#" class="list-group-item">Kullanıcılar<span class="badge orange" style="background-color: #f39c12;">9</span></a>
                   
                 </div>
			</div>
			<div class="col-lg-7 col-md-5" >
				<h1 style="font-size: 26px;font-weight: 400;"><?php echo $login_session_name ?></h1>
				<p>Ben reisim o kadar mükemmelim ki yani reisim ama neyse ben aslında lanet olasi bir hiçim ve uzun ince bir yoldayım bu yol kötü bir yol ama olsun.Her neyse sarı çiçeğe sordum geçen dedim naber.Dedi iyidir senden naber.Dedim ben reisim sen kimsin.O da dedi akıllı ol.</p>
				<h1 style="font-size: 26px;font-weight: 400;">Araştırma Alanlarınız:</h1>
				<ul class="list-inline">
                 
                  <li><i class="fa fa-trophy fa-muted"></i>  Haberleşme, Kablosuz Haberleşme  (3G,  4G, LTE, 4G+, Algılayıcı Ağlar, Adhoc Ağlar, RFID Sistemler), Akıllı Anten ve  MIMO sistemler, Bulut Bilişim (Sinyalleşme, Senkronizasyon), E-sağlık  sistemler, Mobil Uygulama, Veri Madenciliği Uygulamaları, Karar Destek  Sistemleri </li>
                  
                </ul>
               
			</div>
			<div class="col-lg-3 col-md-4" >
				<h1 style="font-size: 20px;font-weight: 400;">İletişim Bilgileriniz:</h1>
				<p><i class="fa fa-globe fa-muted fa-fw"></i>  <a href="#">http://www.website.com</a>
                                                </p>
                                                <p><i class="fa fa-phone fa-muted fa-fw"></i> 1+(234) 555-2039</p>
                                                
                                                <p><i class="fa fa-envelope-o fa-muted fa-fw"></i>  <a href="#">
                                                <?php echo $login_session_email ?>	
                                                </a>
                                                </p>
                                                <hr style="    border-top: 1px solid #333;"/>
                                                <p><i class="fa fa-envelope-o fa-info fa-fw"></i>Ana Bilim Dalı: Bilgisayar Bilimleri
                                                </p>
                                                <p><i class="fa fa-envelope-o fa-info fa-fw"></i>Oda No: 3310
                                                </p>
                                           
                          </div>                   
                    
                </div>
		<div id="Profil_Guncelle" class="row" style="margin-top: 10px;margin-bottom: 10px;display: none" >
				<div id="userTabContent" class="tab-content">

                                    <div class="tab-pane fade active in" id="profile-settings">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <ul id="userSettings" class="nav nav-pills nav-stacked">
                                                    <li class=""><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Kişisel Bilgiler</a>
                                                    </li>
                                                    <li class=""><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Profil Resminiz</a>
                                                    </li>
                                                    <li class=""><a href="#Akademik" data-toggle="tab"><i class="fa fa-book"></i> Akademik</a>
                                                    </li>
                                                    <li class="active"><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Şifre Değiştirin</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-9">
                                                <div id="userSettingsContent" class="tab-content">
                                                    <div class="tab-pane fade" id="basicInformation">
                                                        <form role="form" style="padding-right: 16px">
                                                            <div class="form-group">
										                      <label for="unvan">Ünvan Seçiniz:</label>
										                      <select class="form-control" id="unvan">
										                        <option>Arş.Gör.</option>
										                        <option>Okutman</option>
										                        <option>Uzman</option>
										                        <option>Öğr. Gör. Dr.</option>        
										                        <option>Dr.</option>
										                        <option>Yrd.Doç.Dr.</option>
										                         <option>Doç.Dr.</option>
										                        <option>Prof.Dr.</option>
										                      </select>
										                    </div>
                                                            <div class="form-group">
                                                                <label>Adınız ve Soyadınız:</label>
                                                                <input class="form-control"  type="text">
                                                            </div>
                                                          <div class="form-group">
                                                                <label><i class="fa fa-envelope-o fa-fw"></i> Email Adresiniz:</label>
                                                                <input class="form-control" type="email">
                                                            </div>
                                                           <button type="submit" class="btn btn-info">Profilinizi Güncelleyin</button>
                                                            <button class="btn btn-danger">Vazgeç</button>
                                                       
                                                           
                                                    </div>
                                                    <div class="tab-pane fade" id="profilePicture">
                                                        
                                                        <img class="img-responsive img-profile" src="img/AKavak.jpg" alt="">
                                                        <br>
                                                        <form role="form" style="padding-right:16px ">
                                                            <div class="form-group">
                                                                <label>Yeni resim seçin:</label>
                                                                <input type="file">
                                                                <p class="help-block"><i class="fa fa-warning"></i> Resim: JPG, GIF, PNG olmalıdır</p>
                                                                <button type="submit" class="btn btn-success">Profil resminizi güncelleyin</button>
                                                                <button class="btn btn-danger">Vazgeç</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade in active" id="changePassword">
                                                        
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>Yeni Şifreniz</label>
                                                                <input class="form-control" value="" type="password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Yeni şifrenizi tekrar girin:</label>
                                                                <input class="form-control" value="" type="password">
                                                            </div>
                                                            <button type="submit" class="btn btn-success">Güncelleyin</button>
                                                            <button class="btn btn-danger">Vazgeçin</button>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade " id="Akademik">
                                                    <form role="form" style="padding-right:16px ">
                                                         
                                                            <div class="form-group">
                                                                <label> Ana Bilim Dalınız:</label>
                                                                <input class="form-control"  type="url">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Oda NO:</label>
                                                                <input class="form-control"  type="url">
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label> Telefon:</label>
                                                                <input class="form-control"  type="text">
                                                            </div>
                                                             <div class="form-group">
                                                                <label><i class="fa fa-globe fa-fw"></i> Websiteniz:</label>
                                                                <input class="form-control" type="url">
                                                            </div>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-info fa-fw"></i> Araştırma Alanlarınız:</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-info">Güncelle</button>
                                                            <button class="btn btn-danger">Vazgeç</button>
                                                       </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

		</div>
	</div>
</div>