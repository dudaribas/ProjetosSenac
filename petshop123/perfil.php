<?php
session_start();
include_once('conexao.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <!-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol> -->
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://thispersondoesnotexist.com/image" alt="img" class="img-thumbnail" width="150px" height="150px">
                    <div class="mt-3">
                      
                        
                        <?php
                        $cpf = $_SESSION['usuario'];

                      $query = "SELECT nome FROM usuario WHERE cpf='$cpf' "; 
                      $result_query = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array( $result_query )) 
                        { 
                              echo $row['nome'] ; 
                              
                        }
                        
                        ?>
                         
                         
                          
                      
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><a href="./index.php">Site DevPets</h6></a>
                    <span class="text-secondary"></span>
                  </li>
                 
                </ul>
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        $cpf = $_SESSION['usuario'];

                      $query = "SELECT nome FROM usuario WHERE cpf='$cpf' "; 
                      $result_query = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array( $result_query )) 
                        { 
                              echo $row['nome'] ; 
                              
                        }
                        
                        ?>
                      <!-- <a href="listar.php">Listar</a> -->
                    </div>
                  </div>
                <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    <?php
                        $cpf = $_SESSION['usuario'];

                      $query = "SELECT telefone FROM usuario WHERE cpf='$cpf' "; 
                      $result_query = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array( $result_query )) 
                        { 
                              echo $row['telefone'] ; 
                              
                        }
                        
                        ?>

                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Endereço</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        $cpf = $_SESSION['usuario'];

                      $query = "SELECT endereco FROM usuario WHERE cpf='$cpf' "; 
                      $result_query = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array( $result_query )) 
                        { 
                              echo $row['endereco'] ; 
                              
                        }
                        
                        ?>
                    </div>
                  </div>
                  </hr>
                 
                  <div class="row">
                    <div class="col-sm-12">
                     <br> <a class="btn btn-outline-warning " target="__blank" href="./editaperfil.php">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-dark mr-2">Animais cadastrados</i></h6>
                    
                    <?php 
                     $query = "SELECT nome_animal, animal, cpf FROM animais WHERE cpf ='$cpf'"; 
                     $result_query = mysqli_query($conn,$query);
                       # Exibe os registros na tela 
                       while ($row = mysqli_fetch_array( $result_query )) 
                       { 
                             
                             echo "Nome: " . $row['nome_animal'] . "<br>";
                            echo "Animal: " . $row['animal'] . "<br>";
                             echo " <hr>";


              
                       }
                       
                       
                       ?>
                       <div class="row">
                       <div class="col-sm-12">
                        <br> <a class="btn btn-outline-warning  " target="__blank" href="./cadastro_animal.php">Cadastrar</a>
                       </div>
                      </div>

                      
                      
                      
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-dark mr-2">Consultas agendadas</i></h6>
                      
                      <?php 
                     $query = "SELECT * FROM agendamento WHERE cpf ='$cpf'"; 
                     $result_query = mysqli_query($conn,$query);
                       # Exibe os registros na tela 
                       while ($row = mysqli_fetch_array( $result_query )) 
                       { 
                        echo "Animal: " . $row['nome_animal'] . "<br>";
                        echo "Consulta: " . $row['tipoconsulta'] . "<br>";
                        echo "Data: " . $row['datas'] . "<br>";
                        echo "Horário: " . $row['horario'] . "<br>";
                              
                             echo "<hr>";


              
                       }
      
                       
                    ?>
                     <div class="row">
                       <div class="col-sm-12">
                        <br> <a class="btn btn-outline-warning " target="__blank" href="./agendamento.php" >Agendar</a>
                       </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
     
    background-image: url(https://img.elo7.com.br/product/original/180BD8B/papel-de-parede-pet-patinhas-amarelinhas-papel-de-parede-animado-para-android.jpg);  
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

.bnt a{
  background-color: #ffe4c4;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>





