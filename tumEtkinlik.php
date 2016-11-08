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
	
   <?php 
include_once "navbar.php"
?>
    <span class="header_shadow" style="top:74px"></span>
<div class="container-fluid" style="margin-top: 125px">
<li class="list-group-item" style="background-color:#F3FBEE">
			  <div>
    		<h3 style="text-align:center">TÜM ETKİNLİKLER</h3>
    			</div>
			  </li>

    	<div class="row">
    		<div class="col-md-12">
				  <ul class="list-group">
			           <?php


						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Etkinlik' ORDER BY ID DESC ";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										$sayac=1;
								        while($row = mysqli_fetch_array($result)){
								        	if($sayac%2==0){
								        		echo "<li class='list-group-item' style='background: #ebf9e0;'>";
								        	}else{
								        		echo "<li class='list-group-item'>";
								        	}
								        	$sayac++;
								      echo "<div class='event postcard-left'><div class='event-date'>
								      <span class='event-month' style='color:#6B140E; padding-right:20px;font-size: 1.4em;font-weight: 200; '>".$row['ETKINLIK_AY']."</span></br>
								       <span class='event-day'style='color:#009745;padding-right:20px;font-size: 2.2em;font-weight: 200;'>".$row['ETKINLIK_GUN']."</span></div>";
								    	
							


echo "<div class='event-text'><h3 style='margin: 0 0 5px 0;'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-event' data-ua-label='id'>".$row['TITLE']."</a></h3><p class='timestamp'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."'>".$row['MESSAGE']."</a></p></div></div></li>";



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