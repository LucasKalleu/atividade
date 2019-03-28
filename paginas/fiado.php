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

      <!-- Modal Trigger -->
      <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large red modal-trigger" href="#modal1"><i class="large material-icons">add</i></a>
      </div>

      <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Dados do Cliente</h4>
          <br><br>
          <div class="row">
            <form action="../funcoes/inserindo.php" method="post">
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um nome" name="nome" id="first_name" type="text" class="validate" required>
                  <label for="first_name">Nome</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira o endereço" id="first_name" name="endereco" type="text" class="validate" required>
                  <label for="first_name">Endereço</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira um número" name="contato" id="first_name" type="text" class="validate" required>
                  <label for="first_name">Celular</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input style="color: #cfd8dc" placeholder="" name="cadastro" id="first_name" type="date" required value="<?php echo date('Y-m-d'); ?>">
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Insira a quantia" id="first_name" name="divida" type="number" class="validate" required>
                  <label for="first_name">Dinheiro</label>
                </div>
              </div>
          </div>
        </div>
       <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
          <input class="waves-green btn-flat " type="submit" name="verificar" value="Cadastrar">
        </div>
      </div>
    </footer>
  </form>
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

    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.mod').modal();
    });
    </script>
  </body>
</html>
