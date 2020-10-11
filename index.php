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
    
    <!--Cards - afeta servicos-->
    <link href="css/cards.css" rel="stylesheet">
      
    <!--Hover - afeta quem somos nós-->
    <link href="css/hover.css" rel="stylesheet">
      
    <!--Som - Cria botao do som
    <link href="css/styleSom.css" rel="stylesheet">
    
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
  <body id="page-top" onload="textos();">
      
      
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
              <!--<li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Projetos</a>
              </li>-->
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="quemsomos.php"><strong>Quem Somos</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#porque"><strong>Empresa Júnior</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services"><strong>Serviços</strong></a>
              </li>
              <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Serviços</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">E-Saúde</a>
                  <a class="dropdown-item" href="#">Bioinformática</a>
                  <a class="dropdown-item" href="#">Imagens médicas</a>
                  <a class="dropdown-item" href="#">Bioengenharia</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cursos</a>
                </div>
              </li>-->
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#procelSeletivo"><strong>Processo Seletivo</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contato"><strong>Contato</strong></a>
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
            <p class="typewrite branco" data-period="2000" data-type='["Pioneira da área no Brasil",  "Qualidade e excelência sempre", "Inovando na área da saúde", "Gerando impacto na sociedade"]'>
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

    <section class="py-4" id="porque">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h3 class="section-heading text-uppercase text-center">Porque contratar a Infobio Jr?</h3>
                  <br>
              </div>
            </div>
          <div class="row">
            <div class="col-md-4 padding text-center">    
                <img class="" src="img/perda.png" alt="" height="196" width="196">
              <h3 class="service-heading" style="color:#769e9c">Baixo custo</h3>
              <p class="text-muted" style="text-align:center"> 
                Somos uma organização sem fins lucrativos, nosso objetivo é garantir uma visão prática do que aprendemos em aula, por conta disso podemos oferecer preços com custo abaixo do mercado de trabalho.
                   </p>
            </div>
            <div class="col-md-4 padding text-center"> 
            <img class="" src="img/pensando.png" alt="" height="196" width="196">
              <h3 class="service-heading" style="color:#769e9c">Padrão USP</h3>
              <p class="text-muted" style="text-align:center"> 
                Estamos localizados em uma das melhores faculdades da América Latina e por conta disso temos os melhores doutores da academia para nos auxiliar.
                </p>
            </div>
            <div class="col-md-4 padding text-center"> 
            <img class="" src="img/cliente.png" alt="" height="196" width="196">
              <h3 class="service-heading" style="color:#769e9c">Foco no cliente</h3>
              <p class="text-muted" style="text-align:center"> 
                Como nosso enfoque é o aprendizado, buscamos trazer soluções personalizadas e inovadoras que solucionam o seu problema! 
                </p>
            </div>
          </div>
    </div>
    </section>
      
      <!-- APOIO A SEMANA DA IBM -->
    <section class="py-4" id="apoio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="section-heading text-uppercase"> Nós apoiamos a semana brasileira de informática biomédica </h3>
              </div>
          </div>
          <div class="row text-center">
              <div class="col-md-3">
              <div class="team-member">
                  <img class="mx-auto rounded-circle img-fluid" src="img/logo-fundo-branco-semanaibm2019.png" alt="Semana Brasileira da Informática Biomédica">
              </div>
              </div>
              <div class="col-md-9">
                    <br>
                    <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp; A Semana Brasileira de Informática Biomédica reúne acadêmicos de diversos cursos superiores: Informática Biomédica, Física Médica, Ciências da Computação, Engenharia da Computação, Engenharia Biomédica, Medicina, Biologia, etc. O evento é realizado anualmente e tem cunho acadêmico, empresarial e cultural. </p>

                    <p align="center">
                    <a href="http://www.semanaibm.infobiojr.com.br/">
                      <button class="btn btn-primary btn-xl text-uppercase">  Saiba mais... </button>
                    </a> 
                  </p>
              </div>
            </div>

      </div>
    </section>
    <!-- Servicos -->
    <section class="py-4 bg-light" id="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Serviços</h2>
              <h6 class="section-heading">Nós fornecemos serviços voltados para as 4 áreas da informática biomédica além de cursos únicos<h1>
          </div>
          <div class="row text-center">
            <div class="col-md-4 padding">    
                <div class="card carta gestao text-center">
                  <div class="card-body">
                    <h5 class="card-title">E-Saúde</h5>
                    <img src="img/services/gestao-em-saude.png" alt="" height="196" width="196" style="z-index:100">
                    <p class="card-text">Voltada para o uso das tecnologias da informação e comunicação no contexto de saúde para o melhor desenvolvimento do atendimento do paciente.</p>
                    <a href="esaude.php" class="btn btn-primary final">Ver serviços</a>
                  </div>
                </div>
                
            </div>
            <div class="col-md-4 padding">
                <div class="card carta imagens text-center">
                  <div class="card-body">
                    <h6 class="card-title">Imagens e sinais médicos</h6>
                    <img class="" src="img/services/processamento-de-imagens.png" alt="" height="196" width="196">
                    <p class="card-text"> Voltada para a aplicação de processos para a aquisição, manipulação, análise e distribuição de imagens médicas e dados correlacionados. </p>
                    <a href="imagem_med.php" class="btn btn-primary final">Ver serviços</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4 padding">
            <div class="card carta bioinformatica text-center">
                  <div class="card-body">
                    <h6 class="card-title">Bioinformática e Medicina genômica</h6>
                    <img class="" src="img/services/bioinformatica.png" alt="" height="196" width="196">
                    <p class="card-text">Modelagem e simulação de problemas biológicos envolvendo grande volume de dados, análise estrutural, montagem de genomas e análise de expressão gênica. </p>
                    <a href="bioinformatica.php" class="btn btn-primary final">Ver serviços</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-2 padding">
            </div>
            <div class="col-md-4 padding">      
            <div class="card carta bioeng text-center">
                  <div class="card-body">
                    <h5 class="card-title">Bioengenharia</h5>
                    <img class="" src="img/services/bioengenharia.png" alt="" height="196" width="196">
                    <p class="card-text">É voltada para o desenvolvimento de aplicativos, soluções e sistemas aplicados ao corpo humano utilizando técnicas e equipamentos como prototipagem, fotoelasticidade e etc. </p>
                    <a href="bioengenharia.php" class="btn btn-primary final">Ver serviços</a>
                  </div>
                </div>
            </div>
              <div class="col-md-4 padding">
              <div class="card carta placeholder text-center">
                  <div class="card-body">
                    <h5 class="card-title">Cursos</h5>
                    <img class="" src="img/services/cursos.png" alt="" height="196" width="196">
                    <p class="card-text">Oferecimento de cursos com parceria de grandes empresas, sobre os mais diversos assuntos de tecnologia, empreendedorismo e desenvolvimento pessoal. </p>
                    <!--<a href="#" class="btn btn-primary final">Saiba mais</a>-->
                  </div>
                </div>
            </div>
            <div class="col-md-2 padding">
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

    <div class="contraste libras" data-toggle="tooltip" title="Mudar contraste" data-placement="left">
        <div vw-access-button class="contrasteButton">
            <img class="access-button" src="img/logos/68011.png" style="width:27%; float:right;" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">
        </div>
    </div>

<!-- Icone do Som

    <div class="som libras" data-toggle="tooltip" title="Ativar leitura" data-placement="left">
        <div vw-access-button class="contrasteButton">
            <img class="access-button" src="img/logos/play-button.png" style="width:27%; float:right;" id="som" accesskey="4" onclick="window.onClickPlay()">
        </div>
    </div>

-->



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
            <p class="text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;Tive a gratificante oportunidade de, durante 3 anos da minha vida acadêmica, ser membro da InfoBio Jr. Ao exercer os cargos de Estagiário, Diretor de Projetos e Presidente tive grande desenvolvimento de meu lado empreendedor, recomendo a todos que aproveitem esta oportunidade e que façam parte da InfoBio. Esta experiência foi de grande importância para minha formação! </p>
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
              <div class="info"><p>infobiojr@fmrp.usp.br</p></div>
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
                <form  id="form1" name="form1" method="post" action="mail/contact_me.php">
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
        </div>
    </section>

    <!-- Footer -->
    <footer id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy;  2020 InfoBio Júnior. <br>Todos os direitos reservados.</span>
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
                <span>Feito com amor pela InfobioJr</span>
              <!--<li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>-->
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
    <!--<script src="js/jqBootstrapValidation.js"></script>
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
