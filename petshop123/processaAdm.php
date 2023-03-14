<?php
session_start();

//Include serve para incluir uma conexão e Once para
//ser incluide somente uma vez

include_once("conexao.php");

$CNPJ = $_POST['cnpj'];
$senha = $_POST['senha'];
$botton = $_POST['botao'];

$admSelecionado = "SELECT * from  adm Where  CNPJ = '$CNPJ' AND senha = '$senha' ";

if (isset($botton)){
    $verificar = mysqli_query($conn, $admSelecionado);
  
    if(mysqli_num_rows($verificar) == 1){
    $_SESSION['msg'] = "<p> Usuário encontrado SUCESSO!!!</p>";
    header("Location:adm.php");
  
    }else{
      $_SESSION['msg']="<p style ='justify-content:center; align-items:center; display: flex; font-size: 20px'> O usuário não foi encontrado. POR FAVOR VERIFIQUE SE SEUS DADOS ESTÃO CORRETOS !!!</p>";
      header("Location:loginAdm.php");
  }
}

?>
