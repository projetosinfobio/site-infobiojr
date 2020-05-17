<!DOCTYPE html>
<!-- B2: Script para menu -->
<script>
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };
    
    
    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    function textos() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

<!-- Inicio da estrutura do site -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="InfoBioJr">

    <!-- Script para o Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141202748-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141202748-1');
    </script>

    <!-- Icone da aba do site -->
    <link rel="shortcut icon" href="img\LogoInfobioJr.png" type="image/png">
    <link rel="icon" href="img\LogoInfobioJr.png" type="image/png">

    <title>InfoBio Jr.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles for carrousel --> 
    <link rel="stylesheet" href="css/carousel-bootstrap.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
      
    <!--Alto contraste-->
    <link href="css/contrast.css" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130731311-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130731311-1');
  </script>

  </head>

  <!-- Assim que a página for carregada, todas informações de cada membros serão colocados -->
  <body id="page-top" onload="textos(); infoMembros();">
      
      
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">InfoBio Júnior</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Projetos</a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Membros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#procelSeletivo">Processo Seletivo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">
            Bem-Vindo à Infobio Jr!
          </div>
          <div class="intro-heading"><h1>
            <!-- <p class="typewrite" data-period="2000" data-type='["Fundada em 2006", "Mais de 50 projetos realizados", "Pioneira da área no Brasil", "Processo seletivo semestral", "Contou com mais de 100 membros"]'> -->
            <p class="typewrite branco" data-period="2000" data-type='["Fundada em 2006", "Pioneira da área no Brasil", "Processo seletivo semestral"]'>
              <span class="wrap"></span>
            </p>
          </h1>
          </div>
          <a href="#services" class="btn btn-circle js-scroll-trigger btn-down">
                <i class="fa fa-angle-double-down animated"></i>
          </a>
        </div>
      </div>
    </header>

    <!-- APOIO A SEMANA DA IBM -->
    <section class="py-4" id="apoio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="section-heading text-uppercase"> Nos apoiamos a semana brasileira de informática biomédica </h3>
            </div>
           
          </div>
          <div class="row text-center">
              <div class="col-md-3">
              <div class="team-member">
                  <img class="mx-auto rounded-circle img-fluid" src="img/logo-fundo-branco-semanaibm2019.png" alt="Semana Brasileira da Informática Biomédica">
              </div>
              </div>

              <div class="col-md-9">
                  <h4 class="service-heading"> XVII Semana Brasileira da Informátiva Biomédica</h4> 
                    <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp; A Semana Brasileira de Informática Biomédica reúne acadêmicos de diversos cursos superiores: Informática Biomédica, Física Médica, Ciências da Computação, Engenharia da Computação, Engenharia Biomédica, Medicina, Biologia, etc. O evento é realizado anualmente e tem cunho acadêmico, empresarial e cultural. </p>

                    <p align="center">
                    <a href="http://www.semanaibm.infobiojr.com.br/">
                      <button class="btn btn-primary btn-xl text-uppercase">  Saiba mais... </button>
                    </a> 
                  </p>
              </div>
            </div>

      </div>
      <hr style="border-top: 2px solid #d3d3d3" width="80%">
    </section>



    <!-- Servicos -->
    <section class="py-4" id="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Serviços</h2>
          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <img class="" src="img/services/criacao-de-sites1.png" alt="" height="196" width="196">
              <h4 class="service-heading">Criação de Sites</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Desenvolvimento de sistemas web, tanto estáticos quanto dinâmicos, visando maior usabilidade, qualidade e compatibilidade. </p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/services/bioinformatica.png" alt="" height="196" width="196">
              <h4 class="service-heading">Bioinformática</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Modelagem e simulação de problemas biológicos envolvendo grande volume de dados, análise estrutural, montagem de genomas e análise de expressão gênica. </p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/services/cursos.png" alt="" height="196" width="196">
              <h4 class="service-heading">Cursos</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Oferecimento de cursos com parceria de grandes empresas, sobre os mais diversos assuntos de tecnologia, empreendedorismo e desenvolvimento pessoal. </p>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <img class="" src="img/services/gestao-em-saude.png" alt="" height="196" width="196">
              <h4 class="service-heading">Gestão em Saúde</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Desenvolvimento de sistemas voltados à organização, gerenciamento e representação de dados clínicos, serviços hospitalares e tecnologia assistiva. </p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/services/processamento-de-imagens.png" alt="" height="196" width="196">
              <h4 class="service-heading">Imagens Médicas</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Desenvolvimento de sistemas de apoio à decisão médica, por meio de algoritmos para aquisição, tratamento e análise de sinais e imagens. </p>
            </div>
              <div class="col-md-4">
              <img class="" src="img/services/bioengenharia.png" alt="" height="196" width="196">
              <h4 class="service-heading">Bioengenharia</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;É voltada para o desenvolvimento de aplicativos, soluções e sistemas aplicados ao corpo humano utilizando técnicas e equipamentos como prototipagem, fotoelasticidade e etc. </p>
            </div>
            <!--<div class="col-md-4">
              <img class="" src="img/services/responsabilidade-social.png" alt="" height="196" width="196">
              <h4 class="service-heading">Responsabilidade Social</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;A partir de 2015, iniciaram-se projetos sociais da Infobio Jr., ampliando o campo de atuação da empresa e, assim, aprimorando a relação entre a comunidade universitária e a sociedade. </p>
            </div>-->
          </div>
        </div>
    </div>
    </section>

    <!-- Seção: Projetos -->
  <!-- <section class="py-4 bg-light" id="portfolio">
      <div class="container">
    
        <div class="row"> <!-- Cabeçalho da seção de projetos -->
   <!--       <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> Projetos realizados </h2>
            <br>
          </div>
        </div>
    
        <div class="row"> <!-- Linha que contém os projetos -->
    
    <!-- Informações de um projeto (1° coluna da linha) -->
   <!--       <div class="col-md-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <img class="img-fluid" src="img/portfolio/ProjetoC.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Website do 15° Congresso Paulista de Saúde Pública</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido para realizar a divulgação do evento e para gerenciar atividades de submissão de trabalhos. </p>
            </div>
          </div>
      
          <div class="col-md-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <img class="img-fluid" src="img/portfolio/CursoExcel1-20181.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Curso de Excel</h4>
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Em parceria com a PassaEu, a InfobioJr oferece o treinamento em Excel Maestria: "do básico ao avançado". Realizado no 1° semestre de 2018. </p>
            </div>
          </div>
          
        </div> <!-- Fim da linha que contém os projetos -->
  <!--    </div> <!-- Fim container -->
  <!--  </section> -->

    <!-- Seção: Quem somos -->
    <section class="py-4" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Quem somos</h2>
              <a class="text-info" onclick="mostrarTexto()">Clique aqui para saber mais da Infobio Jr.</a>
            </div>
            <script type="text/javascript">
              function mostrarTexto() {
              var x = document.getElementById("sobre_infobio");
              if (x.style.display === "none") {
                  x.style.display = "block";
              } else {
                  x.style.display = "none";
              }
            }
            </script>
            <div id="sobre_infobio" style="display: none">
                &nbsp;&nbsp;&nbsp;&nbsp;A InfoBio Jr. é a primeira Empresa Júnior de Informática Biomédica no Brasil, constituindo em uma associação civil, sem fins lucrativos. Foi criada em maio de 2006 pelos alunos de Informática Biomédica da Universidade de São Paulo de Ribeirão Preto <a href="http://ibm.fmrp.usp.br/">Mais informações sobre o curso</a>.

              Nossa Empresa Júnior proporciona aos seus membros efetivos condições para aplicações práticas dos conhecimentos obtidos durante a graduação,atuando em projetos de diversas áreas, prezando pela alta qualidade, inovação e custo abaixo do mercado.
            </div>

          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <img class="" src="img/about/icone-missao-1.png" alt="" style="width:250px;height:250px;">
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Desenvolver sistemas computacionais na área da saúde para clientes interessados em inovação e qualidade, proporcionando aos nossos membros uma inserção no mercado de trabalho ainda na graduação.</p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/about/icone-visao-1.png" alt="" style="width:250px;height:250px;">
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Consolidar-se como empresa na área de informática biomédica, capacitando os alunos para atuarem no mercado.</p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/about/icone-valores-1.png" alt="" style="width:250px;height:250px;">
              <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp; Trabalho em equipe, Comprometimento, Iniciativa, Qualidade e Inovação.</p>
            </div>
          </div>
        </div>
    </section>

    <!-- Membros -->
  
  <!-- Passos para alterar membros, importante atualizar a cada processo seletivo
  1- mudar o valor da variável nlinhas, para aumentar/diminuir o tamanho da matriz que guarda os membros
  2- inserir/apagar os dados dos membros na matriz
  3- acrescentar/retirar a bolinha de baixo das fotos
  4- acrescentar/retirar porção do html, com divs e lembrar de mudar os nomes de IDs!!
  -->
  <script> 
  // Script para a automatização na inserção, alteração, consulta e remoção de membros.
  var nlinhas = 20; // Quando inserir ou remover membro, tem que atualizar esse número.
  var ncolunas = 6;
  // Declarando uma matriz.
  var membros = new Array(nlinhas)
    for (i=0; i<nlinhas; i++)
        membros[i]=new Array(ncolunas);
    // 1° Linha: nome e cargo
    // 2° Linha: links das redes sociais
    // 3° Linha: endereço da imagem
    // 1° Membro
    //Menção honrosa
    //membros[0][0] = "Anderson Apunike"; membros[0][1] = "Presidente"; 
    //membros[0][2] = "https://github.com/acapunike/"; membros[0][3] = "https://www.facebook.com/anderson.chidi.144"; membros[0][4] = "https://www.linkedin.com/in/anderson-chidi/";
    //membros[0][5] = "img/team/anderson_apunike.jpg"; // Endereco da imagem
  
    // 1° Membro
    membros[0][0] = "Larissa Asito"; membros[0][1] = "Presidente";
    membros[0][2] = "https://github.com/LarissaAsito"; membros[0][3] = "https://www.facebook.com/larissa.asito"; membros[0][4] = "https://www.linkedin.com/in/larissa-asito-b89b0915b/";
    membros[0][5] = "img/team/larissa_asito.jpg";
      
    // 2° Membro
    membros[1][0] = "Isabela Erthal"; membros[1][1] = "Diretora qualidade";
    membros[1][2] = "https://github.com/erthal-id"; membros[1][3] = "https://www.facebook.com/isabela.erthal"; membros[1][4] = "https://www.linkedin.com/in/isabela-dias-erthal-40a349184/";
    membros[1][5] = "img/team/Isabela_Erthal.jpg";    
      
    // 3º membro
    membros[2][0] = "Felipe de Almeida"; 
    membros[2][1] = "Diretor projetos";
    membros[2][2] = "https://github.com/fellimao"; 
    membros[2][3] = "https://www.facebook.com/felipe.lopesdealmeida.9"; 
    membros[2][4] = "https://www.linkedin.com/in/felipe-lim%C3%A3o-lopes-de-almeida-914a46165/";
    membros[2][5] = "img/team/felipe_almeida.jpg";    
      
    // 4° Membro
    membros[3][0] = "Milan Andrade"; membros[3][1] = "Projetos";
    membros[3][2] = "#"; membros[3][3] = "#"; membros[3][4] = "#";
    membros[3][5] = "img/team/milan_andrade.jpg";
    // 5° Membro
    membros[4][0] = "Ninna Silva"; membros[4][1] = "Projetos";
    membros[4][2] = "https://github.com/NinnaHS"; membros[4][3] = "https://www.facebook.com/ninna.hiratasilva"; membros[4][4] = "https://www.linkedin.com/in/ninna-hirata-silva-41353915b/";
    membros[4][5] = "img/team/ninna_silva.jpg";
    // 6° Membro
    membros[5][0] = "Larissa Okano"; membros[5][1] = "Diretora recursos humanos";
    membros[5][2] = "#"; membros[5][3] = "https://www.facebook.com/larissa.okano"; membros[5][4] = "https://www.linkedin.com/in/larissa-miyuki-okano-8b867a16a/";
    membros[5][5] = "img/team/larissa_okano.jpg";
    // 7° Membro
    membros[6][0] = "Beatriz Miranda"; membros[6][1] = "Diretora marketing";
    membros[6][2] = "https://github.com/BeaMtrix"; membros[6][3] = "https://www.facebook.com/beatriz.miranda.7771"; membros[6][4] = "https://www.linkedin.com/in/beatriz-miranda-b81345165/";
    membros[6][5] = "img/team/beatriz_miranda.jpg";
    // 8° Membro
    membros[7][0] = "Julia Saito"; membros[7][1] = "Marketing";
    membros[7][2] = "#"; membros[7][3] = "#"; membros[7][4] = "#";
    membros[7][5] = "img/team/julia_saito.jpg";
    // 9° Membro
    membros[8][0] = "Giullia Inoue"; membros[8][1] = "Recursos Humanos";
    membros[8][2] = "https://github.com/giulliainoue"; membros[8][3] = "https://www.facebook.com/giullia.inoue/"; membros[8][4] = "www.linkedin.com/in/giulliainoue";
    membros[8][5] = "img/team/giullia_inoue.jpg";
    // 10° Membro
    membros[9][0] = "Leonardo Martinez"; membros[9][1] = "Diretor financeiro";
    membros[9][2] = "https://github.com/LeonardoTres"; membros[9][3] = "https://www.facebook.com/leonardo.martinez.16718979"; membros[9][4] = "https://www.linkedin.com/in/leonardo-martinez-664366110/";
    membros[9][5] = "img/team/leonardo_martinez.jpg"; 
      
    // 11° Membro
    membros[10][0] = "Victor Malheiro"; membros[10][1] = "Projetos";
    membros[10][2] = "#"; membros[10][3] = "#"; membros[10][4] = "#";
    membros[10][5] = "img/team/victor_malheiro.jpg";
     
    // 12° Membro
    membros[11][0] = "Carlos Eduardo Capelini"; 
    membros[11][1] = "Projetos";
    membros[11][2] = "https://github.com/CCapelini"; 
    membros[11][3] = "https://facebook.com/carloseduardo.capelini"; 
    membros[11][4] = "https://www.linkedin.com/in/carlos-eduardo-c-a3074a139/";
    membros[11][5] = "img/team/carlos_capelini.jpg";
      
    // 13° Membro
    membros[12][0] = "Luciano Gabriel Araujo"; 
    membros[12][1] = "Financeiro";
    membros[12][2] = "https://github.com/LucianoAGit"; 
    membros[12][3] = "https://www.facebook.com/lucianogabriel.araujo3"; 
    membros[12][4] = "#";
    membros[12][5] = "img/team/luciano_araujo.jpg";
      
    // 14° Membro
    membros[13][0] = "Renan Segamarchi"; 
    membros[13][1] = "Projetos";
    membros[13][2] = "github.com/Rebsega"; 
    membros[13][3] = "https://www.facebook.com/renan.barbierisegamarchi"; 
    membros[13][4] = "https://www.linkedin.com/in/renan-barbieri-segamarchi-9a5485199";
    membros[13][5] = "img/team/renan_sagamarchi.jpg";
      
    // 15° Membro
    membros[14][0] = "Marco de Santis"; 
    membros[14][1] = "Projetos";
    membros[14][2] = "https://github.com/macorelo-bono"; 
    membros[14][3] = "https://www.facebook.com/marco.chaim"; 
    membros[14][4] = "https://www.linkedin.com/in/marco-aur%C3%A9lio-chaim-de-santis-4433241a5/";
    membros[14][5] = "img/team/marco_santis.jpg";
      
    // 16° Membro
    membros[15][0] = "Maria Vitória Mendes"; 
    membros[15][1] = "Financeiro";
    membros[15][2] = "https://github.com/MaviMendes"; 
    membros[15][3] = "https://www.facebook.com/mariavitoria2010"; 
    membros[15][4] = "https://www.linkedin.com/in/maria-vit%C3%B3ria-ribeiro-mendes-5a1a8919b/";
    membros[15][5] = "img/team/maria_vitoria_mendes.jpg";
      
    // 17° Membro
    membros[16][0] = "Vitor de Oliveira"; 
    membros[16][1] = "Qualidade";
    membros[16][2] = "https://github.com/Vitor-Piotto"; 
    membros[16][3] = "https://www.facebook.com/vitor.piotto"; 
    membros[16][4] = "https://www.linkedin.com/in/vitor-piotto-de-oliveira-11ab061a5/";
    membros[16][5] = "img/team/vitor_piotto.jpg";
      
    // 18° Membro
    membros[17][0] = "Henrick dos Anjos"; 
    membros[17][1] = "Projetos";
    membros[17][2] = "https://github.com/HenrickRobinson"; 
    membros[17][3] = "http://facebook.com/henrickrobinson2001"; 
    membros[17][4] = "www.linkedin.com/in/robinson-henrick-ramos-dos-anjos-942ab31a5";
    membros[17][5] = "img/team/henrick_anjos.jpg";
      
    // 19° Membro
    membros[18][0] = "Juliana Sakamoto"; 
    membros[18][1] = "Recursos humanos";
    membros[18][2] = "https://github.com/JuSakamoto"; 
    membros[18][3] = "https://www.facebook.com/juliana.sakamoto.3"; 
    membros[18][4] = "https://www.linkedin.com/in/juliana-sakamoto-227ab11a5/";
    membros[18][5] = "img/team/member.jpg";
    
    // 20° Membro
    membros[19][0] = "Pedro Martins"; 
    membros[19][1] = "Qualidade";
    membros[19][2] = "https://github.com/ownede2"; 
    membros[19][3] = "https://www.facebook.com/pedroemilio.andrade"; 
    membros[19][4] = "https://www.linkedin.com/in/pedro-emilio-andrade-martins-1337151a6/";
    membros[19][5] = "img/team/member.jpg";
      
    /* X° Membro
    membros[x][0] = "nome"; membros[x][1] = "cargo";
    membros[x][2] = "#github";  membros[x][3] = "#facebook";  membros[x][4] = "#linkedin";
    membros[x][5] = "img/team/nome_sobrenome.jpg"; // Endereco da imagem.  */

    function infoMembros(){
        var i;

        // Inserindo as informacoes de cada membro.
        for(i=0; i<nlinhas; i++){
            // Nome do membro.
            document.getElementById("nome_membro"+(i+1)+"").innerHTML = membros[i][0]; 

            // Cargo do membro.
            document.getElementById("cargo_membro"+(i+1)+"").innerHTML = membros[i][1]; 
            
            // Link da rede social 1 do membro.
            document.getElementById("rede_social1_membro"+(i+1)+"").href = membros[i][2]; 

            // Link da rede social 2 do membro.
            document.getElementById("rede_social2_membro"+(i+1)+"").href = membros[i][3]; 

            // Link da rede social 3 do membro.
            document.getElementById("rede_social3_membro"+(i+1)+"").href = membros[i][4]; 
            
            // Endereco da imagem do membro.
            document.getElementById("endereco_imagem_membro"+(i+1)+"").src = membros[i][5];
        }
    }

  </script>   

  <!-- MEMBROS -->
  <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
    <section class="py-4 bg-light" id="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Membros</h2>
          </div>
        </div>

        <!-- Indicators, bolinhas embaixo das fotos, sempre que for necessário aumentar/diminuir
    a quantidade de sessões precisa alterar aqui, atentando para não repetir o índice-->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active"> <!-- Sessão1: primeira "página de membros" -->

            <div class="row"> <!-- primeiro bloco de membros, sessão = 3 pessoas-->
              <div class="col-sm-4"> <!-- cada tag dessa abriga os dados de um membro-->
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro1"  src="img/team/member.jpg" alt="" >
                  <h4> <div id="nome_membro1"> <!-- NOME DO MEMBRO 1 --> </div> </h4>
                  <p> <div id="cargo_membro1"> <!-- CARGO DO MEMBRO 1 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro1" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro1" href="#" target="_blank">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro1" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro2" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro2"> <!-- NOME DO MEMBRO 2 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro2"> <!-- CARGO DO MEMBRO 2 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro2" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro2" href="#" target="_blank">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro2" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro3" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro3"> <!-- NOME DO MEMBRO 3 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro3"> <!-- CARGO DO MEMBRO 3 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro3" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro3" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro3" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- fim 1° myslides fade -->

          <!-- Sessão2: segunda "página de membros" -->
          <div class="item">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro4" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro4"> <!-- NOME DO MEMBRO 4 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro4"> <!-- CARGO DO MEMBRO 4 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro4" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro4" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro4" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro5" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro5"> <!-- NOME DO MEMBRO 5 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro5"> <!-- CARGO DO MEMBRO 5 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro5" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro5" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro5" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro6" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro6"> <!-- NOME DO MEMBRO 6 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro6"> <!-- CARGO DO MEMBRO 6 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro6" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro6" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro6" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- fim 2° myslides -->

          <!-- Sessão3: terceira "página de membros" -->
          <div class="item ">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro7" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro7"> <!-- NOME DO MEMBRO 7 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro7"> <!-- CARGO DO MEMBRO 7 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro7" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro7" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro7" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro8" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro8"> <!-- NOME DO MEMBRO 8 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro8"> <!-- CARGO DO MEMBRO 8 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro8" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro8" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro8" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro9" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro9"> <!-- NOME DO MEMBRO 9 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro9"> <!-- CARGO DO MEMBRO 9 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro9" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro9" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro9" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- fim 3° myslides -->
      
      <!-- Sessão4: quarta "página de membros" -->
          <div class="item ">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro10" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro10"> <!-- NOME DO MEMBRO 10 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro10"> <!-- CARGO DO MEMBRO 10 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro10" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro10" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro10" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro11" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro11"> <!-- NOME DO MEMBRO 11 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro11"> <!-- CARGO DO MEMBRO 11 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro11" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro11" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro11" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro12" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro12"> <!-- NOME DO MEMBRO 12 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro12"> <!-- CARGO DO MEMBRO 12 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro12" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro12" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro12" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- fim 4° myslides -->

    <!-- Sessão5: quinta "página de membros" -->
          <div class="item ">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro13" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro13"> <!-- NOME DO MEMBRO 13 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro13"> <!-- CARGO DO MEMBRO 13 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro13" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro13" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro13" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro14" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro14"> <!-- NOME DO MEMBRO 14 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro14"> <!-- CARGO DO MEMBRO 14 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro14" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro14" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro14" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro15" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro15"> <!-- NOME DO MEMBRO 15 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro15"> <!-- CARGO DO MEMBRO 15 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro15" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro15" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro15" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- fim 5° myslides -->

