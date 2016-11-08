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

<!-- Theme CSS -->
<link href="css/agency.min.css" rel="stylesheet">
<link href="css/dummy.css" rel="stylesheet">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
								 
								<li><a href="kadro.php">Bölüm Personelleri</a></li>
								  
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
			<li><a href="iletisim.php">Ulaşım/İletişim</a>				

					</li>
			
			 				
						
		</ul>

		
	</div><!-- /.nav-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
    <span class="header_shadow" style="top:74px"></span>
<div class="container-fluid" style="margin-top: 125px">
<li class="list-group-item" style="background-color:#F3FBEE">
			  <div>
    		<h3 style="text-align:center">TÜM BÖLÜM DUYURULARI</h3>
    			</div>
			  </li>

    	<div class="row">
    		<div class="col-md-12">

				   <li class="list-group-item" >
			  <ul class="timeline">

			
<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT users.NAME,announcements.TITLE,announcements.MESSAGE,announcements.DUYURU_TURU,announcements.DATE , announcements.ID	FROM announcements INNER JOIN users ON users.ID=announcements.USER_ID WHERE DUYURU_TURU='Bolum' ORDER BY ID DESC;";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										
								        while($row = mysqli_fetch_array($result)){


								      echo "<li class='timeline-inverted'><div class='timeline-image' style='border-radius: 50%;'>";
								    	
									$originalDate = $row['DATE'];
									$newDateDay = date("d", strtotime($originalDate));
									$newDateMonth = date("F", strtotime($originalDate));
									$newDateYear = date("Y", strtotime($originalDate));
									
									$ing_aylar = array("January","February","March","May","April","June","July","August","September","October","November","December");
									    $tr_aylar = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");

									    $newDateMonth = str_replace($ing_aylar,$tr_aylar,$newDateMonth);

								       echo "<h4>".$newDateDay."</br>".$newDateMonth."</br>".$newDateYear."</h4></div>"; 		

								  //echo "<div class='timeline-panel'><div class='timeline-heading'><h4>".$row['TITLE']."</h4></div>";


  			echo "<div class='timeline-panel'><div class='timeline-heading'>
					 <a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."'><h4>".$row['TITLE']."</h4></a>";


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


                        if(strlen($row['MESSAGE']) >= 30){

							$row['MESSAGE']=mb_substr($row['MESSAGE'], 0,60,'utf-8');
							$row['MESSAGE'] = $row['MESSAGE'] . "...";

						}	

						if(strstr($row['MESSAGE'],"Ek : ")) $row['MESSAGE'] ='Ektedir..';

                        echo "<div class='timeline-body'><p class='text-muted'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."'>".$row['MESSAGE']."</a><br /></p></div>";




								  echo "<div class='timeline-heading'><h5 class='subheading'>".$row['NAME']."</h5></div></div></li>";
			
								    }


								        mysqli_free_result($result);
								    } else{
								        echo "Aranan kayıtlar bulunamadı :( .";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}						
			
	?>

		</ul>
		<br><br>

			  </li>
			  </div>
			   </div>
			    </div>
	
	
	
	
	
	
		<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

 <?php
include_once "footer.php"
  ?>
	
</body>

</html>