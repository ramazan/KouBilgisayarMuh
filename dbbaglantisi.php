<?php

//Database bağlantı bilgileri..
$con = mysqli_connect("sql8.freemysqlhosting.net", "sql8142119", "9F6iaaTMW9", "sql8142119") 
	or die("Error " . sqli_error($con));

$con->set_charset("utf8");

#printf("geçerli karakter seti: %s\n", $con->character_set_name());
?>
