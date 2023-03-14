<?php
session_start();
//INCLUDE - para incluir a conecxao e once para ser incluido somente uma vez

include_once("conexao.php");

/*
recebendo os dados do formulario usar: filter 

FILTER_SANITIZE_STRING : para limpar os dados da varíavel que vem do formulário
*/

$nome = filter_input(INPUT_POST, 'nome_animal',FILTER_SANITIZE_STRING);
$animal = filter_input(INPUT_POST,'animal', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_NUMBER_INT);
$sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_STRING);
function valida_cpf( $cpf = false ) {

    if ( ! function_exists('calc_digitos_posicoes') ) {
        function calc_digitos_posicoes( $digitos, $posicoes = 10, $soma_digitos = 0 ) {
        
            for ( $i = 0; $i < strlen( $digitos ); $i++  ) {
                $soma_digitos = $soma_digitos + ( $digitos[$i] * $posicoes );
                $posicoes--;
            }

            $soma_digitos = $soma_digitos % 11;

            if ( $soma_digitos < 2 ) {
                $soma_digitos = 0;
            } else {
                $soma_digitos = 11 - $soma_digitos;
            }
            $cpf = $digitos . $soma_digitos;
            return $cpf;
        }
    }
    if ( ! $cpf ) {
        return false;
    }
 
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
 
    if ( strlen( $cpf ) != 11 ) {
        return false;
    }
     else if ($cpf == '00000000000' || 
     $cpf == '11111111111' || 
     $cpf == '22222222222' || 
     $cpf == '33333333333' || 
     $cpf == '44444444444' || 
     $cpf == '55555555555' || 
     $cpf == '66666666666' || 
     $cpf == '77777777777' || 
     $cpf == '88888888888' || 
     $cpf == '99999999999') 
     return false;

    $digitos = substr($cpf, 0, 9);
    $novo_cpf = calc_digitos_posicoes( $digitos );
    $novo_cpf = calc_digitos_posicoes( $novo_cpf, 11 );

    if ( $novo_cpf === $cpf ) {
        return true;
    } else {
        return false;
    }
}

$cpf = $_POST['cpf']; 
if ( valida_cpf( $cpf) && $animal== "Cachorro" |  $animal == "Gato" | $animal == "Pássaro" | $animal== "Crocodilo" | $animal=="Hamster" && $sexo == "F" |  $sexo == "M" ) {
    $result_animal="INSERT INTO animais(nome_animal,animal,cpf,sexo) VALUES('$nome','$animal','$cpf', '$sexo')";
    $resultado_animal = mysqli_query($conn , $result_animal);
} else {
    echo"CPF válido";
}

//vericar se foram inseridos com sucesso no banco de dadoe.

if (mysqli_insert_id($conn)) {
    $_SESSION['msg']= "<p>Usuario cadasatrado com SUCESSO....</p>";
    header("Location:cadastro_animal.php");
}else{
    $_SESSION['msg']="<p> O usuario NAO FOI cadastrado.TENTE MAIS TARDE </p>";
    header("Location:cadastro_animal.php");
}

?>




