<header>
      
	<nav>
		<img src=""/> 
		<h1 class="tata"><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></img>DevPets</h1>
		<div class="text-end">
            <!-- linknar com a pagina de perfil -->
            <a href="perfil.php"> <button type="button" class="ademiro">Voltar</button></a>        </div>
  </div>
	</nav>
	
</header>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animal(1).css">
    <title>Cadastro de Animal</title>
</head>
<body>
    
    <!--
        action arquivo para qual sera enviado os dados do form
    -->
    
    <?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    //unset destruir a variável
    unset($_SESSION['msg']);
    
    
}
?>
<div class="tudo2">
<div class="pet">
    <h1 class="servis">Cadastro do Animal</h1>
    <form method="POST" action="processa_animal.php">
        <label>Nome do Animal:</label><br>
        <input type="text" class="infos" name="nome_animal" placeholder="Digite o nome... "required><br><br>
        <label>CPF:</label><br>
        <input type="cpf"  class="infos"name="cpf" placeholder="Digite o seu CPF..."required>
        <br><br>
        <label>Animal:</label><br>
        <input type="text" class="infos" name="animal" placeholder="Digite o animal..."required><br>
        <ul class="anim">
            <div class="opicio">
                <li class="dog">Cachorro</li>
                <li class="cat">Gato</li>
                <li class="bird">Pásaro</li>
                <li class="croc">Crocodilo</li>
                <li class="ham">Hamster</li>
        </ul>
        <br>
        <label>Sexo:</label><br>
        <input type="text" class="infos" name="sexo" placeholder="Informe o sexo... "required><br>
        <ul>
            <div class="sexo">
                <li class="fem">F para "Feminino"</li>
                <li class="mas">M para "Masculino"</li>
            </div>
        </ul>
        <br>
    <input type="submit" class="ademiro" value="Cadastrar">
    </form>
</div>
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
   
</footer>
</body>
</html>
