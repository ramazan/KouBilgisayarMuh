	<?php
	include_once './dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

	?>

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
    
    <div class="container-fluid" style="margin-top: 100px" >
    	<div class="row" >
    		<div class="col-md-8"  >

    				<div id="myCarousel" class="carousel slide"  data-ride="carousel" style="border: 3px solid #d9d4c6;" >
				  <div class="carousel-inner"  role="listbox" style="border: 1px solid #fff; background-color:#d9d4c6">
				    <div class="item active" style="height:310px; background-color:#d9d4c6" >
				      <img src="http://bilgisayar.kocaeli.edu.tr/img/slider/30_SantekAna.jpg" width="1100" height="400" alt="">
				      <div class="carousel-caption">
				      <h3 style="font-size: 20px">Ar-ge Proje Pazarı Tübitak Projesinde Üçüncülük Ödülü </h3>
				      <p>PMI (Project Magement Institute) Türkiye Ve Kocaeli Üniversitesi işbirliği ile düzenenecek PMI-TR ve Proje Yönetimine Giriş Ve Tanıtım Etkinliğine tüm öğrencilerimiz davetlidir.</p>
				      </div>
				    </div>

				    <div class="item" style="height:310px; background-color:#d9d4c6">
				      <img src="http://bilgisayar.kocaeli.edu.tr/img/slider/8_80_Tubitak02.jpg" width="1100" height="400"  alt="Chania">
				      <div class="carousel-caption">
				      <h3 style="font-size: 20px">Öğrencilerimizin Projelerinin Tübitak Başarısı  </h3>
				      				      <p>PMI (Project Magement Institute) Türkiye Ve Kocaeli Üniversitesi işbirliği ile düzenenecek PMI-TR ve Proje Yönetimine Giriş Ve Tanıtım Etkinliğine tüm öğrencilerimiz davetlidir.</p>

				      </div>
				    </div>
				      
				    <div class="item" style="height:310px; background-color:#d9d4c6">
				      <img src="http://bilgisayar.kocaeli.edu.tr/img/slider/37_CepGozAna.jpg" width="1100" height="400" alt="Flower">
				      <div class="carousel-caption">
				      <h3 style="font-size: 20px">PMI-TR ve Proje Yönetimine Giriş Tanıtım Etkinliği </h3>
				      				      <p>PMI (Project Magement Institute) Türkiye Ve Kocaeli Üniversitesi işbirliği ile düzenenecek PMI-TR ve Proje Yönetimine Giriş Ve Tanıtım Etkinliğine tüm öğrencilerimiz davetlidir.</p>

				      </div>
				    </div>
  					</div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
					

								<br/>
					    		<div class="row" >
			
    	   

                
    		<div class="col-sm-6" style="margin-top: 20px" >
    			<ul class="list-group">
			  <li class="list-group-item">
			  <div >
    			<h4>Genel Duyurular<span class="badge" style="float:right; " >57</span></h4>
    			</div>
			  </li>
			   <li class="list-group-item" >
			  <ul class="timeline">

			<li class="timeline-inverted">

				<div class="timeline-image" style="border-radius: 50%;">

					<h4>
						Sayısal  <br /> Yöntemler<br /> 2016
					</h4>

				</div>
				<div class="timeline-panel">

					<div class="timeline-heading">
						<h4>Bana Acil Ulaşın diyorum size siz kim siniz</h4>

					</div>
					<div class="timeline-body">
						<p class="text-muted">
							Mobil proglama dersini benden alanlar...<br />
						</p>

					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Yrd.Doç.Dr Burak İnner</h5>

					</div>
				</div>
			</li>
			<li class="timeline-inverted" style="margin-top: 30px;">
				<div class="timeline-image" style="border-radius: 50%;">
					<h4>
						15 <br>Agustos <br>2016
					</h4>
				</div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>Sunumalarını Bana Yapacak Ogrencilerin Dikkatine</h4>
					</div>
					<div class="timeline-body">
						<p class="text-muted">Staj sunumları ekte bulunan listedeki
							sıraya göre ...</p>
					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Arş.Göv. Furkan Göz</h5>
					</div>
			</li>
			<li class="timeline-inverted" style="margin-top: 30px;">
				<div class="timeline-image" style="border-radius: 50%;">
					<h4>
						15 <br> Aralık <br>2016
					</h4>
				</div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>Kendinize gelin artık ders çalışın</h4>
					</div>
					<div class="timeline-body">
						<p class="text-muted">Staj sunumları ekte bulunan listedeki
							sıraya göre ...</p>
					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Arş.Göv. Furkan Göz</h5>
					</div>
			</li>
			<li class="timeline-inverted" style="margin-top: 30px;">
				<div class="timeline-image" style="border-radius:50%;">
					<h4>
						24 <br> Ocak <br>2016
					</h4>
				</div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>Sordum sarı çiceğe annen baban var mıdır diye ?</h4>
					</div>
					<div class="timeline-body">
						<p class="text-muted">Çiçek yemil kafayı sen ne yaparsan boş...</p>
					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Arş.Göv. Furkan Göz</h5>
					</div>
			</li>

		</ul>
		<div align="center">
			<ul class="zundi">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
		</div>

			  </li>
			  </li>
			  <li class="list-group-item" >
    			<h4><span class="badge" style="float:right;" >Tüm Genel Duyurular</span></h4>
    			<br/>
			  </li>

  </ul>
    		</div>
    		<div class="col-sm-6" style="margin-top:20px" >
    			<ul class="list-group">
			  <li class="list-group-item" >
			  <div >
    			<h4>Bölüm Duyuruları<span class="badge" style="float:right;" >28</span></h4>
    			</div>
			  </li>
			   <li class="list-group-item" >
			  <ul class="timeline">

			<li class="timeline-inverted">

				<div class="timeline-image">

					<h4>
						29 <br /> Agustos <br /> 2016
					</h4>

				</div>
				<div class="timeline-panel">

					<div class="timeline-heading">
						<h4>Edestek.kocaeli.edu.tr Sistemini Kullandığım Dersleri Alan Öğrencilerin Dikkatine </h4>

					</div>
					<div class="timeline-body">
						<p class="text-muted">
							Mobil proglama dersini benden alanlar...<br />
						</p>

					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Yrd.Doç.Dr Burak İnner</h5>

					</div>
				</div>
			</li>
			<li class="timeline-inverted" style="margin-top: 30px;">
				<div class="timeline-image">
					<h4>
						4 <br> Nisan <br>2016
					</h4>
				</div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>Dünyaya geldiğim anda !</h4>
					</div>
					<div class="timeline-body">
						<p class="text-muted">İki kapılı bir handa gidiyorum gündüz gece</p>
					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Arş.Göv. Furkan Göz</h5>
					</div>
			</li>
			<li class="timeline-inverted" style="margin-top: 30px;">
				<div class="timeline-image">
					<h4>
						15 <br>Mart <br>2016
					</h4>
				</div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>Uzun ince bir yoldayım Gidiyorum Gündüz gece</h4>
					</div>
					<div class="timeline-body">
						<p class="text-muted">Bilmiyorum ne haldayım gidiyorum gündüz gece...</p>
					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Arş.Göv. Furkan Göz</h5>
					</div>
			</li>
			<li class="timeline-inverted" style="margin-top: 30px;">
				<div class="timeline-image">
					<h4>
						15 <br>Agustos <br>2016
					</h4>
				</div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4>Sunumalarını Bana Yapacak Ogrencilerin Dikkatine</h4>
					</div>
					<div class="timeline-body">
						<p class="text-muted">Staj sunumları ekte bulunan listedeki
							sıraya göre ...</p>
					</div>
					<div class="timeline-heading">
						<h5 class="subheading">Arş.Göv. Furkan Göz</h5>
					</div>
			</li>
		</ul>
		<div align="center">
			<ul class="zundi">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
		</div>
			  </li>
			  <li class="list-group-item" >
    			<h4><span class="badge" style="float:right;" >Tüm Bölüm Duyuruları</span></h4>
    			<br/>
			  </li>

  </ul>
    		</div>

    		</div>
    			
    			</div>


    			<div class="col-md-4 yo" id="event-list">
			  <ul class="list-group">
			  <li class="list-group-item" >
    			 <div >
    			<h4>Etkinlikler <span class="badge" style="float:right;" >28</span></h4>
    			</div>
			  </li>
			   <li class="list-group-item" >
					                 
					<div class="event postcard-left">
					<div class="event-date">
					<span class="event-month">agu</span> <span class="event-day">7</span>
					</div>
					<div class="event-text">
					<h3 style="margin: 0 0 5px 0;"><a href="http://events.stanford.edu/events/606/60641/" class="su-link" data-ua-action="hp-event" data-ua-label="id ">PMI-TR ve Proje Yönetimine Giriş Tanıtım Etkinliği</a></h3>
					<p class="timestamp">11.00 - 17.00 arası</p>
					</div>
					</div>

			</li>
		<li class="list-group-item" style="background: #ebf9e0;">
					                 
					<div class="event postcard-left">
					<div class="event-date">
					<span class="event-month">eyl</span> <span class="event-day">31</span>
					</div>
					<div class="event-text">
					<h3 style="margin: 0 0 5px 0;"><a href="http://events.stanford.edu/events/606/60641/" class="su-link" data-ua-action="hp-event" data-ua-label="id ">CBD 2016: Carillon Concert and Quiet Contemplation</a></h3>
					<p class="timestamp">12.00 - 16.00 arası</p>
					</div>
					</div>

			</li>
			<li class="list-group-item" >
					                 
					<div class="event postcard-left">
					<div class="event-date">
					<span class="event-month">Eki</span> <span class="event-day">4</span>
					</div>
					<div class="event-text">
					<h3 style="margin: 0 0 5px 0;"><a href="http://events.stanford.edu/events/606/60641/" class="su-link" data-ua-action="hp-event" data-ua-label="id ">Tek Sağlık Olmadan Sağlıklı Dünya Mümkün müdür ? </a></h3>
					<p class="timestamp">Konferans - 15:00</p>
					</div>
					</div>

			</li>
			<li class="list-group-item" style="background: #ebf9e0;">
					                 
					<div class="event postcard-left">
					<div class="event-date">
					<span class="event-month">Eki</span> <span class="event-day">12</span>
					</div>
					<div class="event-text">
					<h3 style="margin: 0 0 5px 0;"><a href="http://events.stanford.edu/events/606/60641/" class="su-link" data-ua-action="hp-event" data-ua-label="id ">Google Devfest Yarışması Kendimize Gelelim</a></h3>
					<p class="timestamp">12 p.m.</p>
					</div>
					</div>

			</li>
			<li class="list-group-item" >
					                 
					<div class="event postcard-left">
					<div class="event-date">
					<span class="event-month">oca</span> <span class="event-day">8</span>
					</div>
					<div class="event-text">
					<h3 style="margin: 0 0 5px 0;"><a href="http://events.stanford.edu/events/606/60641/" class="su-link" data-ua-action="hp-event" data-ua-label="id ">Öğretmen Adayları İçin Barış Eğitimi </a></h3>
					<p class="timestamp">30 Ocak » 11:00 - 04 Şubat » 17:00</p>
					</div>
					</div>

			</li>
			  

			  <li class="list-group-item" >
    			<h4><span class="badge" style="float:right;" >Tüm Etkinlikler</span></h4>
    			<br/>
			  </li>
			</ul>
			 
  </div>
      			    			<div class="col-md-4" >
    					    				 <ul class="list-group">
			  <li class="list-group-item" >
			  <div >
    			<h4>İş-Staj İlanları<span class="badge" style="float:right;" >4</span></h4>
    			</div>
			  </li>
					<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='is-staj';";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										
								        while($row = mysqli_fetch_array($result)){
									echo "<li class='list-group-item' style='background: #ebf9e0;'><div class='team-member'>";
								
									echo "<h3 style='margin: 0 0 5px 0;'><a href='#' class='su-link' data-ua-action='hp-event' data-ua-label='id'>".$row['TITLE']." </a></h3>";
									echo "<p class='text-muted'>".$row['MESSAGE']."</p>";
									$originalDate = $row['DATE'];
									$newDate = date("d F l", strtotime($originalDate));
									
									$ing_aylar = array("January","February","March","May","April","June","July","August","September","October","November","December");
									    $tr_aylar = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
									    
									    $ing_gunler = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
									    $tr_gunler = array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
									    $newDate = str_replace($ing_aylar,$tr_aylar,$newDate);
									    $newDate = str_replace($ing_gunler,$tr_gunler,$newDate);

									echo "<h4  style='text-align:right; color:#009745;'>".$newDate."</h4></div></li>";
  

			
								        }


								        mysqli_free_result($result);
								    } else{
								        echo "Aranan kayıtlar bulunamadı :( .";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}						
			
					?>
			  </li>
			    <li class="list-group-item" >
    			<h4><span class="badge" style="float:right;" >Tüm İlanlar</span></h4>
    			<br/>
			  </li>
	</ul>

    			</div>


    		</div>


    	</div>
		<div class="bgGrey">
    	<div class="container-fluid" >
    		<div class="row" >
    			 <div class="col-sm-12" style="    background-clip: content-box; background-color: #fff; " >

                <h4  style="border-bottom: 1px solid #d5d0c0;color:#820000;margin-left: 12px;margin-right:10px;font-size: 20px">Haberler<span class="badge" style="float:right;margin-right:10px ">57<br/></span></h3>
                <br/>
            </div>
            <div class="col-sm-12" style="    background-clip: content-box; background-color: #fff">


                <div class="col-sm-3 news-item">
  <div class="news-img">
    <a href="http://news.stanford.edu/2016/10/26/super-emitters-responsible-bulk-u-s-methane-emissions/" class="su-link" data-ua-action="hp-news" title="Photo Credit: Shutterstock"><img src="https://www.ceu.edu/sites/default/files/main_image/basic_page/85/students.jpg" class="img-responsive" alt="Natural gas field" /></a>
  </div>
  <div class="news-text">
    <h3><a href="http://news.stanford.edu/2016/10/26/super-emitters-responsible-bulk-u-s-methane-emissions/" class="su-link" data-ua-action="hp-news">2016-2017 Vize Sınavları Hk.</a></h3>
    <p>Bölümümüz 2016-2017 Vize Sınav Programı ektedir.</p>
  </div>
