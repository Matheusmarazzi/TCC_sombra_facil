<?php
header("Access-Control-Allow-Origin: *");
include('conexao.php');

if($_POST){
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$rg = $_POST['rg'];

	//validação dos dados

	$sql = 'INSERT INTO tb_usuario VALUES (';
	$sql .= 'null,';
	$sql .= '"'.$nome.'",';
	$sql .= '"'.$login.'",';
	$sql .= '"'.$senha.'",';
	$sql .= '"'.$rg.'",';
	$sql .= '"'.$telefone.'"';
	$sql .= ')';

	$res = $con->query($sql);
	if($res){
		echo "Usuario adicionado!";
	}else{
		echo "Erro ao adicionar Usuario!";
	}
}
?>