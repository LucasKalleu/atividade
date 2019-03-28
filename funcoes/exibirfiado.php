<?php
	require_once'conexao.php';
	class exibirFiado{
		function soma(){
              $obj = new Banco();
              $sql = "SELECT SUM(divida) FROM fiado;";
              $result = $obj->exeQuery($sql);
              print_r($result);
              }
    
    function exibir(){
  			      $obj = new Banco();
              $sql = "SELECT * FROM fiado";
              $result = $obj->exeQuery($sql);
              foreach ($result as $value) {
              $id = $value['idfiado'];
              $nome = $value['nome'];
              $endereco = $value['endereco'];
              $contato = $value['contato'];
              $cadastro = $value['cadastro'];
              $divida = $value['divida']; 
            echo " 
            <tr>
              <td>$nome</td>
              <td>$endereco</td>
              <td>$contato</td>
              <td>".date('d/m/Y', strtotime($cadastro));"</td>";
              echo"
              <td>R$ ".@$divida = number_format(@$divida, 2, ',', '.');"</td>";
              echo "
              <td><a class='btn-floating btn-medium waves-effect waves-light red modal-trigger' href='#mod'><i class='material-icons'>mode_edit</i></a></td>
              <td><a class='btn-floating btn-medium waves-effect waves-light red'><i class='material-icons'>close</i></a></td>
                ";
            }

		}

	}

	$obj = new exibirFiado();
