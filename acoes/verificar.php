<?php
include '../ligacoes/conexao.php';
include '../ligacoes/DaoAdmin.php';
session_start();
?>

<?php

if(isset($_POST['email']) && isset($_POST['senha'])){
		if($_SESSION['email'] == " " && $_POST['email'] == ""){
			$_SESSION['email'] = " ";
		}else{
			$_SESSION['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
			$_SESSION['senha'] = md5(md5($_POST['senha']));
		}
		
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$admin = new Admin();
		$admin->setNomeAdmin($email);
		$admin->setSenha($senha);

		$conexaoDB = new Conexao();
		$S = $conexaoDB->conecta();

		$verifica = $admin->Verificar($S, $admin->getNomeAdmin(), $admin->getSenha());
	
}else{
	
}


?>