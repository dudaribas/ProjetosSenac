var hotel = prompt('Digite o nome do hotel:');

alert('O nome do hotel é ' + hotel);

var nomeusuario = prompt('Informe seu nome:');
Senha();

function Senha() {
var senha = parseInt(prompt('Informe a senha:'));

if (senha === 2678) {
    alert("A senha está correta!");
} else {
    alert("Senha incorreta.");
    Senha();
}
}

alert('Bem-vindo ao hotel ' + hotel + ', ' + nomeusuario + '. É um prazer ter você por aqui!');
Inicio();

function Inicio() {
    
    
    var escolha = parseInt(prompt('Selecione a opção desejada:\n1. Reserva de quartos \n2. Cadastro de hóspedes \n3. Reserva de Eventos \n4. Abastecer carros \n5. Manutenção \n6. Sair'));

    switch(escolha) {
        case 1:
            reserva();
        break;

        case 2:
            cadastro();
        break;

        case 3:
            eventos();
        break;

        case 4:
            abastecer();
        break;

        case 5:
            manutencao();
        break;

        case 6:
            sair();
        break;

        default:
            erro();
        break;
    }

}

function reserva() {
    var diaria = parseFloat(prompt('Informe o valor da diaria:'))
    
    while (diaria <= 0) {
        alert('Valor Inválido!');
        reserva();
    }
    
    var dias = parseInt(prompt('Informe quantas dias serão necessarias:'));

    while (dias > 30 || dias <= 0) {
        alert('Valor Inválido!');
        reserva();
    }
    
    var total = (diaria * dias);

    alert('O valor de ' + dias + ' dias de hospedagem é de R$ ' + total);

    var hospede = prompt('Informe o nome do hóspede:');

    var confirmacao = confirm(nomeusuario + ', Você confirma a hospedagem para ' + hospede + ' por ' + dias + ' dias? S/N');

    if (confirmacao) {
        alert(nomeusuario + ', reserva efetuada para ' + hospede + '. O valor total é de R$ ' + total);
    } else {
        Inicio();
    }

    Inicio();
}

function cadastro() {
    var lista = [];

    function escolha(){
        var opcoes = parseInt(prompt('Selecione a opção desejada \n1. Cadastro \n2. Pesquisa \n3. Sair'));

        switch(opcoes) {
            case 1:
                hospedes();
            break;

            case 2:
                pesquisa();
            break;

            case 3:
                Inicio();
            break;

            default:
            falha();
        }


    }

    function hospedes() {
        var valor_diaria = parseFloat(prompt('Qual é o valor padrão da diária?'));

        if (valor_diaria <= 0) {
            alert('Reserva não efetuada, valor incorreto.');
            escolha();
        } else {
            var dias = parseInt(prompt('Quantas diárias serão necessárias?'));
        }

        if (dias <= 0 || dias > 30) {
            alert('Reserva não efetuada, não aceitamos menos de 1 dia ou mais de 30 dias.');
            escolha();
        } else {
            var hospede = prompt('Qual o nome do hóspede?');

            if (lista.length <= 15) {
                lista.push(hospede);

                var idade = parseInt(prompt('Qual é a idade do hóspede?'));

                if (idade <= 6) {
                    var resultado = ((valor_diaria * dias) * 0);
                    alert(hospede + ', cadastrado(a) com sucesso e possui gratuidade. \nO valor total da hospedagem é: R$' + resultado + ' por ' + dias + ' dias.');
                } else if (idade >= 60) {
                    var resultado = ((valor_diaria * dias) / 2);
                    alert(hospede + ', cadastrada(o) com sucesso e paga meia.\nO valor total da hospedagem é: R$' + resultado + ' por ' + dias + ' dias.');
                } else {
                    var resultado = (valor_diaria * dias);
                    alert(hospede + ', cadastrada(o) com sucesso.\nO valor total da hospedagem é: R$' + resultado + ' por ' + dias + ' dias.');
                }

                escolha();

            } else if (lista.length > 15) {
                alert('Máximo de cadastros atingidos.');
                escolha();
            }
        }
    }

    function pesquisa() {
        var pesquisa = prompt('Qual é o nome do hóspede?');
        var indice = lista.indexOf(pesquisa);

        if (indice !== -1) {
            alert('Hóspede ' + pesquisa + ' foi encontrada(o)!'); 
            escolha();
        } else {
            alert('Hóspede ' + pesquisa + ' não foi encontrada(o)!');
            escolha();
        }
    }

    function falha() {
        alert('Por favor, informe o número entre 1 e 3');
        escolha();
    }

    escolha();
}

