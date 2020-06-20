<?php
class Cliente{
	private $nomeCliente;
	private $cpfCliente;
	private $telefone;

	public function setNomeCliente($nomeCliente){
		$this->nomeCliente = $nomeCliente;
	} 
	public function getNomeCliente(){
		return $this->nomeCliente;
	}

	public function CadastrarCliente($conexao,$nomeCliente){
		@mysqli_query($conexao,"INSERT INTO cliente(NomeCliente) VALUE('$nomeCliente')") or die ("Erro na inserção de dados do Cliente");
		return 1;
	}
}
?>