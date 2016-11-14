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
<link href="css/index.css" rel="stylesheet">
<link href="css/dummy.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>
</head>

<body id="page-top" class="index" style="background:#f8f8f8;">

	<?php include_once "navbar.php" ?>
    <span class="header_shadow" style="top:74px"></span>
    
    <div class="container-fluid" style="margin-top: 100px" >
    	<div class="row" >
    		<div class="col-md-8"  >

    				<div id="myCarousel" class="carousel slide"  data-ride="carousel" style="border: 3px solid #d9d4c6;" >
				  <div class="carousel-inner"  role="listbox" style="border: 1px solid #fff; background-color:#d9d4c6">
				   
				    
<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Slider' AND  STATUS='1' ;";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										
										 $sayac=0;
								        while($row = mysqli_fetch_array($result)){
								        	if($sayac==0){
								        	echo "<div class='item active' style='height:310px; background-color:#d9d4c6'>";
								        	$sayac=1;
								        	}else{
								       			echo "<div class='item' style='height:310px; background-color:#d9d4c6'>";

								        	}

								        	echo "<img src=".$row['RESIM_LINK']." width='1100' height='400' alt=''>";
								        	echo "<div class='carousel-caption'>";
								        	echo " <h3 style='font-size: 20px'>".$row['TITLE']."</h3>";
								        	echo "<p>".$row['MESSAGE']."</p> </div></div>";
			
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

					  <!-- Controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Önceki</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Sonraki</span>
					  </a>
					</div>
					

								<br/>
					    		<div class="row" >
			
    	   

                
    		<div class="col-sm-6" style="margin-top: 20px" >
    			<ul class="list-group">
			  <li class="list-group-item">
			  <div >
    			<h4>Genel Duyurular<span class="badge" style="float:right; " ><?php 

	  $ses_sql = mysqli_query($con,"SELECT COUNT(*) as sayi FROM announcements WHERE DUYURU_TURU = 'Genel' AND  STATUS='1';");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    			echo $row['sayi'] ?></span></h4>
    			</div>
			  </li>
			   <li class="list-group-item" >
			  <ul class="timeline">

			
<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT users.NAME,announcements.TITLE,announcements.MESSAGE,announcements.DUYURU_TURU,announcements.DATE , announcements.ID	FROM announcements INNER JOIN users ON users.ID=announcements.USER_ID WHERE DUYURU_TURU='Genel' AND  STATUS='1' ORDER BY ID DESC LIMIT 3;";

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
			  </li>
			  <li class="list-group-item" >
    			<h4><a class="badge" style="float:right;" href="genelDuyuru.php" >Tüm Genel Duyurular</a></h4>
    			<br/>
			  </li>

  </ul>
    		</div>
    		<div class="col-sm-6" style="margin-top:20px" >
    			<ul class="list-group">
			  <li class="list-group-item" >
			  <div >
    			<h4>Bölüm Duyuruları<span class="badge" style="float:right;" ><?php 

			  $ses_sql = mysqli_query($con,"SELECT COUNT(*) as sayi FROM announcements WHERE DUYURU_TURU = 'Bolum' AND  STATUS='1';");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    			echo $row['sayi'] ?></span></h4>
    			</div>
			  </li>
			   <li class="list-group-item" >
			  <ul class="timeline">

			<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT users.NAME,announcements.TITLE,announcements.MESSAGE,announcements.DUYURU_TURU,announcements.DATE , announcements.ID	FROM announcements INNER JOIN users ON users.ID=announcements.USER_ID WHERE DUYURU_TURU='Bolum' AND  STATUS='1' ORDER BY ID DESC LIMIT 3 ;";

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
                    

                    	if(strstr($row['MESSAGE'],"Ek : ")) $row['MESSAGE'] ='Ektedir.';

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
		<br>
		<br>	
			  </li>
			  <li class="list-group-item" >
    			<h4><a class="badge" style="float:right;" href="bolumDuyuru.php">Tüm Bölüm Duyuruları</a></h4>
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
    			<h4>Etkinlikler <span class="badge" style="float:right;" ><?php 

	$ses_sql = mysqli_query($con,"SELECT COUNT(*) as sayi FROM announcements WHERE DUYURU_TURU = 'Etkinlik' AND  STATUS='1';");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    			echo $row['sayi'] ?></span></h4>
    			</div>
			  </li>
			           <?php


						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Etkinlik' AND  STATUS='1' ORDER BY ID DESC LIMIT 4;";

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
								      <span class='event-month'>".$row['ETKINLIK_AY']."</span>
								       <span class='event-day'>".$row['ETKINLIK_GUN']."</span></div>";
								    	
							


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
			  

			  <li class="list-group-item" >
    			<h4><a class="badge" style="float:right;" href="tumEtkinlik.php">Tüm Etkinlikler</a></h4>
    			<br/>
			  </li>
			</ul>
			 
  </div>
      			    			<div class="col-md-4" >
    					    				 <ul class="list-group">
			  <li class="list-group-item" >
			  <div >
    			<h4>İş-Staj İlanları<span class="badge" style="float:right;" ><?php 

			  $ses_sql = mysqli_query($con,"SELECT COUNT(*) as sayi FROM announcements WHERE DUYURU_TURU = 'is-staj' AND  STATUS='1';");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    			echo $row['sayi'] ?></span></h4>
    			</div>
			  </li>
					<?php

						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='is-staj' AND  STATUS='1' ORDER BY ID DESC LIMIT 3";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										$sayac=1;
								        while($row = mysqli_fetch_array($result)){
								        	

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



								        	if($sayac%2==0){
								       	echo "<li class='list-group-item' style='background: #ebf9e0;'><div class='team-member'>";

								        	}else
								        	{

											echo "<li class='list-group-item'><div class='team-member'>";
								        	}
								$sayac++;
									

  						  if(strlen($row['MESSAGE']) >= 30){

							$row['MESSAGE']=mb_substr($row['MESSAGE'], 0,90,'utf-8');
							$row['MESSAGE'] = $row['MESSAGE'] . "...";

						}

								echo "<h3 style='margin: 0 0 5px 0;'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-event' data-ua-label='id'>".$row['TITLE']." </a></h3>";
									echo "<p class='text-muted'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."'>".$row['MESSAGE']."</a></p>";

							  
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
    			<h4><a class="badge" style="float:right;" href="tumStaj.php" >Tüm İlanlar</a></h4>
    			<br/>
			  </li>
	</ul>

    			</div>


    		</div>


    	</div>
		<div class="a">
    	<div class="container-fluid"  style="background-clip: content-box; background-color: #fff">
    		<div class="row" >
    			 <div class="col-sm-12" style="    background-clip: content-box; background-color: #fff; " >

                <h4  style="border-bottom: 1px solid #d5d0c0;color:#820000;margin-left: 12px;margin-right:10px;font-size: 20px">Haberler<span class="badge" style="float:right;margin-right:10px "><?php 

		$ses_sql = mysqli_query($con,"SELECT COUNT(*) as sayi FROM announcements WHERE DUYURU_TURU = 'Haber' AND  STATUS='1';");
			   
			   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    			echo $row['sayi'] ?><br/></span></h3>
                <br/>
            </div>
            <div class="col-sm-12" style="    background-clip: content-box; background-color: #fff">

<?php


						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Haber' AND  STATUS='1' ORDER BY ID DESC   LIMIT 3;";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										$sayac=1;
								        while($row = mysqli_fetch_array($result)){
								        	
								    

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

							$row['MESSAGE']=mb_substr($row['MESSAGE'], 0,110,'utf-8');
							$row['MESSAGE'] = $row['MESSAGE'] . "...";

						}
                          	echo "  <div class='col-sm-3 news-item'> <div class='news-img'><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-news'><img src='".$row['RESIM_LINK']."' 
								      		class='img-responsive'/></a></div>";


						      		echo " <div class='news-text'><h3><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-news'>".$row['TITLE']."</a></h3>";
						      		echo " <p><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' class='su-link' data-ua-action='hp-news'>".$row['MESSAGE']."</a></p></div></div>";
			
								        }


								        mysqli_free_result($result);
								    } else{
								        echo "Aranan kayıtlar bulunamadı :( .";
								    }
								} else{
								    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
								}						
			
	?>