function eventos() {
    escolha();

    function escolha() {
        var opcoes = parseInt(prompt('Selecione uma opção: \n1. Cadastrar Evento \n2. Reserva do Buffet \n3. Reserva do Auditório \n4. Reserva do Restaurante \n5. Sair'));

        switch(opcoes) {
            case 1:
                cadas_evento();
            break;

            case 2:
                buffet();
            break;

            case 3:
                auditorio();
            break;

            case 4:
                restaurante();
            break;

            case 5:
                Inicio();
            break;

            default:
            falha();
        }
    }

    function cadas_evento() {
        var garcons = 10.50;

        var tempo = parseInt(prompt('Qual a duração do evento em horas?'));
        var qtd = parseInt(prompt('Quantos garçons serão necessários?'));
        
        var custo = ((garcons * qtd ) * tempo);

        alert('O custo total : R$ ' + custo);
        
        var confirma = prompt('Gostaria de efetuar a reserva S/N?');

        if (confirma == 'S' || confirma == 's'){
            alert(nomeusuario + ', reserva efetuada com sucesso.');
            escolha();
        } else if (confirma == 'N' || confirma == 'n'){
            alert('Reserva não efetuada.');
            escolha();
        }
    }

    function buffet() {
        var cafe = 0.2;
        var agua = 0.5;
        var salgado = 7;

        var convidados = parseInt(prompt('Qual a quantidade de convidados para o evento?'));

        if (convidados > 350) {
            alert('Quantidade de convidados superior à capacidade máxima, suportando apenas 350 convidados.');
            escolha();
        } else {
            var calc_cafe = parseInt(cafe * convidados);
            var calc_agua = parseInt(agua * convidados);
            var calc_salgado = Math.ceil((salgado * convidados)/100);
            var total = ((calc_cafe * 0.8) + (calc_agua * 0.4) + (calc_salgado * 34)); 

            
            alert('O evento precisará de ' + calc_cafe + ' litros de café, ' + calc_agua + ' litros de água, ' + calc_salgado * 100 + ' salgados. O custo total do evento será de R$ ' + total + '.');

            var confirmar = prompt('Gostaria de efetuar a reserva? S/N');

            if (confirmar == 'S' || confirmar == 's'){
                alert(nomeusuario + ', reserva efetuada com sucesso.');
                escolha();
            } else if (confirmar == 'N' || confirmar == 'n'){
                alert('Reserva não efetuada.')
                escolha();
            }
 

        }
    }

  function auditorio() {
        var laranja = 150;
        var colorado = 350;

        var convidados = parseInt(prompt('Qual o número de convidados para o evento?'));

        if (convidados > colorado) {
            alert('Quantidade de convidados superior a capacidade máxima, suporta apenas 350 convidados.');
            escolha();
        } else {
            if (convidados <= 150) {
                alert('Use o auditório Laranja');

                var confirmar = prompt('Gostaria de efetuar a reserva? S/N');

                if (confirmar == 'S' || confirmar == 's'){
                    alert(nomeusuario + ', reserva efetuada com sucesso.');
                    escolha();
                } else if (confirmar == 'N' || confirmar == 'n'){
                    alert('Reserva não efetuada.');
                    escolha();
                }
            } else if (convidados <= 220) {

                var calculo = (convidados - laranja);

                alert('Use o auditório Laranja inclua mais ' + calculo + 'cadeiras)');

                var confirmar = prompt('Gostaria de efetuar a reserva? S/N');

                if (confirmar == 'S' || confirmar == 's'){
                    alert(nomeusuario + ', reserva efetuada com sucesso.');
                    escolha();
                } else if (confirmar == 'N' || confirmar == 'n'){
                    alert('Reserva não efetuada.')
                    escolha();
                }
            } else if (convidados > 220) {
                alert('Use o auditório Colorado');

                var confirmar = prompt('Gostaria de efetuar a reserva? S/N');

                if (confirmar == 'S' || confirmar == 's'){
                    alert(nomeusuario + ', reserva efetuada com sucesso.');
                    escolha();
                } else if (confirmar == 'N' || confirmar == 'n'){
                    alert('Reserva não efetuada.')
                    escolha();
                }

            }
        }
    }

    function restaurante() {
        var dia_inicio = 7;
        var dia_final = 23;
        var fim_semana_inicio = 7;
        var fim_semana_final = 15;
    
        while (true) {
            var reserva = parseInt(prompt('Qual o dia do seu evento? \n1. Segunda \n2. Terça \n3. Quarta \n4. Quinta \n5. Sexta \n6. Sábado \n7. Domingo \n8. Sair'));
    
            if (reserva === 8) {
                break;
            }
    
            switch (reserva) {
                case 1:
                    segunda();
                    break;
    
                case 2:
                    terca();
                    break;
    
                case 3:
                    quarta();
                    break;
    
                case 4:
                    quinta();
                    break;
    
                case 5:
                    sexta();
                    break;
    
                case 6:
                    sabado();
                    break;
    
                case 7:
                    domingo();
                    break;
    
                default:
                    erro();
                    break;
            }
        }
    
        function segunda() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < dia_inicio || hora > dia_final) {
                alert('Restaurante indisponível, dia da semana funcionamos das 7h até 23h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Segunda às ' + hora + 'hs.');
            }
        }
    
        function terca() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < dia_inicio || hora > dia_final) {
                alert('Restaurante indisponível, dia da semana funcionamos das 7h até 23h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Terça às ' + hora + 'hs.');
            }
        }
    
        function quarta() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < dia_inicio || hora > dia_final) {
                alert('Restaurante indisponível, dia da semana funcionamos das 7h até 23h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Quarta às ' + hora + 'hs.');
            }
        }
    
        function quinta() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < dia_inicio || hora > dia_final) {
                alert('Restaurante indisponível, dia da semana funcionamos das 7h até 23h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Quinta às ' + hora + 'hs.');
            }
        }
    
        function sexta() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < dia_inicio || hora > dia_final) {
                alert('Restaurante indisponível, dia da semana funcionamos das 7h até 23h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Sexta às ' + hora + 'hs.');
            }
        }
    
        function sabado() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < fim_semana_inicio || hora > fim_semana_final) {
                alert('Restaurante indisponível, final de semana funcionamos das 7h até 15h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Sábado às ' + hora + 'hs.');
            }
        }
    
        function domingo() {
            var hora = parseInt(prompt('Qual a hora do seu evento?'));
    
            if (hora < fim_semana_inicio || hora > fim_semana_final) {
                alert('Restaurante indisponível, final de semana funcionamos das 7h até 15h.');
            } else {
                var empresa = prompt('Qual o nome da empresa?');
                alert('Restaurante reservado para ' + empresa + '. Domingo às ' + hora + 'hs.');
            }
        }
    
        function erro() {
            alert('Escolha um número de 1 a 8:');
            restaurante();
        }
    }
    
    
    

    function falha() {
        alert('Por favor, informe um número entre 1 e 3');
        escolha();
    }
}

