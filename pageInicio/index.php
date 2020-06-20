<?php
session_start();
protect();
function protect(){
	if($_SESSION['email'] == " "){
		header("Location: http://localhost/AreaLogin/");
	}else{
		
	}
		/*if(!isset($_SESSION['email']))
			header("Location: http://localhost/site/Administrador/");

		if(isset($_SESSION['email'])){
			session_start();
		}*/
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tela andministrador</title>
</head>
<body>
<!-- Produtos -->

<form method="POST" action="../acoes/sair.php">
<input type="submit" name="" value="Sair">	
</form>

<!-- Cursos -->
</body>
</html>