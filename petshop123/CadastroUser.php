<?php

session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="animal(1).css">

</head>
<body>


  <!-- 
    Action: Arquivo para o qual será enviado os dados do form
   -->
<?php
   if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
//unset = destruir o conteúdo da variável
    unset($_SESSION['msg']);
   }
?>

<header>
      
	<nav>
		<img src=""/> 
		<h1 class="tata"><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></img>DevPets</h1>
		<div class="text-end">
            <!-- linknar com a pagina de perfil -->
            <a href="index.php"><button type="button" class="ademiro">Voltar</button></a>
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

<main>
   <div class="tudo3">
<div class = "caixaForm">
  <div id ="titulo">
    <h1 class="servis">Cadastrar Usuário</h1><br><br>
  </div>
<form method="POST" action="processaCadastro.php">
 <div class="caixaTexto">
    <label>Nome:</label>
 </div>
 <div class="caixaRes">
    <input type="text" class="infos" name="nome" placeholder="Digite seu nome..." required><br><br>
 </div>
 <div class="caixaTexto">
    <label>CPF</label>
 </div>
 <div class="caixaRes"> 
    <input type="number" class="infos" name="cpf" placeholder="Digite seu CPF..." minLength= 11 maxlength= 11 required  ><br><br> 
 </div>
 <div class="caixaTexto">
    <label>Endereço</label>
 </div>
 <div class="caixaRes">
    <input type="text" class="infos" name="endereco" placeholder="Digite seu endereço..." required ><br><br>
  </div>
 <div class="caixaTexto">
    <label>Telefone</label>
 </div>  
 <div class="caixaRes">
    <input type="text"  class="infos" name="telefone" placeholder="Digite seu telefone..." required><br><br>
  </div>
 <div class="caixaTexto">
    <label>Senha</label>
 </div>
 <div class="caixaRes">
    <input type="password" class="infos" name="senha" placeholder="Digite sua senha..."  minlength= 6 maxlength= 30 required><br><br>
 </div>

 <div class="caixadetexto">
   <input type="submit" class="ademiro" value="Cadastrar">
 </div>
 <a href="login.php" class="linke" target="_blank" rel="noopener noreferrer">Se você já tem login, clique aqui!!</a> 
</form>
   


</div>
</div>
</main>

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