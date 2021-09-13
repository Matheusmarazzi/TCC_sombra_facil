<?php
$user = "root";
$pass = "usbw";
$bd = "sombra_facil";

$server = "localhost";

$con = new mysqli($server,$user,$pass,$bd);
if(!$con){
	echo "problema de conexao com o bd";
}

?>