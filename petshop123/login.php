<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animal(1).css">
    <title>Login</title>
</head>
<body>
    
<?php
session_start();
if (isset ($_POST[ 'usuario '], $_POST[ 'senha'])){
$_SESSION[ 'usuario '] = $_POST[ 'usuario '] ;
header ('Location: perfil.php ');
}
if (isset ($_GET['erro'])) {
$erro = 'E necessārio logar para acessar o sistema!' ;
}

?>
<header>
      
	<nav>
		<img src=""/> 
		<h1 class="tata"><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></img>DevPets</h1>
		<div class="text-end">
            <!-- linknar com a pagina de inicio -->
        <a href="index.php"> <button type="button" class="ademiro">Voltar</button></a>
        </div>
  </div>
	</nav>
	<div class="menu">
	<ul class="cima">
            <li>
              <a href="index.php" class="home" width="24" height="24">
                Home
              </a>
            </li>
        </ul>
    </div>
</header>


<div class="tudo4">
<h2 class="servis2">Login</h2>
<form method="POST" action="processalogin.php">
    <label class="usuario">Usuario: </label><br>
    <input type="text" class="infos" name = "usuario" placeholder="Digite seu CPF..." ><br>

    <label class="usuario" >Senha:</label><br>
    <input type="password" class="infos" name = "senha" placeholder="Digite a sua senha..." ><br>

    <input type="submit" class="ademiro" value="Acessar" >
</form>
</div></div>
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
<?php
include_once('./conexao.php')
?>
</html>