<!-- Sessão5: sexta "página de membros" -->
          <div class="item ">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro16" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro16"> <!-- NOME DO MEMBRO 16 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro16"> <!-- CARGO DO MEMBRO 16 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro16" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro16" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro16" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro17" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro17"> <!-- NOME DO MEMBRO 17 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro17"> <!-- CARGO DO MEMBRO 17 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro17" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro17" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro17" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                </div>
              <div class="col-sm-4">
                  <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro18" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro18"> <!-- NOME DO MEMBRO 18 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro18"> <!-- CARGO DO MEMBRO 18 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro18" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro18" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro18" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- fim 6° myslides -->

<!-- Sessão5: setima "página de membros" -->
          <div class="item ">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro19" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro19"> <!-- NOME DO MEMBRO 19 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro19"> <!-- CARGO DO MEMBRO 19 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro19" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro19" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro19" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="team-member">
                  <img class="mx-auto rounded-circle" id="endereco_imagem_membro20" src="img/team/member.jpg" alt="">
                  <h4> <div id="nome_membro20"> <!-- NOME DO MEMBRO 20 --> </div> </h4>
                  <p class="text-muted"> <div id="cargo_membro20"> <!-- CARGO DO MEMBRO 20 --> </div> </p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a id="rede_social1_membro20" href="#" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social2_membro20" href="#" target="_blank" >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a id="rede_social3_membro20" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                </div>
              <div class="col-sm-4">
              </div>
            </div>
          </div> <!-- fim 7° myslides -->
           
    </div> <!-- Fim carrousel inner -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Fim do container -->
    
    </section>
  </div> <!-- Fim do carrousel-->


  <div vw class="enabled libras">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
