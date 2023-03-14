<!-- 2 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>DevPets</title>
</head>
<body>
  <div id="home"></div>
    <header>
      
	<nav>
		<img src=""/> 
		<h1 class="tata" ><a><img class="bi" width="50" height="50" src="./imgs/comp.jpg"></a></img>DevPets</h1>

	</nav>
	<div class="menu">
	  <ul class="cima">
            <li>
              <a href="#home" class="home" width="24" height="24">
                Home
              </a>
            </li>
            <li>
              <a href="#servicos" class="serv" width="24" height="24">
                Serviços
              </a>
            </li>
            <li>
              <a href="#atendimento" class="atend" width="24" height="24">
                Atendimento
              </a>
            </li>
            <li>
              <a href="#produtos" class="prod" width="24" height="24">
                Produtos
              </a>
            </li>
            <li>
              <a href="#sobrenos" class="faq" width="24" height="24">
                Sobre nós
              </a>
            </li> 

            <li class="text-end">
          <div class="text-end">
           <a href="login.php"> <button type="button" class="botao">Login</button></a> 
           <a href="CadastroUser.php" type><button type="button" class="botao">Cadastre-se</button></a> 
          </div>
      </li>
    </ul>
          
            
  </div>
</header>

<div class="row">
    <div class="col-lg-4">
      <img src="./imgs/calen3-removebg-preview.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

      <h2>Agendamentos</h2>
      <p>Agende consultas rapidamente, veja os horários e dias disponíveis.</p>
      <p><a class="btn btn-secondary" href="agendamento.php">Agendar &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img src="./imgs/vete-removebg-preview.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

      <h2>Profissionais</h2>
      <p>Profissionais capacitados 24hrs por dia todos os dias da semana.</p>
      <p><a class="btn btn-secondary" href="#sobrenos">Sobre nós&raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img src="./imgs/mapaa.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

      <h2>Como chegar?</h2>
      <p>Veja como chegar na clínica mais próxima da sua casa e confira as distâncias.</p>
      <p><a class="btn btn-secondary" href="#mapa">Mapa &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <div id="servicos">
    <h4 class= "servis">Serviços</h4>
  <div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
        <h3>Banhos</h3>
        <p>Hidratação, desembaraçamento, escovação de dentes, limpeza de ouvido e corte de unhas.</p>
        <h3>Tosas</h3>
        <p>Tosa na máquina, tosa na tesoura, tosa higiênica, tosa completa e tosa parcial.</p></p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h3>Laboratório</h3>
        <p>Realização de exames no laboratório, exames de imagem e ultrassonografia.</p>
        <h3>Tingimento</h3>
        <p>Coloração e hidratação dos pelos, alisamento e escovação, penteados e reconstrução.</p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
        <h3>Táxi dog</h3>
        <p>Transporte de animais da casa do cliente até a clínica ou outros destinos.</p>
        <h3>Hospedagem</h3>
        <p>Serviço de hotelaria para todos os tipos de animais com segurança e comodidade.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div id="atendimento">
  <h1 class="atendi">Atendimento personalizado pra você!</h1>
</div>
    <div class="tutu">
        <div class="clinica">
            <h2>Atendimento na clínica</h2>
            <p>Você pode levar o seu pet pra uma consulta presencial em uma das nossas unidades, conforme os mapas abaixo. Na clínica temos profissionais especializados
            em todas as áreas de veterinária para o tratamento dos seus bichinhos, além de áreas de recreação e parquinhos. O atendimento é 24hrs todos os dias da semana, com veterinários
            de plantão e equipamentos de última geração e tecnologia avançada. Traga seu animalzinho e garanta saúde, bem-estar e muita diversão! </p> 
            <div class="imgs">
            <h5 class="duds"><a><img class="bi" width="150" height="100" radius="50%" src="./imgs/parque.jpg"></a></h5>
            <h5 class="duds"><a><img class="bi" width="150" height="100"  src="./imgs/hamsss.jpg"></a></h5>
            <h5 class="duds"><a><img class="bi" width="150" height="100"  src="./imgs/tosaa.jpg"></a></h5>
        </div>
        </div>
        <div class="clinica">
            <h2>Atendimento à domicílio</h2>
            <p>Não tem como trazer seu bichinho pra nossa clínica? Nós vamos até você! Nossos médicos estão disponíveis à qualquer hora do dia para atendê-los da melhor
            forma. Para ser atendido em casa é simples: basta nos ligar, passar seu endereço e aguardar nossa chegada. No atendimento à domicílio inclui os seguintes serviços: Banho e tosa(higiênca e completa); clínica médica,
            aplicação de vacinas e fornecimento de remédios. Nós levamos os equipamentos e fornecemos todos os serviços no conforto da sua casa.</p>
            <div class="imgs">
                <h5 class="duds"><a><img class="bi" width="150" height="100" src="./imgs/peixe.jpg"></a></h5>
                <h5 class="duds"><a><img class="bi" width="150" height="100" src="./imgs/gatata.jpg"></a></h5>
                <h5 class="duds"><a><img class="bi" width="150" height="100" src="./imgs/bird.jpg"></a></h5>
            </div>
            </div>
    </div>
    <div id="mapa">
    <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.779931945004!2d-46.723924485020525!3d-23.648050984639895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce510e8d3746ed%3A0x3e9f3a76e1ebfb69!2sEscola%20Senai%20Su%C3%AD%C3%A7o-Brasileira%20Paulo%20Ernesto%20Tolle!5e0!3m2!1spt-BR!2sbr!4v1663248222465!5m2!1spt-BR!2sbr"
      width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.662646849783!2d-46.71498998502031!3d-23.65224958463786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51aa42392011%3A0xfbca76924e7bddaa!2sEscola%20Senai%20Ary%20Torres.!5e0!3m2!1spt-BR!2sbr!4v1663941996205!5m2!1spt-BR!2sbr" width="500" height="400" style="border:0;" 
      allowfullscreen="" loading="lazy" class="mapa2" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
        <p class="texxt">Nossos PetShops tem duas unidades:Rua Bento Branco de Andrade Filho, 376. Ou R. Amador Bueno, 504. Confira os mapas acima.</p>