function abastecer() {
    var wayne_alcool = parseFloat(prompt('Qual o valor do álcool no posto Wayne Oil?'));
    var wayne_gasolina = parseFloat(prompt('Qual o valor da gasolina no posto Wayne Oil?'));
    var stark_alcool = parseFloat(prompt('Qual o valor do álcool no posto Stark Petrol?'));
    var stark_gasolina = parseFloat(prompt('Qual o valor da gasolina no posto Stark Petrol?'));
    var tanque = 42;

        if (wayne_alcool < wayne_gasolina || wayne_alcool < stark_alcool || wayne_alcool < stark_gasolina) {
            var calc_alcool = parseFloat(wayne_alcool * tanque);
 
            alert(nomeusuario + ', é mais barato abastecer com álcool no posto Wayne Oil \nO valor total para encher o tanque é R$' + calc_alcool + '.');
            var confirmar = prompt('Você deseja abastecer? S/N');

            if (confirmar == 'S' || confirmar == 's') {
                alert('Abastecimento realizado com sucesso.');
                Inicio();
           } else if (confirmar == 'N' || confirmar == 'n') {
                alert('Abastecimento cancelado.');
                Inicio();
           }
        
        } else if (wayne_gasolina < wayne_alcool || wayne_gasolina < stark_alcool || wayne_gasolina < stark_gasolina) {
            var calc_gasolina = parseFloat(wayne_gasolina * tanque)

            alert(nomeusuario + ', é mais barato abastecer com gasolina no posto Wayne Oil \nO valor total para encher o tanque é R$' + calc_gasolina + '.');
            var confirmar = prompt('Você deseja abastecer? S/N');

            if (confirmar == 'S' || confirmar == 's') {
                alert('Abastecimento realizado com sucesso.');
                Inicio();
            } else if (confirmar == 'N' || confirmar == 'n') {
                alert('Abastecimento cancelado.');
                Inicio();
            }
                  
        } else if (stark_alcool < wayne_alcool || stark_alcool < wayne_gasolina || stark_alcool < stark_gasolina) {
            var calc_alcool = parseFloat(stark_alcool * tanque)

            alert(nomeusuario + ', é mais barato abastecer com álcool no posto Stark Petrol \nO valor total para encher o tanque é R$' + calc_alcool + '.');
            var confirmar = prompt('Você deseja abastecer? S/N');

            if (confirmar == 'S' || confirmar == 's') {
                alert('Abastecimento realizado com sucesso.');
                Inicio();
            } else if (confirmar == 'N' || confirmar == 'n') {
                alert('Abastecimento cancelado.');
                Inicio();
            }

        } else if (stark_gasolina < wayne_alcool || stark_gasolina < wayne_gasolina || stark_gasolina < stark_alcool) {
            var calc_gasolina = parseFloat(wayne_gasolina * tanque)

            alert(nomeusuario + ', é mais barato abastecer com gasolina no posto Stark Petrol \nO valor total para encher o tanque é R$' + calc_gasolina + '.');
            var confirmar = prompt('Você deseja abastecer? S/N');

            if (confirmar == 'S' || confirmar == 's') {
                alert('Abastecimento realizado com sucesso.');
                Inicio();
            } else if (confirmar == 'N' || confirmar == 'n') {
                alert('Abastecimento cancelado.');
                Inicio();
          }
         } 
}

