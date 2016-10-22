<?php
############################### SAYFAYA ERİŞİM İÇİN YETKİ KONTROLU ############################

# Konfigurasyon
$sayfaSifreleme ='1'; # 1 acik , 0 kapali
$kullaniciAdi = 'admin';
$sifre = '12345';

# yetki kontrol fonksiyonu
function yetkiKontrol($kullaniciAdi,$sifre) {
  if(empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != "$kullaniciAdi" || $_SERVER['PHP_AUTH_PW'] != "$sifre") {
  header('WWW-Authenticate: Basic realm="Yetki Kontrol"');
  die(header('HTTP/1.0 401 Unauthorized'));
  }
}

# Sayfa Sifreleme aciksa
if($sayfaSifreleme =='1') {
# Veri ve sifre kontrolu
yetkiKontrol($kullaniciAdi,$sifre);
}

############################### YETKİ KONTROLU ############################

include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
$error = false;

if (isset($_POST['kaydet'])) {

    #formdan alınan veriler..
    $name = mysqli_real_escape_string($con, $_POST['NAME']);
    $email = mysqli_real_escape_string($con, $_POST['E-MAIL']);
    $password = mysqli_real_escape_string($con, $_POST['PASSWORD']);
    $cpassword = mysqli_real_escape_string($con, $_POST['PASSWORD_AGAIN']);

    #gelen verilerin kontrolu sağlanıyor..
    if (strlen($email) < 10) {
        $error = true;
        $mail_error = "Mail 10 karakterden kısa olamaz !";
    }
    if (strlen($name) < 4) {
        $error = true;
        $name_error = "Ad Soyad 4 karakterden kısa olamaz !";
    }
    if(strlen($password) < 4) {
        $error = true;
        $password_error = "Şifre uzunluğu en az 4 karakter olmalıdır  .!";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Şifreler eşleşmiyor  .!";
    }
    if (!$error) {

	  	#echo " İSİM : " . $name . "  email : " .$email ." şifre :  " .$password;

    	if(mysqli_query($con, "INSERT INTO users (NAME,EMAIL,PASSWORD) VALUES('" . $name . "','" . $email . "', MD5('" . $password . "'))")) {
            $successmsg = " <div class='alert alert-success'><strong> Kaydınız Başarıyla Gerçekleşti.</strong></div>";
          ?>
           <style type="text/css">#warn_alert{display:none;}</style>
          <?php
        } else {
            $errormsg = "<div class='alert alert-danger'><strong> Bi' Şeyler Ters Gitti  .. Lütfen Tekrar Deneyiniz. </strong></div>";
        }
        
    }
}

?>

<!DOCTYPE HTML5>


<html>

<head>
	<title>Bilgisayar Mühendisliği - Akademisyen Ekleme</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/giris.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
	<div class="container">

		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default login">
					<div class="panel-heading">
						<div class="row-fluid user-row">
							<img width="100" height="100" src="./img/koub.png" />
						</div><br>
						<h3 class="panel-title user-row">Bilgisayar Mühendisliği</h3>
													<hr>

													<label>Akademisyen Ekleme</label>

					</div>
					<div class="panel-body">
						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<fieldset>

									   <span><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                                       <span><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

                                  <div class="form-group">
									<input class="form-control" required value="<?php if($error) echo $name_error; ?>" placeholder="Ad Soyad giriniz" name="NAME" type="text">
									<span class="text-danger"><strong><?php if (isset($name_error)) echo $name_error; ?></strong></span>
								</div>     

								<div class="form-group">
									<input class="form-control" required value="<?php if($error) echo $mail_error; ?>" placeholder="E-mail giriniz" name="E-MAIL" type="text">
									<span class="text-danger"><strong><?php if (isset($mail_error)) echo $mail_error; ?></strong></span>
								</div>
								<div class="form-group">
									<input class="form-control"  placeholder="Şifreyi giriniz" name="PASSWORD" type="password" required value="">
									<span class="text-danger"><strong><?php if (isset($password_error)) echo $password_error; ?></strong></span>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Şifreyi tekrar giriniz" name="PASSWORD_AGAIN" required type="password" value="">
									<span class="text-danger"><strong><?php if (isset($cpassword_error)) echo $cpassword_error; ?></strong></span>
								</div>



								<input class="btn btn-lg btn-success btn-block" type="submit" name="kaydet" value="KAYDET">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT SOURCES -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
