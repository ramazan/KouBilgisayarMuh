<!DOCTYPE HTML5>
<html>

<head>
	<title>Bilgisayar Mühendisliği - Akademisyen Girişi</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/giris.css">
	<link href="css/agency.min.css" rel="stylesheet">
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
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header" style="padding-bottom: 25px">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand"><img
					src="img/kou_logo.png" alt="KOÜ" width="50" height="50"> </a> <a
					class="navbar-brand">Kocaeli
					Üniversitesi</br>Bilgisayar Muhendisligi
				</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 10px">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Hakkımızda<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#section41">Tarihçe</a></li>
								<li><a href="#section42">Hakkımızda</a></li>
								<li><a href="#section40">Misyon</a></li>
								<li><a href="#section43">Vizyon</a></li>
								<li><a href="#section43">Ana Bilim Dalları</a></li>
								<li><a href="#section43">Program Çıktıları</a></li>
							</ul></li>
						<li><a href="#section3" class="nav-item">Yönetim</a></li>
						<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Araştırma<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#section41">Akıllı Sistemler Araştırma
										Laboratuvarı</a></li>
								<li><a href="#section42">Bilgisayar Ağları ve
										Haberleşme Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a></li>
								<li><a href="#section42">Projeler</a></li>
							</ul></li>
						<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Personel<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#section41">Öğretim Üyeleri</a></li>
								<li><a href="#section42">Öğretim Elemanları</a></li>
								<li><a href="#section40">İdari Personel</a></li>
								<li><a href="/KouBilgisayarMuh/giris.php">Sisteme Giriş</a></li>
							</ul></li>
						<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Lisans<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#section41">Öğrenci ve Dilekçe Formları</a></li>
								<li><a href="#section42">Ders Planı</a></li>
								<li><a href="#section40">Ders İçerikleri</a></li>
								<li><a href="#section43">İntibak Öğrencileri</a></li>
								<li><a href="#section42">Aday Öğrenciler</a></li>
								<li><a href="#section40">Proje ve Bitirme</a></li>
								<li><a href="#section43">Akademik Takvim</a></li>
								<li><a href="#section43">Müdek</a></li>
								<li><a href="#section43">Diploma Sorgulama</a></li>
								<li><a href="#section43">Staj</a></li>
							</ul></li>
						<li class="dropdown nav-item"><a class="dropdown-toggle" href="#"
							data-toggle="dropdown">Y.Lisans/Doktora<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#section41">Çalışma Alanları</a></li>
								<li><a href="#section42">Ders Listesi</a></li>
								<li><a href="#section40">Ders Programı</a></li>
								<li><a href="#section43">Tezler</a></li>						
							</ul></li>
						<li><a href="#section3" class="nav-item">Mezunlar</a></li>
						<li><a href="#section3" class="nav-item">Ulatışm/Iletişim</a></li>
						<li><a href="#section3" class="nav-item">English</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">

		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default login">
					<div class="panel-heading">
						<div id="alertMessage" class="alert alert-danger" role="alert" style="display:none; text-align:center;" >
							<strong> E-mail ve şifre yanlış</strong>
						</div><br>	
						<div class="row-fluid user-row">
							<img width="100" height="100" src="./img/koub.png" />
						</div><br>
						<h3 class="panel-title user-row">Bilgisayar Mühendisliği</h3>
													<hr>

													<label>Akademisyen Girişi</label>

					</div>
					<div class="panel-body">
						<form accept-charset="UTF-8" role="form" method="POST" action="">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="j_username" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Şifre" name="j_password" type="password" value="">
								</div>
								<input class="btn btn-lg btn-success btn-block" type="submit" value="Giriş">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <footer style="background-color:#5cb85c">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

					<ul class="list-inline quicklinks">
                       
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons" >

                        <li><a href="#"><i class="fa fa-graduation-cap" style="margin-top: 10px;"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-users" style="margin-top: 10px;"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-comments" style="margin-top: 10px;"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-globe" style="margin-top: 10px;"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                   <ul class="list-inline quicklinks">
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>

	<!-- JAVASCRIPT SOURCES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			checkPath();
		});

		function checkPath() {
			var query = window.location.pathname; // /Ticket_System/j_security_check
			var vars = query.split("/");
			console.log("path : " + vars   +"    "  +query);

			if (vars[2] == "j_security_check") {
				console.log("invalid login");		
				$('#alertMessage').show();
			}
		}
	</script>
</body>

</html>
