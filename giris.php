<?php
	
   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      # mail ve password şifrenin formdan gelmesi 
      
      $myemail = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT ID FROM users WHERE EMAIL = '$myemail' and PASSWORD = md5('$mypassword')";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      #Tablodan donen satır sayısı
      $count = mysqli_num_rows($result);

      $sorgu = "SELECT NAME form users WHERE EMAIL = '$myemail'";
      $sonuc = mysqli_query($con,$sorgu); 
    

      # Eğer sonuç $myemail ve md5('$mypassword') ile eşleşirse , tablodan bir satır dönmesi gerek.
      # eğer dönen sayı 1 ise giriş başarılıdır...
      if($count == 1) {
         $error = "<div style='text-align:center' class='alert alert-success'>Giriş Başarılı.</div>";
         $_SESSION['login_user'] = $myemail;         
         header("location: panel.php");
		 exit;
      }else {
         $error = "<div style='text-align:center' class='alert alert-danger'>Kullanıcı Adı veya Şifre yanlış</div>";
      }
   }
?>
    <!DOCTYPE HTML5>
    <html>

    <head>
        <title>Bilgisayar Mühendisliği - Akademisyen Girişi</title>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/giris.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>

    <body>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default login">
                        <div class="panel-heading">
                            <div id="alertMessage" class="alert alert-danger" role="alert" style="display:none; text-align:center;">
                                <?php echo $error; ?>
                            </div>
                            <br>
                            <div class="row-fluid user-row">
                                <img width="100" height="100" src="./img/koub.png" />
                            </div>
                            <br>
                            <h3 class="panel-title user-row">Bilgisayar Mühendisliği</h3>
                            <hr>
                            <label>Akademisyen Girişi</label>
                        </div>
                        <div class="panel-body">
                            <span><?php if (isset($error)) { echo $error; } ?></span>
                            <form accept-charset="UTF-8" role="form" method="POST" action="">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" required placeholder="E-mail" name="email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required placeholder="Şifre" name="password" type="password" value="">
                                    </div>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Giriş">
                                </fieldset>
                            </form>
                            <div style="text-align: center;">
                                <a href="/index.php">Ana Sayfaya dön.</a>
                            </div>
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
