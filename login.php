<?php
header("Access-Control-Allow-Origin: *");
include('conexao.php');

$senha = $_POST['senha'];
$login = $_POST['login'];

function login($login,$senha){
    $sql = 'SELECT * FROM tb_usuario WHERE login = "'.$login.'" AND senha="'.$senha.'"';
    $res = $GLOBALS['con']->query($sql);
    if($res->num_rows == 1){
    echo "<script>
    window.location.href = 'pagina.html';


    </script>";
    
        
    }else{
        echo "Usuario ou senha inválido";
    }
    
    
}
login($login,$senha);



	//$res = $con->query($sql);
	//if($res){
	//	echo "Usuario adicionado!";
	//}else{
	//	echo "Erro ao adicionar Usuario!";
	//}
//}
?>