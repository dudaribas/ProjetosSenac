<?php
session_start();
//ob_start(); - armazena meus dados em cache

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "petshop";

//criando a conexão com o banco de dados.

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$cpf_veri = $_POST['usuario'];
$_SESSION ['usuario'] = $cpf_veri;
$senha_veri = $_POST['senha'];

$consulta = mysqli_query($conn, "SELECT cpf, senha FROM usuario WHERE cpf='$cpf_veri' AND senha = '$senha_veri'");
$consulta2 = mysqli_fetch_array($consulta);


$query = "SELECT telefone FROM usuario WHERE cpf ='$cpf_veri' "; 
$result_query = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array( $result_query )) 
{ 
    echo $row['telefone'] . "<br>"; 
}


if (isset($consulta2['cpf']) && isset($consulta2['senha'])){
    echo "Login válido";
    echo '<div class="alert alert-sucess"><button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Logado com sucesso!</strong> Você será redirecionado para o seu perfil ;) </div>';
    header("Refresh: 1, ./perfil.php");

}else{
    echo"Login inválido";
}

/*else{
    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Erro!</strong> loginou senha incorretos </div>';
    }
}catch(PDOException $e){
    echo "ERRO DE LOGIN : .$e->getMessage();
}
*/

?>