function manutencao() {
    var nome_empresa = [];
    var valor = [];
    var start = '';
    var final = 'N'

        while (start != final) {
            var empresa = prompt('Qual é o nome da empresa?');
            nome_empresa.push(empresa);

            var preco = parseFloat(prompt('Qual o valor por aparelho?'));
            var qnts_aparelhos = parseInt(prompt('Qual a quantidade de aparelhos?'));
            var desconto = parseInt(prompt('Qual a porcentagem de desconto?'));
            var min_aparelhos = parseInt(prompt('Qual o número mínimo de aparelhos para conseguir o desconto?'));

            if (qnts_aparelhos >= min_aparelhos) {
                var calc_manutencao = (qnts_aparelhos * preco);
                var calc_desconto = (( calc_manutencao * desconto) / 100);
                var resultado = (calc_manutencao - calc_desconto);

                alert('O serviço de' + empresa + ' custará R$' + resultado + '.');
                valor.push(resultado);
            } else if (qnts_aparelhos < min_aparelhos) {
                var calc_manutencao = (qnts_aparelhos * preco);

                alert('O serviço de' + empresa + ' custará R$' + calc_manutencao + '.');
                valor.push(calc_manutencao);
            }

            var continuar = prompt('Deseja informar novos dados, ' + nomeusuario + '? (S/N)');

            if (continuar == 'N' || continuar == 'n') {
                var start = 'N';
            } else if (continuar == 'S' || continuar == 's') {
                var start = '';
            }
        }

            var menor_orcamento = Math.min(...valor);
            var posicao = valor.indexOf(menor_orcamento);
            var name_empresa = nome_empresa[posicao];
            alert('O orçamento de menor valor é o de ' + name_empresa + ' por R$' + menor_orcamento + '.');
            Inicio();
      
}

function sair() {
    var confirma = confirm('Você deseja mesmo sair?');

    if (confirma) {
        alert('Muito obrigado e até logo, ' + nomeusuario +'.');
        window.close();
    } else {
        Inicio();
    }
}

function erro() {
    alert('Por Favor! \nInforme um número de 1 a 10.');
    Inicio();
}