<!--Alto Contraste-->
    <div class="contraste libras" data-toggle="tooltip" title="Mudar contraste" data-placement="left">
        <div vw-access-button class="contrasteButton">
            <img class="access-button" src="img/logos/68011.png" style="width:27%; float:right;" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">
        </div>
    </div>


  <!-- PROCESSO SELETIVO -->
  <section class="py-4" id="procelSeletivo">

    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"> Processo Seletivo </h2>
        <br>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <!-- 1° column -->
        <div class="col" >
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Mario_Adolfi.png" alt="Mario Adolfi - Co-Fundador da empresa Kidopi">
            <h4> Mário Sergio Adolfi </h4>
            <p> Depoimento do Co-Fundador e Diretor Executivo da Kidopi </p>
            <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Tive a gratificante oportunidade de, durante 3 anos de minha vida acadêmica, ser membro da InfoBio Jr. Ao exercer os cargos de Estagiário, Diretor de Projetos e Presidente tive grande desenvolvimento de meu lado empreendedor, recomendo a todos que aproveitem esta oportunidade e que façam parte da InfoBio. Esta experiência foi de grande importância para minha formação! </p>
          </div>
        </div>

        <!-- 2° column -->
        <div class="col">
            <h4 class="text-center"> Gostou da Infobio Jr.?? </h4>
              <p class="text-muted" >  
                <p class="text-muted">
                  &nbsp;&nbsp;&nbsp;&nbsp;Gostaria de colocar em prática o que aprendeu em aula? Venha participar dessa empresa Júnior maravilhosa de Ribeirão Preto!
                </p>
                
                <p class="text-muted">
                  &nbsp;&nbsp;&nbsp;&nbsp;Se você é de um curso que não seja o da Informática Biomédica mas quer participar, essa é a sua chance!! Vamos te receber como recebemos nossos IBmers!! Com o maior prazer!
                </p>
                <p class="text-muted">
                  &nbsp;&nbsp;&nbsp;&nbsp;Aguarde o novo processo seletivo e entre para o time de estagiários da InfoBio Jr! Em caso de dúvidas, procure um de nossos diretores.
                  O processo seletivo sempre abre no começo de cada semestre, fica esperto para não perder as inscrições.
                </p>
            </p>
            <p align="center">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdlWnDJDvgPMN2V5E5b6JRdxXIT9ZuIJIDqBb-Hg0qcCTSUQA/viewform?usp=sf_link">
                <button class="btn btn-primary btn-xl text-uppercase">  Inscreva-se já! </button>
              </a> 
            </p>
            
        </div>
      </div>  <!-- End row -->
    </div>
  </section>

    <!-- LOCALIZACAO E CONTATO -->
    <section class="py-4 bg-light" id="contato">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <!-- Localizacao -->
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Localização</h2>
                  </div>

                  <!-- Map -->
                  <div id="contact1" class="map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.4738314397146!2d-47.8612676842537!3d-21.173327983639187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bdc69477b9fd%3A0x93e5b81235022b0e!2sAv.+Bandeirantes%2C+Ribeir%C3%A3o+Preto+-+SP!5e0!3m2!1sen!2sbr!4v1521490073260"></iframe>
                    <br/>
                    <small>
                      <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.4738314397146!2d-47.8612676842537!3d-21.173327983639187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bdc69477b9fd%3A0x93e5b81235022b0e!2sAv.+Bandeirantes%2C+Ribeir%C3%A3o+Preto+-+SP!5e0!3m2!1sen!2sbr!4v1521490073260"></a>
                    </small>
                  </div>

                  <!-- TODO/ANOTACAO/ARRUMAR: colocar os textos do lado do icone -->
                  <div class="single contact-info">
          <br>
          <div class="container">
            <div class="row">
              <p>
                <div class="icon"><i class="fa fa-map-marker"></i></div>&nbsp; &nbsp;
                <div class="info">Avenida Bandeirantes, Nº3900 </div>
                <div class="info">Vila Monte Alegre– Ribeirão Preto(SP)</div>
                <div class="info">CEP: 14049-900</div>
              </p>
            </div>
            <br>
            <div class="row">
              <div class="icon"><i class="fa fa-phone"></i></div> &nbsp; &nbsp;
              <div class="info"><p> (14) 99741-5775 (Presidente Larissa A.) </p></div>
            </div>
            <div class="row">
              <div class="icon"><i class="fa fa-phone"></i></div> &nbsp; &nbsp;
              <div class="info"><p> (62) 98453-0259 (Vice-presidente Isabela E.)</p></div>
            </div>
            
            <div class="row">
              <div class="icon"><i class="fa fa-envelope"></i></div> &nbsp; &nbsp;
              <div class="info"><p>contato@infobiojr.com.br</p></div>
            </div>
            
            <div class="row">
              <div class="icon"> <i class="fa fa-facebook"></i> </div> &nbsp; &nbsp;
              <div class="info"> <p> <a href="https://www.facebook.com/InfoBioJr/">www.facebook.com/InfoBioJr</a> </p> </div>
            </div>
                      
            <div class="row">
              <div class="icon"> <i class="fa fa-instagram"></i> </div> &nbsp; &nbsp;
              <div class="info"> <p> <a href="https://www.instagram.com/infobiojr/">www.instagram.com/infobiojr/</a> </p> </div>
            </div>
          </div>
                  </div>
                </div>

                <!-- Contato -->
                <div class="col-md-6">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contato</h2>
                  </div>
                    <form  id="form1" name="form1" method="post" action="mail/contato.php">
  										<div class="form-group">
  											<input class="form-control" id="name" name="name" type="text" placeholder="Seu nome *" required data-validation-required-message="Por favor coloque seu nome.">
  											<p class="help-block text-danger"></p>
  										</div>
  										<div class="form-group">
  											<input class="form-control" id="email" name="email" type="email" placeholder="Seu Email *" required data-validation-required-message="Por favor coloque seu email.">
  											<p class="help-block text-danger"></p>
  										</div>
  										<div class="form-group">
  											<input class="form-control" id="assunto" name="assunto" type="text" placeholder="Assunto *" required data-validation-required-message="Por favor coloque o Assunto.">
  											<p class="help-block text-danger"></p>
  										</div>
  										<div class="form-group">
  											<textarea class="form-control" id="message" name="message" placeholder="Sua mensagem *" required data-validation-required-message="Por favor coloque sua mensagem."></textarea>
  											<p class="help-block text-danger"></p>
  										</div>
  											<input name="submit" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" value="Enviar mensagem" />
                    </form>
                <div class="clearfix"></div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy;  2020 InfoBio Júnior. Todos os direitos reservados.</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://github.com/projetosinfobio" target="_blank">
                  <i class="fa fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/InfoBioJr/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/infobio-jr-813035177/" target="_blank">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/infobiojr/" target="_blank">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Alto contraste -->
    <script src="js/altocontraste.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
        
    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
        
    </body>
</html>
