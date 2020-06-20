<?php
class Conexao{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $dbname = "login";

	public function conecta(){
		$conexao = mysqli_connect($this->servidor,$this->usuario,$this->senha, $this->dbname) or die ("Não foi possível conectar ao Banco de Dados");

		return $conexao;
	}
}
?>