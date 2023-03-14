<?php 
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE usuario SET nome='$nome', senha='$senha' WHERE cpf='$cpf'";
$resultado_usuarios = mysqli_query($conn, $result_usuario);
// $row_usuario = mysqli_fetch_assoc($resultado_usuarios);


if(mysqli_affected_rows($conn)> 0){
    $_SESSION['msg'] = "<p> Usuario editado com sucesso</p>";
    header("Location: adm.php");
}else{
    $_SESSION['msg'] = "<p> Usuario não foi editado com sucesso</p>";
    header("Location: adm.php");
}




?>