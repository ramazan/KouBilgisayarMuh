<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta name="author" content="">

<title>Kocaeli Üniversitesi Bilgisayar Muhendisligi</title>

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'
	rel='stylesheet' type='text/css'>

<!-- Theme CSS -->
<link href="css/agency.min.css" rel="stylesheet">
<link href="css/dummy.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css" type="text/css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$("#oku").click(function() {
			$('#myModal').modal('show');
		});

	});
</script>
<script>
	$(document).ready(function() {
		$("#mundi").click(function() {
			$('#myModal').find('p').html('<p>Jiraya Bitch </p>');
			$('#myModal').find('h4').html('<h4 class="modal-title"> Yemek Hane Listesi BITCH !</h4>')
			$('#myModal').modal('show');
		});

	});
</script>


</head>

<body id="page-top" class="index" style="background:#f8f8f8;">

	<!-- Navigation -->
	
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding-bottom :25px ">
             <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
                <a class="navbar-brand" href="index.php"><img
					src="img/kou_logo.png" alt="KOÜ" width="50" height="50"/></a> <a
					class="navbar-brand" href="index.php">Kocaeli
					Üniversitesi</br>Bilgisayar Muhendisligi
				</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse js-navbar-collapse" style="margin-top: 15px">
		<ul class="nav navbar-nav navbar-right">
		<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Hakkımızda<span class="caret"></span></a>

							<ul class="dropdown-menu" style="background-color: #2E363F;border-radius: 6px;">
								<li><a style="color:#afafaf" href="#section41">Tarihçe</a></li>

								<li><a style="color:#afafaf" href="#section42">Hakkımızda</a></li>
								<li><a style="color:#afafaf" href="#section40">Misyon</a></li>
								<li><a style="color:#afafaf" href="#section43">Vizyon</a></li>
								<li><a style="color:#afafaf" href="#section43">Ana Bilim Dalları</a></li>
								<li><a style="color:#afafaf" href="#section43">Program Çıktıları</a></li>
							</ul></li>
			<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Eğitim <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Lisans</li>
							<li><a href="#section41">Dilekçe Formları</a></li>
								<li><a href="#section42">Ders Planı</a></li>
								<li><a href="#section40">Ders İçerikleri</a></li>
								
								<li><a href="#section40">Proje ve Bitirme</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Y.Lisans</li>
							<li><a href="#section41">Çalışma Alanları</a></li>
							<li><a href="#section42">Ders Listesi</a></li>
							<li><a href="#section40">Ders Programı</a></li>
							<li><a href="#section43">Tezler</a></li>
							<li class="divider ek"></li>
						</ul>
					</li>
						<li class="col-sm-3">
						<ul>
							
							<li class="dropdown-header">Doktora</li>
							<li><a href="#section42">Ders Listesi</a></li>
							<li><a href="#section40">Ders Programı</a></li>
							<li><a href="#">Tezler</a></li>
							<li><a href="#">Çalışma Alanları</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Ekler</li>
							<li><a href="#section41">Aday Öğrenciler</a></li>
							<li><a href="#section42">Mezunlar</a></li>
							<li><a href="#section40">Müdek</a></li>
							<li><a href="#section43">Akademik Takvim</a></li>
							<li><a href="#section43">İntibak Öğrencileri</a></li>
							<li><a href="#section43">Diploma Sorgulama</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>


				
				</ul>
				
			</li>
			<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Personel</li>
								<li><a href="contacts.php">Öğretim Üyeleri</a></li>
								<li><a href="kadro.php">Öğretim Elemanları</a></li>
								<li><a href="sekreter.php">İdari Personel</a></li>
								<li><a href="giris.php">Sisteme Giriş</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
					<li class="col-md-6">
						<ul>
							<li class="dropdown-header">Araştırma</li>
							<li><a href="#section41">Akıllı Sistemler Araştırma	Laboratuvarı</a></li>
								<li><a href="#section42">Bilgisayar Ağları ve Haberleşme Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a></li>
								<li class="divider ek"></li>
								
							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Yönetim</li>
							<li><a href="#section41">Bilgisayar Mühendisliği Yönetimi</a></li>
							<li class="divider ek"></li>
							
						</ul>
					</li>
				</ul>
				
			</li>
			<li><a href="#section42">Ulaşım/İletişim</a>				

					</li>
			
			<li>				
				<a  > <img
					src="https://lipis.github.io/flag-icon-css/flags/4x3/gb.svg" alt="KOÜ" width="20" height="20"> </a>
					</li>					
						
		</ul>

		
	</div><!-- /.nav-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
    <span class="header_shadow" style="top:74px"></span>
	
