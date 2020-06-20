<?php
session_start();
if(!function_exists("protect")){
	function protect(){
		if($_SESSION['email']!="" && $_SESSION['senha']!=""){
			
		}else{
			header("Location: http://localhost/AreaLogin/index.php");
		}

		/*if(!isset($_SESSION['email']))
			header("Location: http://localhost/site/Administrador/");

		if(isset($_SESSION['email'])){
			session_start();
		}*/
	}
}
?>