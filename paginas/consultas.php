<?php
  include("../funcoes/conexao.php");

 ?>
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
    <link rel="stylesheet" type="text/css" href="../css/consultas.css">
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
          <li><a href="giftcards.php">Giftcards</a></li>
          <li><a href="fiado.php">Fiado</a></li>
          <li><a href="usuario.php">Usuário</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li id="sideLogo"></li>
          <li><a href="consultas.php">Consultas</a></li>
          <li><a href="historico.php">Histórico</a></li>
          <li><a href="giftcards.php">Giftcards</a></li>
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

      <div class="col s12 m10 l10 offset-l1 offset-m1">
        <table class="striped">
          <thead>
            <tr>
                <th>Nome/Marca</th>
                <th>Tipo</th>
                <th>Quantidade</th>
                <th>Vencimento</th>
                <th>Preço</th>
            </tr>
          </thead>

          <tbody>
              
            
          </tbody>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
        </table>
      </div>
    </main>

    <!-- Parte Inferior do Site -->
    <footer>

      <!-- Modal Trigger -->
      <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large red modal-trigger" href="#modal1"><i class="large material-icons">add</i></a>
      </div>

      <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Inserir Produtos</h4>
          <br><br>
          <div class="row">
            <form method="POST" action="../funcoes/inserindo.php">
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um nome" id="first_name" type="text" class="validate" name="nome">
                  <label for="first_name">Nome/Marca do Produto</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um número" id="first_name" type="number" class="validate" name="quantidade">
                  <label for="first_name">Quantidade</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um tipo" id="first_name" type="text" class="validate" name="tipo">
                  <label for="first_name">Tipo do Produto</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input style="color: #cfd8dc" placeholder="" id="first_name" type="date" name="vencimento">
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um número" id="first_name" type="number" class="validate" name="preco">
                  <label for="first_name">Preço</label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Enviar</a>
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
    // Initialize collapse button
    $(".button-collapse").sideNav();

    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
    </script>
  </body>
</html>
