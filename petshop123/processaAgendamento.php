<?php
session_start();
//INCLUDE - para incluir a conecxao e once para ser incluido somente uma vez

include_once("conexao.php");

/*
recebendo os dados do formulario usar: filter 

FILTER_SANITIZE_STRING : para limpar os dados da varíavel que vem do formulário
*/

$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$datas = filter_input(INPUT_POST, 'datas',FILTER_SANITIZE_SPECIAL_CHARS);
$horario = filter_input(INPUT_POST,'horario', FILTER_SANITIZE_STRING);
$tipoconsulta = filter_input(INPUT_POST,'tratamento',FILTER_SANITIZE_STRING);
$nomeAnimal = filter_input(INPUT_POST,'animal',FILTER_SANITIZE_STRING);


$botton = $_POST['botao'];
$horarioSelecionado = "SELECT * from  agendamento Where  datas = '$datas' AND horario = '$horario' ";
$cpf = $_POST['cpf'];
$Animal = $_POST['animal'];
$cpfDono = "SELECT * FROM  usuario Where cpf = '$cpf'";
$animal = "SELECT * FROM  animais Where cpf = '$cpf' AND nome_animal = '$nomeAnimal'";




if(isset($botton)){
    $verificarcpf = mysqli_query($conn, $cpfDono);
    if(mysqli_num_rows($verificarcpf) == 0 ){
        $_SESSION['msg'] ="<p>CPF não cadastrado, por favor cadastre-se e tente novamente!!</p>";
        header("Location:agendamento.php");
        }elseif(isset($botton)){
            $verificaAnimal = mysqli_query($conn, $animal);
            if(mysqli_num_rows($verificaAnimal) == 0){
                    $_SESSION['msg'] = "<p>Animal não cadastrado no CPF do dono</p>";
                    
                    header("Location:agendamento.php");
            }else if (isset($botton)){
            $verificar = mysqli_query($conn, $horarioSelecionado);
            if(mysqli_num_rows($verificar) == 0){
                if( $horario == "9:00" | $horario == "10:00" | $horario == "11:00" |$horario == "12:00" | $horario == "13:00" | $horario == "14:00" | $horario == "15:00" 
                | $horario == "16:00" && $tipoconsulta == "Banhos" | $tipoconsulta == "Tosas" | $tipoconsulta == "Laboratório" | $tipoconsulta == "Tingimento" 
                | $tipoconsulta == "Táxi dog" | $tipoconsulta == "Hospedagem" ){
                    $horario = $_POST ['horario'];
                    $tipoconsulta = $_POST ['tratamento'];
                    $cpf = $_POST['cpf'];
                    $nomeAnimal = $_POST['animal'];
                    $resultado_agendamento="INSERT INTO agendamento(horario,cpf,datas,tipoconsulta,nome_animal) VALUES('$horario','$cpf', '$datas','$tipoconsulta', '$nomeAnimal')";
                    $result_agendamento = mysqli_query($conn , $resultado_agendamento);   
                    $_SESSION['msg'] ="<p>Consulta agendada com SUCESSO!!</p>";
                    header("Location:agendamento.php");
                    }
                }else{
                        $_SESSION['msg'] ="<p>Horário indisponível, por favor tente novamente!!</p>";
                        header("Location:agendamento.php");
                    }
                    
            }
        }
    } 
        
            

?>


