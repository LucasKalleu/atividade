<?php
	require_once'conexao.php';
	class exibirUsusario{
		function __construct(){
  			$obj = new Banco();
  			$sql = "SELECT * FROM usuario";
   			$result = $obj->exeQuery($sql);
   			foreach ($result as $value) {
   			$nome = $value['nome'];
   			$email = $value['email'];
   			$senha = $value['senha'];
   			$telefone = $value['telefone'];
   			}
		}
	}
	$obj = new exibirUsusario();
