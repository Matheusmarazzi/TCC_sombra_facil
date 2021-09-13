<?php
header("Access-Control-Allow-Origin: *");
include('conexao.php');

if($_POST){
	$lat = $_POST['lat'];
	$long = $_POST['long'];

	//validação dos dados

	$sql = 'INSERT INTO localizacao VALUES (';
	$sql .= 'null,';
	$sql .= '"'.$lat.'",';
	$sql .= '"'.$long.'"';
	$sql .= ')';

	$res = $con->query($sql);
	if($res){
		echo "Local adicionado!";
	}else{
		echo "Erro ao adicionar local!";
	}
}
?>