</div>
      <div id="produtos">
        <h6 class="servis">Produtos</h6>
        <div class="cards-list">

        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img11.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Lenços umedecidos</p>
            <p class="lala">À partir de R$16,99.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img6.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Toalhas</p>
            <p class="lala">À partir de R$24,00.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img1.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Camas</p>
            <p class="lala">À partir de R$169,99.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img33.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Shampoo's</p>
            <p class="lala">À partir de R$14,99.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img555.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Rações</p>
            <p class="lala">À partir de R$53,00.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img8.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Perfumes</p>
            <p class="lala">À partir de R$14,99.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img22.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Caixas de brinquedos</p>
            <p class="lala">À partir de R$249,99.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img44.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Brinquedos</p>
            <p class="lala">À partir de R$9,99.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img7.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Lança-ração</p>
            <p class="lala">À partir de R$50,00.</p>
          </div>
        </div>
        <div class="card 1">
          <div class="card_image"> <img src="./imgs/img999.jpeg" /> </div>
          <div class="card_title title-white">
            <p>Hidratantes</p>
            <p class="lala">À partir de R$19,99.</p>
          </div>
        </div>
</div>
</div>

<div id="sobrenos">
  <h2 class="servis">Conheça nosso time</h2>
  <div class="cardes">
    <div class="cardone">
      <img class="nos" src="./imgs/fabs.jpeg" alt="Dra. Fabíola">
      <div class="infos">
        <h6 class="nome">Dra. Fabíola Girotti</h6>
        <p class="info">Formada em Medicina Veterinária na FMU em 2017 e especializada em Clínica Médica.</p>
      </div>
    </div>
    <div class="cardone">
      <img class="nos" src="./imgs/isa.jpeg" alt="Dra. Isabela">
      <div class="infos">
        <h6 class="nome">Dra. Isabela Correia</h6>
        <p class="info">Bacharelado em Medicina Veterinária na USP em 2015 e pós-graduada em Anestesiologia de cães e gatos.</p>
      </div>
    </div>
    <div class="cardone">
      <img class="nos" src="./imgs/bia.jpeg" alt="Dra. Bianca">
      <div class="infos">
        <h6 class="nome">Dra. Bianca Camargo</h6>
        <p class="info">Curso técnico de Veterinária na FAMESP em 2020 e especializada em Dermatologia Veterinária.</p>
      </div>
    </div>
    <div class="cardone">
      <img class="nos" src="./imgs/duds3.jpeg" alt="Dra. Eduarda">
      <div class="infos">
        <h6 class="nome">Dra. Eduarda Ribas</h6>
        <p class="info">Formada em Enfermagem Veterinária na UFMG em 2021 e pós-graduada em Cirurgias em Pequenos Animais.</p>
      </div>
    </div>
  </div>
</div>
<footer>
    <div class="tudo">
        <ul class="redes">
            <a href="https://wa.me/5511940028922"><img class="bicha" width="24" height="24" src="./imgs/whatsapp.png"></img></a>
            <a href= "https://facebook.com"><img class="bicha" width="24" height="24" src="./imgs/facebook.png"></img></a>
            <a href="https://instagram.com"><img class="bicha" width="24" height="24" src="./imgs/instagram.png"></img></a>
        </ul>
        <div class="texto">
          <a href="#home"> <button type="button" class="botao">Voltar ao início</button></a>
          <p  class="logo" >DP</p>
          <a href="loginAdm.php"> <button type="button" class="botao">Àrea do ADM</button></a>
         </div> 
         <P class="textinho">&copy; 2022 DevPets, Inc. Todos os direitos reservados.</P>
    </div>
</footer>
</body>
</html>