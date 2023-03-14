<?php 
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuario WHERE cpf = '$cpf'";
$resultado_usuarios = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuarios)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./animal(1).css">
    <title>Editar Usuários ADM</title>
</head>
<body>
    

    <?php 
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <header>
      
        <nav>
            <img src=""/> 
            <h1 class="tata"><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></img>DevPets</h1>
            <div class="text-end">
                <!-- linknar com a pagina de perfil -->
                <a href="adm.php"><button type="button" class="ademiro">Voltar</button></a>
            </div>
      </div>
        </nav>
       
    </header>

<div class="tudo6">
    <h1 class="servis"> Editar Usuario ADM</h1>

    <form method="POST" action="processaEditUsuario.php">
        <input type="hidden" name="cpf" value="<?php echo $row_usuario['cpf']; ?>">

        <label>Nome: </label><br>
            <input type="text" class="infos" name="nome" placeholder="Digite o nome completo : " value="<?php echo $row_usuario['nome']; ?>"> <br><br>

        <label>Senha: </label><br>
            <input type="text" class="infos" name = "senha" placeholder="Digite sua nova senha: " value="<?php echo $row_usuario['senha']; ?>"> <br><br>
            <!-- linkar com a pagina do ADM -->
            <input type="submit" class="ademiro" value="Salvar"> 
            <div class="linq">
            
        </div>
    </form>
</div>
    <footer>
        <div class="tudo">
            <ul class="redes">
                <ul><a href="https://wa.me/5511940028922"><img class="bicha" width="24" height="24" src="./imgs/whatsapp.png"></img></a></ul>
                <ul><a href= "https://facebook.com"><img class="bicha" width="24" height="24" src="./imgs/facebook.png"></img></a></ul>
                <ul><a href="https://instagram.com"><img class="bicha" width="24" height="24" src="./imgs/instagram.png"></img></a></ul>
            </ul>
            <div class="texto">
              <p  class="logo" >DP</p>
             </div> 
             <P class="textinho">&copy; 2022 DevPets, Inc. Todos os direitos reservados.</P>
        </div>
     </footer>
</body>
</html>





