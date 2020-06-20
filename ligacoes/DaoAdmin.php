<?php
class Admin{
	private $NomeAdmin;
	private $Senha;

	public function setNomeAdmin($NomeAdmin){
		$this->NomeAdmin = $NomeAdmin;
	}
	public function getNomeAdmin(){
		return $this->NomeAdmin;
	}
	public function setSenha($Senha){
		$this->Senha = $Senha;
	}
	public function getSenha(){
		return $this->Senha;
	}

	public function Verificar($conexao, $NomeAdmin, $Senha){


		$verifica = "SELECT * FROM admin WHERE Email = '$NomeAdmin' AND Senha = '$Senha' LIMIT 1";

		$resultado = mysqli_query($conexao,$verifica);

		
		while($li = mysqli_fetch_array($resultado)){
			if($li['Email'] != 0 ){

			}else{
				header('Location: http://localhost/AreaLogin/pageInicio');
				return 1;
			}

		}$_SESSION['email'] = " ";
		header('Location: http://localhost/AreaLogin/');
		
		

		

		}
	


}
?>