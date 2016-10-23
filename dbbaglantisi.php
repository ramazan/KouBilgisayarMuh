<?php

//Database bağlantı bilgileri..
$con = mysqli_connect("sql7.freemysqlhosting.net", "sql7141099", "SbIhUpDVHn", "sql7141099") 
	or die("Error " . sqli_error($con));

$con->set_charset("utf8");

#printf("geçerli karakter seti: %s\n", $con->character_set_name());
?>
