<?php
session_start();

//Include serve para incluir uma conexão e Once para
//ser incluide somente uma vez

include_once("conexao.php");

//Recebendo os dados do formulários, usar filter
//FILTER_SANITIZE_STRING = Serve para limpar as variáveis que vem do formulário


$nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$senha= filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);

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
     elseif ($cpf == '00000000000' || 
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

    if( $novo_cpf === $cpf ) {
        return true;
    } else {
        return false;
    }
}



        $cpf = $_POST['cpf'];
        if ( valida_cpf( $cpf) ){
            $result_usuario="INSERT INTO usuario(nome, cpf, senha , endereco, telefone ) VALUES ('$nome' , '$cpf','$senha','$endereco', '$telefone') ";
            $resultado_usuario = mysqli_query($conn,$result_usuario);
            $_SESSION['msg'] = "<p> CPF Válido!!!</p>";
            header("Location:index.php");
        }else {
            $_SESSION['msg'] = "<p>Seu CPF está inválido</p>";
            header("Location:index.php");
        }



//verificar se foram inseridos com sucesso no banco de dados

if(mysqli_insert($conn)){
  $_SESSION['msg'] = "<p> Usuário cadastrado com SUCESSO!!!</p>";
  header("Location:index.php");
}else{
  $_SESSION['msg']="<p> O usuário não foi cadastrado. TENTE MAIS TARDE</p>";
  header("Location:index.php");
}
?>
