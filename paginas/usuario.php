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
      <div class="col s10 orange offset-s1">
        hello
      </div>
    </main>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
    // Initialize collapse button
    $(".button-collapse").sideNav();
    </script>
  </body>
</html>
