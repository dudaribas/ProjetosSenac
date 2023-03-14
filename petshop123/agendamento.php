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
    <title>Agendamento</title>
</head>
<body>
<header>
      
	<nav>
		<img src=""/> 
		<h1 class="tata"><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></img>DevPets</h1>
		<div class="text-end">
            <!-- linknar com a pagina de inicio -->
            <a href="perfil.php"><button type="button" class="ademiro">Voltar</button></a>
        </div>
  </div>
	</nav>
	
</header>

        <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        //unset destruir a variável
        unset($_SESSION['msg']);
        
        
    }
    ?>
    <div class="fabs">
        <div class="pet">
            <h1 class="servis" >Agendamento</h1>
            <form method="POST" action="processaAgendamento.php">
            <label>CPF:</label><br>
            <input type="text" class="infos" name="cpf" placeholder="Digite o seu CPF..."required><br><br>

            <label>DATA:</label><br>
            <input type="date" class="infos" name="datas" placeholder="Digite a data"required><br><br>
            
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência:</label><br>
            <select class="infos"   id="inlineFormCustomSelect" name="horario">
                <option selected>Definir horário...</option>
                <option value="9:00">9:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
            </select>

            <br><br>
               
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Tratamento:</label><br>
            <select class="infos" id="inlineFormCustomSelect" name="tratamento">
                <option selected>Escolher...</option>
                <option value="Banhos">Banhos</option>
                <option value="Tosas">Tosas</option>
                <option value="Laboratório">Laboratório</option>
                <option value="Tingimento">Tingimento</option>
                <option value="Táxi dog">Táxi dog</option>
                <option value="Hospedagem">Hospedagem</option>
            </select>
            <br><br>
            <label>Nome do Animal:</label><br>
            <input type="text" class="infos" name="animal" placeholder="Informe o nome do seu animal..."required><br><br>
            <input type="submit" name="botao" class="ademiro" value="Agendar">
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
