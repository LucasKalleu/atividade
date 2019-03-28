<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!-- Configuração Geral -->
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <!-- Configuração da Página -->
    <link rel="stylesheet" type="text/css" href="../css/.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Página Inicial - Consultas</title>
  </head>

  <body>
    <!-- Menu Lateral -->
    <nav>
      <div class="nav-wrapper blue-grey">
        <a href="#!" class="brand-logo"> <img id="logo" src="../img/logo.png" alt=""> </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="consultas.php">Consultas</a></li>
          <li><a href="historico.php">Histórico</a></li>
          <li><a href="fornecedores.php">Fornecedores</a></li>
          <li><a href="fiado.php">Fiado</a></li>
          <li><a href="usuario.php">Usuário</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li id="sideLogo"></li>
          <li><a href="consultas.php">Consultas</a></li>
          <li><a href="historico.php">Histórico</a></li>
          <li><a href="fornecedores.php">Fornecedores</a></li>
          <li><a href="fiado.php">Fiado</a></li>
          <li><a href="usuario.php">Usuário</a></li>
        </ul>
      </div>
    </nav>

    <!-- Conteúdo -->

    <main class="row">

      <nav class="col s12 m10 l10 offset-l1 offset-m1 blue-grey lighten-3">
        <div class="nav-wrapper">
          <form>
            <div class="input-field" style="padding: 7px">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
      <!--Botão para exibir estrutura de adicionar produto-->
      <button type="button" name="button" class="col s12 m10 l10 offset-l1 offset-m1 btn"><i class="material-icons left">add</i>Adicionar Produto<i class="material-icons right">add</i></button>

      <!--Estrutura para adicionar produto linkado ao usuário do fiado-->
      <div class="row">
        <div class="col s12 m10 l10 offset-l1 offset-m1">
          <div class="card-panel teal">
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12 m6 l6">
                    <input placeholder="Insira um nome" id="first_name" type="text" class="validate">
                    <label for="first_name">Nome</label>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <input placeholder="Insira o endereço" id="first_name" type="text" class="validate">
                    <label for="first_name">Endereço</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m6 l6">
                    <input placeholder="Insira um número" id="first_name" type="text" class="validate">
                    <label for="first_name">Celular</label>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <input style="color: #cfd8dc" placeholder="" id="first_name" type="date">
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <!-- Modal Adicionar Produtos/Fiado -->
                    <a class="btn waves-effect waves-light modal-trigger" type="button" name="action" href="#modal1">Adicionar Produto
                      <i class="material-icons right">add</i>
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Estrutura Adiconar Produtos/Fiado -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <nav class="col s12 m10 l10 offset-l1 offset-m1 blue-grey lighten-3">
            <div class="nav-wrapper">
              <form>
                <div class="input-field" style="padding: 7px">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </nav>

          <!-- BOTA PRA EXIBIR A LISTA DE PRODUTOS AQUI -->
          <!-- Como vai funcionar ?! Basicamente, a pessoa vai usar a barra de pesquisa pra encontrar o produto,
          utilizar a checkbox pra marcar o produto que ela quer e assim adicionar na lista da pessoa do fiado. No final, basta
          apertar no botão adicionar que vai pra tabela da pessoa do fiado. -->
          <!-- TEM QUE USAR O PHP PRA DAR 'ECHO' NESSA ESTRUTURA QUE VAI EXIBIR OS PRODUTOS -->
          <ul class="collection with-header col s12">
            <form action="">
              <ul class="collection">
                <!-- echo nessas TAG's <li> para poder ficar ordenado -->
                <li class="collection-item">
                  <div>Alvin
                    <p class="secondary-content">
                      <input type="checkbox" id="filled-in-box" class="filled-in" checked="checked">
                      <label for="filled-in-box"></label>
                    </p>
                  </div>
                </li>
              </ul>
            </form>

          </ul>

        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
      </div>

      <div class="col s12 m10 l10 offset-l1 offset-m1">
        <table class="responsive-table">
          <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Contato</th>
                <th>Inicio da Conta</th>
                <th>Devendo</th>
                <th>Modificar</th>
                <th>Excluir</th>
            </tr>
          </thead>
          <?php include_once '../funcoes/exibirfiado.php';
            $obj->exibir();
            ?>
          <tbody>
            </tr>
                     </tbody>
          <tfoot>
            <tr>
              <td colspan="5">Total em dinheiro: R$<?php $obj->soma();?></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </main>

    <!-- Parte Inferior do Site -->
    <footer>

      <!-- Modal Structure -->
      <div id="mod" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Modificar Dados do Cliente</h4>
          <br><br>
          <div class="row">
            <form>
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um nome" id="first_name" type="text" class="validate">
                  <label for="first_name">Nome</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira o endereço" id="first_name" type="text" class="validate">
                  <label for="first_name">Endereço</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um número" id="first_name" type="text" class="validate">
                  <label for="first_name">Celular</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input style="color: #cfd8dc" placeholder="" id="first_name" type="date">
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira a quantia" id="first_name" type="number" class="validate">
                  <label for="first_name">Dinheiro</label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceitar</a>
        </div>
      </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
    // Initialize collapse button
    $(".button-collapse").sideNav();

    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.mod').modal();
    });

    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
    </script>
  </body>
</html>