</div>
                        <div class="col-sm-3 news-item">
  <div class="news-img">
    <a href="http://news.stanford.edu/2016/10/26/super-emitters-responsible-bulk-u-s-methane-emissions/" class="su-link" data-ua-action="hp-news" title="Photo Credit: Shutterstock"><img src="http://www.stanford.edu/rw_includes/homepage/images/2016-10-25_cooperation_home.jpg" class="img-responsive" alt="Natural gas field" /></a>
  </div>
  <div class="news-text">
    <h3><a href="http://news.stanford.edu/2016/10/26/super-emitters-responsible-bulk-u-s-methane-emissions/" class="su-link" data-ua-action="hp-news">2016-2017 Güz Dönemi Lisans Ders Programları</a></h3>
    <p>2016-2017 Eğitim-Öğretim yılında Fakültenize Yüksekokulunuza...</p>
  </div>
</div>
                             <div class="col-sm-3 news-item">
  <div class="news-img">
    <a href="http://news.stanford.edu/2016/10/26/super-emitters-responsible-bulk-u-s-methane-emissions/" class="su-link" data-ua-action="hp-news" title="Photo Credit: Shutterstock"><img src="http://www.davevoyles.com/wp-content/uploads/2015/01/Microsoft-Students.jpg" class="img-responsive" alt="Natural gas field" /></a>
  </div>
  <div class="news-text">
    <h3><a href="http://news.stanford.edu/2016/10/26/super-emitters-responsible-bulk-u-s-methane-emissions/" class="su-link" data-ua-action="hp-news">Microsoft Dreamspark Üyeliği Hakk.</a></h3>
    <p>Bir çok Microsoft ürününü ücretsiz indirebileceğiniz Microsoft Dreamspark...</p>
  </div>
 
</div>
<div class="col-sm-3" id="more-news">
            <h4 style="color: #5cb85c">Daha Fazla Haber</h4>
            <ul>
              <!-- More Headlines include file --> 
              <li><a style="    font-size: 14px; font-weight: 700;" class="su-link"  data-ua-action="hp-news" data-ua-label="How+physicians+can+handle+discrimination+by+patients%2C+families">İngilizce Muafiyet Sınav Sonuçları</a></li>
			 <li><a  style="    font-size: 14px; font-weight: 700;" class="su-link"  >15 Temmuz Dayanışma Kampanyası</a></li>
			 <li><a  style="    font-size: 14px; font-weight: 700;" class="su-link" >2016-2017 Güz Dönemi Lisans Ders Programları</a></li>


            </ul>
            <p class="more-link"><a href="http://news.stanford.edu" class="su-link" data-ua-action="news.stanford.edu"><i class="fa fa-chevron-circle-right"></i> <span>Tümü</span></a></p>
            <br/>
            <br/>
          </div>
		  
                  	</div>           
    		</div>
    	</div>
		  <br/>
            <br/>
			 <br/>
	</div>
	
    	

    	
    	

                           
	<!-- jQuery -->
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
