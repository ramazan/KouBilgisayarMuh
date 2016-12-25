<?php

//Database bağlantı bilgileri..
$con = mysqli_connect("217.116.192.20", "ramazan", "11111", "kou_ceng") 
	or die("Error " . sqli_error($con));

$con->set_charset("utf8");

#printf("geçerli karakter seti: %s\n", $con->character_set_name());
?>
