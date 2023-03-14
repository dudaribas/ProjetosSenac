<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>CRUD - Listar</title>
</head>
<body>
    
    
  <?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  //receber o numero da pagina
  $paginaAtual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
  $pagina = (!empty($paginaAtual)) ? $paginaAtual : 1;
  
  //Setar a quantidade de itens por paginas
  $qtn_result_pg = 3;

  //Calcular o inicio da Visusalização
  $inicio = ($qtn_result_pg * $pagina) - $qtn_result_pg;
  
  $result_usuarios= "SELECT * FROM animais LIMIT $inicio, $qtn_result_pg";
  $resultado_usuarios = mysqli_query($conn, $result_usuarios);
  while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "NOME: " . $row_usuario['nome_animal'] . "<br>";
    echo "CPF: " . $row_usuario['cpf'] . "<br>";
    echo "TIPO: " . $row_usuario['animal'] . "<br>";
    echo "SEXO: " . $row_usuario['sexo'] . "<br>";
    

    echo "<a href='edit_animal.php?id'" . $row_usuario['id'] . ">EDITAR</a><br><br>";

  }

  //Paginação - somar a quantidade de usuários 

  $resultPg = "SELECT COUNT('id') AS num_result FROM animais";
  $resultadoPg = mysqli_query($conn, $resultPg);
  $rowPg = mysqli_fetch_assoc($resultadoPg);

  $quantidadePg =ceil($rowPg['num_result'] / $qtn_result_pg);

  

  ?> 
  <a href="cadastro_animal.php">Cadastrar</a><br>
    <a href="listar_animal.php">Listar</a>
</body>
</html>