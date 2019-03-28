<?php
  include("conexao.php");

  if (isset($_POST['ok'])) {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    $vencimento = $_POST['vencimento'];
    $preco = $_POST['preco'];

    $query = "INSERT INTO produtos(nome,quantidade,tipo,vencimento,preco) VALUES($nome,$quantidade,$tipo,$vencimento,$preco)";

    $stmt = $conn->prepare($query);
    $stmt->execute();
  }
 ?>
