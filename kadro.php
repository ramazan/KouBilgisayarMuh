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
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="assets/font-awesome/css/font-awesome.min.css"
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
<link href="css/index.css" rel="stylesheet">
<link href="css/dummy.css" rel="stylesheet">
<link rel="stylesheet" href="css/profil_ayrinti.css" type="text/css">

</head>

<body id="page-top" class="index" style="background:#f8f8f8;">

	<?php include_once "navbar.php" ?>

    <span class="header_shadow" style="top:74px"></span>
	
<div class="wrapper">
      <!-- Categories Homepage Section Start -->
      <section id="categories-homepage">
        <div class="container" style="margin-top:150px; ">
          <div class="row">
            <div class="col-md-12">
              <h2 class="section-title" style="text-align:center">Bölüm Personelimiz</h2>
			  </br></br></br>
            </div>          
            <?php
				include_once './dbbaglantisi.php';  
                $sql = "SELECT * FROM users WHERE ROLE ='user';";

                if($result = mysqli_query($con, $sql)){
                    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
                        while($row = mysqli_fetch_array($result)){
                    
              echo  "<div class='col-md-3 col-sm-6 col-xs-12'>
              <div class='category-box border-1 wow fadeInUpQuick animated' data-wow-delay='0.3s' style='visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;'>
                <div class='icon'><a href='".$row['RESIM_LINK']."'><img width='120' height='120' style='border-radius:50%' 
                 src='".$row['RESIM_LINK']."'></a>
                </div>";                        

                echo " <div class='category-header'>  
                  <a href='".$row['WEBSITE']."'><h4>".$row['NAME']."</h4></a>
                </div>";


                echo "<div class='category-content'>
                  <ul>
                    <li>
                      <a href='mailto:".$row['EMAIL']."' style='color:#333'>E-posta :</a>
                      <span class='category-counter'>".$row['EMAIL']."</span>
                    </li>
                    <li>
                      <a style='color:#333'>Oda No :</a>
                      <span class='category-counter'>".$row['ODA_NO']."</span>
                    </li>
                    <li>
                      <a style='color:#333'>Telefon :</a>
                      <span class='category-counter'>".$row['TELEFON']."</span>
                    </li>
                    <li>
                      <a style='color:#333' >Ana Bilim Dalı :</a>
                      <span class='category-counter'>".$row['ANA_BILIM_DALI']."</span>
                    </li>
                    <li>";

                    echo " <a style='color:#333'>Araştırma Alanları :</a>
                      <span class='category-counter'>".$row['ARASTIRMA_ALAN']."</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>";
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
        </div>
      </section>	
	
	<script src="assets/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php include_once "footer.php" ?>


</body>

</html>
