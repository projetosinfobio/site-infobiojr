<main class="container" id="main-container">
		 <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">InfoBio Júnior</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#service">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Projetos</a>
              </li>
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


	<section class="container" id="services">
		<?php
			include 'service.php';
		?>
	</section>

  <div class="container" id="project">
    <?php
      include 'project.php';
    ?>
  </div>

  <div class="container" id="we">
    <?php
      include 'we.php';
    ?>
  </div>

  <div class="container" id="members">
    <?php
      include 'members.php';
    ?>
  </div>

  <div class="container" id="sel_process">
    <?php
      include 'sel_process.php';
    ?>
  </div>

  <div class="container" id="location">
    <?php
      include 'location.php';
    ?>
  </div>
</main>