<div class="wrapper">
      <!-- Categories Homepage Section Start -->
      <section id="categories-homepage">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="section-title" style="text-align:center">İdari Personel</h2>
			  </br>
            </div>          
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-1 wow fadeInUpQuick animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                <div class="icon">
                  <a href="http://bilgisayar.kocaeli.edu.tr/img/kadro/ResulOzkan.jpg"><img width="120" height="120" style="border-radius:50%"  src="http://bilgisayar.kocaeli.edu.tr/img/kadro/ResulOzkan.jpg"></a>
                </div>

                <div class="category-header">  
                  <a href="http://www.gezginresul.com/"><h4>Bölüm Sekreteri Resul ÖZKAN</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="mailto:bilgisayar@kocaeli.edu.tr" style="color:#333">E-posta :</a>
                      <sapn class="category-counter"> bilgisayar@kocaeli.edu.tr</sapn>
                    </li>
                    <li>
                      <a style="color:#333">Oda No :</a>
                      <sapn class="category-counter">3003</sapn>
                    </li>
                    <li>
                      <a style="color:#333">Telefon :</a>
                      <sapn class="category-counter">303 3560</sapn>
                    </li>
                    <li>
                      <a style="color:#333" >Ana Bilim Dalı :</a>
                      <sapn class="category-counter">Bilgisayar Bilimleri</sapn>
                    </li>
                    <li>
                      <a style="color:#333">Araştırma Alanları :</a>
                      <sapn class="category-counter">----</sapn>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          
			
          </div>
        </div>
      </section>
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

 <footer class="footer" role="contentinfo">
					
						<div id="inner-footer" class="row clearfix">
							<div class="container" >
							<div class="row" >
							<!-- Logo -->
							<div class="col-md-4">								
								<div id="footer-logo" style="margin-top: 19px"></div>
		    				</div>
		    				<!-- Contact Info -->
		    				<div class="col-md-4">
		    					<h5 class="footer-title" style="padding-left:15px">İletişim</h5>
								<p style="padding-left: 20px">KOÜ Mühendislik Fakültesi (B Blok)<br/>
								   Bilgisayar Mühendisliği<br/>
								   Umuttepe Yerleşkesi 41380 Kocael<br/>
								   <br/>
								   <a href="tel:25353574"1"1">+90 (262) 303 35 60</a><br/>
								   <a href="mailto:concierge@plu.edu">bilgisayar@kocaeli.edu.tr</a>
								</p>
								<ul class="social-media-icons" style="padding-left: 15px">
									<a href="http://www.facebook.com/Pacific.Lutheran.University" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-facebook fa-stack-1x"></i>
											</span>
											<span class="social-type-tooltip" style="left:-9px;">facebook</span>								
										</li>
									</a>
									
									<a href="http://twitter.com/PLUNEWS" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-twitter fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-2px;">twitter</span>
										</li>
									</a>
									<a href="http://instagram.com/pacificlutheran" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-instagram fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-11px;">instagram</span>
										</li>
									</a>
									<a href="http://www.linkedin.com/edu/school?id=19647&trk=tyah&trkInfo=tas%3APacific%20Lutheran%20%2Cidx%3A3-1-4" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-linkedin fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-5px;">linkedin</span>
										</li>
									</a>
									<a href="https://www.snapchat.com/add/pacificlutheran" target="_blank">
										<li>
											<span class="fa-stack">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-snapchat-ghost fa-stack-1x"></i>
											</span>									
											<span class="social-type-tooltip" style="left:-9px;">snapchat</span>
										</li>
									</a>
									
									
								</ul>
								<br/>
		    				</div>
		    				<!-- Global Footer Links -->
		    				<div class="col-md-4">
		    					<h5 class="footer-title" style="padding-left: 15px">Faydalı Linkler</h5>
		    					<div style="padding-left: 20px">
								<i class="fa fa-globe"></i><a href="http://kocaeli.edu.tr" style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Kocaeli Üniversitesi</a><br/>
								<i  class="fa fa-users"></i><a  href="http://bilsis.kocaeli.edu.tr/" style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Öğrenci Bilgi Sistemi</a><br/>
							    <i class="fa fa-child"></i><a id="mundi" style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Kou Günlük Yemek Listesi</a><br/>
								<i class="fa fa-bar-chart"></i><a style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Istatistik</a><br/>
								<i class="fa fa-map-marker"></i><a style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Mühendislik Fakültesi</a><br/>
								<i class="fa fa-book"></i><a style="text-decoration: none;	font-size: 14px;
								line-height: 30px;"> Kocaeli Üniversitesi Kütüphane</a><br/>
		    				</div>
		    							</div>
		    							</div>                		
						</div> <!-- end #inner-footer -->								
					</footer> <!-- end .footer -->

</body>

</html>
