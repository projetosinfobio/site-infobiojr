<!DOCTYPE html>
<!-- B2: Script para menu -->

















<!-- Parabéns time Victor! Agora acesse esse link para a última etapa www.infobiojr.com.br/segredos/audio_comum2.wav -->


































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

    <!--Bioinfo-->
    <link href="css/bioinfo.css" rel="stylesheet">
    
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
  <body id="page-top">
      
      
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="index.php#services">InfoBio Júnior</a>
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
                <a class="nav-link js-scroll-trigger" href="index.php"><strong>Empresa Júnior</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services"><strong>Serviços</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php"><strong>Processo Seletivo</strong></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contato"><strong>Contato</strong></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <!-- Header -->
    <header class="bioinfo">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">
            Bioinformática e Medicina Genômica
          </div>
          <div class="intro-heading"><h1>
          </h1>
          </div>
          <a href="#services" class="btn btn-circle js-scroll-trigger btn-down">
                <i class="fa fa-angle-double-down animated"></i>
          </a>
        </div>
      </div>
    </header>
      
    <!-- Servicos -->
    <section class="py-4 bg-light" id="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Serviços</h2>
          </div>
          <div class="row text-center">
            <div class="col-md-4 padding">    
                <div class="card carta bioinformatica text-center">
                  <div class="card-body">
                    <h5 class="card-title">Análise metagenômica</h5>
                    <p class="card-text">O sequenciamento metagenômico se concentra na análise da diversidade da comunidade microbiana, composição dos genes, bem como nas vias metabólicas associadas ao ambiente específico.</p>
                    <!--<a href="#" class="btn btn-primary final">Saiba mais</a>-->
                  </div>
                </div>
                
            </div>
            <div class="col-md-4 padding">
                <div class="card carta bioinformatica text-center">
                  <div class="card-body">
                    <h5 class="card-title">Anotação e Previsão genética</h5>
                    <p class="card-text">O objetivo da anotação é identificar os principais recursos do genoma, como os genes codificadores de proteinas e seus produtos após o genoma ter sido sequenciado.</p>
                    <!--<a href="#" class="btn btn-primary final">Saiba mais</a>-->
                  </div>
                </div>
            </div>
            <div class="col-md-4 padding">
            <div class="card carta bioinformatica text-center">
                  <div class="card-body">
                    <h5 class="card-title">Análise de exoma</h5>
                    <p class="card-text">Como forma de reduzir os custos associados com o re-sequenciamento de genoma, fazemos uma análise direcionada principalmente na detecção de SNPs e indels pequenos.</p>
                    <!--<a href="#" class="btn btn-primary final">Saiba mais</a>-->
                  </div>
                </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-6 padding">      
            <div class="card carta bioinformatica text-center">
                  <div class="card-body">
                    <h5 class="card-title">Análise de dados do sequenciamento De Novo</h5>
                    <p class="card-text">Usada para sequenciar genomas não caracterizados caso não tenha sequências ou genomas de referência disponiveis. Sendo necessário várias rodadas de acabamento para se obter uma sequência completa do genoma.</p>
                    <!--<a href="#" class="btn btn-primary final">Saiba mais</a>-->
                  </div>
                </div>
            </div>
            <div class="col-md-6 padding">
                <div class="card carta bioinformatica text-center">
                  <div class="card-body">
                    <h5 class="card-title">Análise de dados de re-sequenciamento de genoma</h5>
                    <p class="card-text">Utilizar a sequência de referência de um organismo para fazer um sequenciamento comparativo para caracterizar variações genéticas em indivíduos da mesma espécie ou entre espécies relacionadas.</p>
                    <!--<a href="#" class="btn btn-primary final">Saiba mais</a>-->
                  </div>
                </div>
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

    <!-- Membros -->
  
  <!-- Passos para alterar membros, importante atualizar a cada processo seletivo
  1- mudar o valor da variável nlinhas, para aumentar/diminuir o tamanho da matriz que guarda os membros
  2- inserir/apagar os dados dos membros na matriz
  3- acrescentar/retirar a bolinha de baixo das fotos
  4- acrescentar/retirar porção do html, com divs e lembrar de mudar os nomes de IDs!!
  -->

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
        
    <!-- Som 
    <script src="js/scriptSom.js"></script>

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
