<?php
session_start();
include_once('conexao.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>Adm</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  
  <div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <!-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol> -->
      </nav>
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-12 mb-2">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://observatoriodeourofino.com.br/wordpress/wp-content/uploads/2017/03/17988419.jpg" alt="img" class="img-thumbnail" width="500px" height="100px">
                <div class="mt-3">
                  <?php
                  echo "Administradoras";
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
            </ul>
          </div>
        </div>

        
      </div>
    </div>

    <div class="row gutters-sm">
      <div class="col-sm-4 mb-">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Pessoas Cadastradas</i></h6>
            <?php
              if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }

              //receber o numero da pagina
              $paginaAtual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
              $pagina = (!empty($paginaAtual)) ? $paginaAtual : 1;

              //Setar a quantidade de itens por paginas
              $qtn_result_pg = 3;

              //Calcular o inicio da Visusalização
              $inicio = ($qtn_result_pg * $pagina) - $qtn_result_pg;

              $result_usuarios = "SELECT * FROM usuario LIMIT $inicio, $qtn_result_pg";
              $resultado_usuarios = mysqli_query($conn, $result_usuarios);
              while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {

                echo "NOME: " . $row_usuario['nome'] . "<br>";
                echo "CPF: " . $row_usuario['cpf'] . "<br>";
                echo "SENHA: " . $row_usuario['senha'] . "<br>";
                // echo "EMAIL: " . $row_usuario['email'] . "<br>";

                echo "<a href='editaUsuarios.php?cpf=" . $row_usuario['cpf'] . "'>EDITAR</a><br><hr>";
              }

              //Paginação - somar a quantidade de usuários 

              $resultPg = "SELECT COUNT('id') AS num_result FROM usuario";
              $resultadoPg = mysqli_query($conn, $resultPg);
              $rowPg = mysqli_fetch_assoc($resultadoPg);

              $quantidadePg = ceil($rowPg['num_result'] / $qtn_result_pg);

              //Limitar Links antes, despois

              $maxLinks = 2;
              echo "<a href='listar.php?$pagina=1'>Primeira</a>";

              for ($pagAnt = $pagina - $maxLinks; $pagAnt <= $pagina - 1; $pagAnt++) {
                if ($pagAnt >= 1) {
                  echo "<a href=listar.php?pagina='$pagAnt'>$pagAnt</a>";
                }
              }

              echo "$pagina";

              for ($pagDep = $pagina + 1; $pagDep <= $pagina + $maxLinks; $pagDep++) {
                if ($pagDep <= $quantidadePg) {
                  echo "<a href=listar.php?pagina='$pagDep'>$pagDep</a>";
                }
              }

              echo "<a href='listar.php?pagina='$quantidadePg'>Ultima</a>"

              ?>
              
            
          </div>
        </div>
      </div>


      <div class="col-sm-4 mb-2">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Consultas agendadas</i></h6>
            <?php
              if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }

              //receber o numero da pagina
              $paginaAtual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
              $pagina = (!empty($paginaAtual)) ? $paginaAtual : 1;

              //Setar a quantidade de itens por paginas
              $qtn_result_pg = 3;

              //Calcular o inicio da Visusalização
              $inicio = ($qtn_result_pg * $pagina) - $qtn_result_pg;

              $result_usuarios = "SELECT * FROM agendamento LIMIT $inicio, $qtn_result_pg";
              $resultado_usuarios = mysqli_query($conn, $result_usuarios);
              while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {

                echo "Cpf: " . $row_usuario['cpf'] . "<br>";
                echo "Consulta: " . $row_usuario['tipoconsulta'] . "<br>";
                echo "Data: " . $row_usuario['datas'] . "<br>";
                echo "Horário: " . $row_usuario['horario'] . "<br>";
                // echo "EMAIL: " . $row_usuario['email'] . "<br>";

                echo "<a href='editaUsuarios.php?id'" . $row_usuario['cpf'] . "></a><br><hr>";
              }

              //Paginação - somar a quantidade de usuários 

              $resultPg = "SELECT COUNT('id') AS num_result FROM usuario";
              $resultadoPg = mysqli_query($conn, $resultPg);
              $rowPg = mysqli_fetch_assoc($resultadoPg);

              $quantidadePg = ceil($rowPg['num_result'] / $qtn_result_pg);

              //Limitar Links antes, despois

              $maxLinks = 2;
              echo "<a href='adm.php?$pagina=1'>Primeira</a>";

              for ($pagAnt = $pagina - $maxLinks; $pagAnt <= $pagina - 1; $pagAnt++) {
                if ($pagAnt >= 1) {
                  echo "<a href=adm.php?pagina='$pagAnt'>$pagAnt</a>";
                }
              }

              echo "$pagina";

              for ($pagDep = $pagina + 1; $pagDep <= $pagina + $maxLinks; $pagDep++) {
                if ($pagDep <= $quantidadePg) {
                  echo "<a href=adm.php?pagina='$pagDep'>$pagDep</a>";
                }
              }

              echo "<a href='adm.php?pagina='$quantidadePg'>Ultima</a>"

              ?>


          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-2">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Animais Cadastrados</i></h6>

              <?php
              if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }

              //receber o numero da pagina
              $paginaAtual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
              $pagina = (!empty($paginaAtual)) ? $paginaAtual : 1;

              //Setar a quantidade de itens por paginas
              $qtn_result_pg = 3;

              //Calcular o inicio da Visusalização
              $inicio = ($qtn_result_pg * $pagina) - $qtn_result_pg;

              $result_usuarios = "SELECT * FROM animais LIMIT $inicio, $qtn_result_pg";
              $resultado_usuarios = mysqli_query($conn, $result_usuarios);
              while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {

                echo "NOME: " . $row_usuario['nome_animal'] . "<br>";
                echo "CPF: " . $row_usuario['cpf'] . "<br>";
                echo "Tipo: " . $row_usuario['animal'] . "<br>";

                // echo "EMAIL: " . $row_usuario['email'] . "<br>";
               

                echo "<a href='editaUsuarios.php?id'" . $row_usuario['cpf']. "></a><br> " . "<hr>";
              }
            

              //Paginação - somar a quantidade de usuários 

              $resultPg = "SELECT COUNT('id') AS num_result FROM usuario";
              $resultadoPg = mysqli_query($conn, $resultPg);
              $rowPg = mysqli_fetch_assoc($resultadoPg);

              $quantidadePg = ceil($rowPg['num_result'] / $qtn_result_pg);

              //Limitar Links antes, despois

              $maxLinks = 2;
              echo "<a href='listar_animal.php?$pagina=1'>Primeira</a>";

              for ($pagAnt = $pagina - $maxLinks; $pagAnt <= $pagina - 1; $pagAnt++) {
                if ($pagAnt >= 1) {
                  echo "<a href=listar_animal.php?pagina='$pagAnt'>$pagAnt</a>";
                }
              }

              echo "$pagina";

              for ($pagDep = $pagina + 1; $pagDep <= $pagina + $maxLinks; $pagDep++) {
                if ($pagDep <= $quantidadePg) {
                  echo "<a href=listar_animal.php?pagina='$pagDep'>$pagDep</a>";
                }
              }

              echo "<a href='listar_animal.php?pagina='$quantidadePg'>Ultima</a>"

              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
      
    </div>
   
   

    <style type="text/css">
      body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
      }

      .main-body {
        padding: 15px;
      }

      .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
      }

      .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
      }

      .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
      }

      .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
      }

      .gutters-sm>.col,
      .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
      }

      .mb-3,
      .my-3 {
        margin-bottom: 1rem !important;
      }

      .bg-gray-300 {
        background-color: #e2e8f0;
      }

      .h-100 {
        height: 100% !important;
      }

      .shadow-none {
        box-shadow: none !important;
      }
    </style>

    <script type="text/javascript">

    </script>
</body>

</html>