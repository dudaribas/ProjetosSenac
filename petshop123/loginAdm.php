<?php

session_start();

include_once('conexao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de ADM</title>
    <link rel="stylesheet" href="loginAdm.css">
</head>
<body>
    <header>

        <nav>
            <h1 class="tata" l><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></ul></img>DevPets</h1>
            <div class="text-end">
            <!-- linknar com a pagina de inicio -->
        <a href="index.php"> <button type="button" class="ademiro">Voltar</button></a>
        </div>
        </nav>


    </header>
    <div class="aaa">
<div class="glass">
    <div id="titulo"><h1>Acesso Administrativo</h1></div>
     <form method="POST" action="processaAdm.php">
        <div class="caixaTexto">
         <label>CNPJ:</label><br>
        </div>
    <div class="caixaResp">
         <input .infos{
  border: none;
  border-bottom: #000 double;
  border-left: #000 double;
  width: 200px;
  font-size: 15px;
} type="text" class="infos" name="cnpj" placeholder="Digite o CNPJ da empresa:" required><br><br>
    </div>
    <div class="caixaTexto">
         <label>Senha:</label><br>
    </div>
    <div class="caixaResp">
         <input class="infos" type="password" name="senha" placeholder="Informe sua senha de adm: " required><br><br>
    </div>
    <div class="botao">
     <input type="submit" name="botao" value='Entrar' class="ademiro2"></input>
    </div>
    </form>
</div>
</div>
<?php
   if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
//unset = destruir o conteúdo da variável
    unset($_SESSION['msg']);
   }
?>

<footer></footer>

</body>
</html>