<div class="col-sm-3" id="more-news">
            <h4 style="color: #5cb85c">Daha Fazla Haber</h4>
            <ul>
             <?php


						if($con === false){
					    die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
						}

								 	#Sorgu yapılıyor..
							$sql = "SELECT * FROM announcements WHERE DUYURU_TURU='Haber' AND  STATUS='1' ORDER BY ID ASC LIMIT 3;";

								if($result = mysqli_query($con, $sql)){
								    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										$sayac=1;
								        while($row = mysqli_fetch_array($result)){
								      
echo "<li><a href='#' data-toggle='modal' data-target='#duyuru".$row['ID']."' style='font-size: 14px; font-weight: 700;' class='su-link'  data-ua-action='hp-news'>".$row['TITLE']."</a></li>";
			

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
            <p class="more-link"><a href="tumHaber.php" ><i class="fa fa-chevron-circle-right"></i> <span>Tümü</span></a></p>
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

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<?php 

include_once "footer.php"

?>
	
</body>

</html>





<?php

date_default_timezone_set("Europe/Istanbul");
if($con === false){
              die("HATA: Veritabanı bağlantısı kurulamadı. " . mysqli_connect_error());
            }

                  #Sorgu yapılıyor..
              $sql = "SELECT ID,YAYIN_SURESI FROM announcements WHERE STATUS='1';";

                if($result = mysqli_query($con, $sql)){
                    if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
                    
                        while($row = mysqli_fetch_array($result)){

			

                           $dateBugun = new DateTime();
 
                            $DuyuruTarihi =  $dateBugun->format('Y-m-d');
                         
                             if($DuyuruTarihi == $row['YAYIN_SURESI']){
                                mysqli_query($con,"UPDATE announcements SET STATUS='0' WHERE ID = '".$row['ID']."';");
                             }

                        }

                        mysqli_free_result($result);
                    } else{
                        echo "Aranan kayıtlar bulunamadı :( .";
                    }
                } else{
                    echo "Hata: SQL'e giderken ayağım takıldı.. $sql. " . mysqli_error($con);
                }   
  ?>