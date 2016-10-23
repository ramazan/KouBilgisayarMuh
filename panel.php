<?php
   include('session.php');
?>
 

<!DOCTYPE HTML5>
<html>
   
   <head>
	    <title>Koü Ceng</title>
		<link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="./css/panel.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
   </head>
   
   <body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" style="padding-right: 10px;">
					<a href=".">
						<img id="brand_img" alt="Brand" width="60" height="60" src="./img/kou_logo.png">
						Bilgisayar Mühendisliği
					</a>
				</div>

				<div style="padding-top:5px;" id="navs" class="collapse navbar-collapse">
					<ul id="navLinks" class="nav navbar-nav">
						
						<li id="nav_duyurular" class="active">
								<a href="#" onclick="duyuruGoster()">
									<span class="glyphicon glyphicon-inbox"></span> Duyurular
								</a>
						</li>

						<li id="nav_users">
								<a href="#" onclick="kullaniciGoster()">
									<i class="fa fa-users" aria-hidden="true"></i> 
									Kullanıcılar 
									<span id="usersBadge" class="badge"><?php echo $kullanici_sayisi?></span>
								</a>
						</li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						
						<li><a>Sayın,<b> <?php echo $login_session_name?></b> Hoşgeldiniz!</a></li>
						
						<li id="nav_profile">
							<a href="#add_user_modal" onclick="profilGoster()">
								<span class="glyphicon glyphicon-user"></span> Profilim
							</a>
						</li>
						
						<li> 
								<a href="logout.php">
									<i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış
								</a>
						</li>
					
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- pages div -->
	<div id="pages" class="container-fluid">


	<!-- user page -->
		<div id="duyurular_page">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3>Duyurular Sayfası!!!!</h3>
				</div>
			</div>
		</div>
		<!-- user page end -->


		<!-- user page -->
		<div id="users_page" style="display: none;">
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
                <input class="btn btn-md btn-success" type="" value="Kullanıcı Ekle">
					<?php
   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.

					if($con === false){
    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
}

#Sorgu yapılıyor..
$sql = "SELECT * FROM users ORDER BY ID";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
       
        echo "<div> <br>";
        echo "<table class='table table-bordered  table-inverse'>";
            echo "<thead><tr  class='bg-success' >";
                echo "<th>ID</th>";
                echo "<th>AD SOYAD</th>";
                echo "<th>E-MAIL</th>";
                echo "<th>ROL</th>";
            echo "</tr></thead><tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['NAME'] . "</td>";
                echo "<td>" . $row['EMAIL'] . "</td>";
                echo "<td>" . $row['ROLE'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
        echo "</div></body></html>";

        mysqli_free_result($result);
    } else{
        echo "Aranan kayıtlar bulunamadı :( .";
    }
} else{
    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
}

mysqli_close($con);
?>
           
		</div>
		<!-- user page end -->


		<!-- my profile page -->
		<div id="profile_page" class="row" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo $login_session_name?></h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3 col-lg-3" align="center">
										<img alt="User Pic" src="https://taqyem.com/assets/rtl/projeler-front-end/images/icons/default_avatar.png" class="img-circle img-responsive">
									</div>
									<div class=" col-md-9 col-lg-9">
										<table class="table table-user-information">
											<tbody>
												<tr>
													<td>E-mail:</td>
													<td><b><?php echo $login_session_email?></b></td>
												</tr>
												<tr>
													<td>Yeni Şifreniz:</td>
													<td>
														<input maxlength="45" id="user_new_pass" type="password">
													</td>
												</tr>
												<tr>
													<td>Yeni Şifre Onayı:</td>
													<td>
														<input maxlength="45" id="user_new_pass_c" type="password">
													</td>
												</tr>
											</tbody>
										</table>
	   								</div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="pull-right">
										<button id="user_update_btn" class="btn btn-success" onclick="updateProfile()" disabled>
											<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> </span> Kaydet
										</button>
									</div>
								</div>
								<div class="alert alert-info" role="alert">
									<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
									<span class="sr-only">Bilgi:</span>Eğer diğer bilgileri değiştirmek istiyorsanız sistem yöneticisine başvurunuz.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Profile div -->

	</div>
	<!-- main page container-->

	<!-- JAVASCRIPT SOURCES -->
	<script type="text/javascript" src="./vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="./js/basic.js"></script>

   </body>
   
</html>


<?php
   if ($login_session_role == "user") {
	?>
		<style type="text/css">#users_page{display:none}</style>
		<script type="text/javascript">kullaniciDivGizle();</script> 
		<?php	
	}else{
		?>
		<script type="text/javascript"> 
				    console.log( "admin giris yaptı pnp!  Kullanıcılar Sekmesi açık!!!!!" );
		</script>
		<?php
	}
?>