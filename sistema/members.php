<!-- Membros -->
  <script> 
  // Script para a automatização na inserção, alteração, consulta e remoção de membros.
  var nlinhas = 18; // Quando inserir ou remover membro, tem que atualizar esse número.
  var ncolunas = 6;

  // Declarando uma matriz.
  var membros = new Array(nlinhas)
    for (i=0; i<nlinhas; i++)
        membros[i]=new Array(ncolunas);

    // 1° Linha: nome e cargo
    // 2° Linha: links das redes sociais
    // 3° Linha: endereço da imagem

    // 1° Membro
    membros[0][0] = "Anderson Apunike"; membros[0][1] = "Conselheiro"; 
    membros[0][2] = "teste"; membros[0][3] = "testeee"; membros[0][4] = "tessste";
    membros[0][5] = "../img/team/anderson_apunike.jpg"; // Endereco da imagem.
    
   // 2° Membro
    membros[1][0] = "Bianca"; membros[1][1] = "Conselheira";
    membros[1][2] = "#"; membros[1][3] = "#"; membros[1][4] = "#";
    membros[1][5] = "img/team/bianca_carvalho.jpg"; 

    // 3° Membro
    membros[2][0] = "Camila Gaio"; membros[2][1] = "Marketing";
    membros[2][2] = "#"; membros[2][3] = "#"; membros[2][4] = "#";
    membros[2][5] = "img/team/camila_gaio.jpg"; 
 
    // 4° Membro
    membros[3][0] = "Douglas Feltrim"; membros[3][1] = "Diretor Marketing";
    membros[3][2] = "#"; membros[3][3] = "#"; membros[3][4] = "#"; 
    membros[3][5] = "img/team/douglas_feltrim.jpg"; 

    // 5° Membro
    membros[4][0] = "Gabriel Rubio"; membros[4][1] = "Diretor Qualidade";
    membros[4][2] = "#"; membros[4][3] = "#"; membros[4][4] = "#";
    membros[4][5] = "img/team/gabriel_rubio.jpg"; 
    
   // 6° Membro
    membros[5][0] = "Guilherme Castro"; membros[5][1] = "Projetos";
    membros[5][2] = "#"; membros[5][3] = "#"; membros[5][4] = "#";
    membros[5][5] = "img/team/guilherme_castro.jpg"; 

    // 7° Membro
    membros[6][0] = "Karen Kanashiro"; membros[6][1] = "Diretora Financeiro";
    membros[6][2] = "#"; membros[6][3] = "#"; membros[6][4] = "#";
    membros[6][5] = "img/team/karen_kanashiro.jpg"; 
 
    // 8° Membro
    membros[7][0] = "Larissa Asito"; membros[7][1] = "Qualidade";
    membros[7][2] = "#"; membros[7][3] = "#"; membros[7][4] = "#";
    membros[7][5] = "img/team/larissa_asito.jpg"; 

    // 9° Membro
    membros[8][0] = "Nathan Zanuto"; membros[8][1] = "Recursos Humanos";
    membros[8][2] = "#"; membros[8][3] = "#"; membros[8][4] = "#";
    membros[8][5] = "img/team/nathan_zanuto.jpg"; 

 	// 10° Membro
    membros[9][0] = "nome"; membros[9][1] = "cargo";
    membros[9][2] = "#"; membros[9][3] = "#"; membros[9][4] = "#";
    membros[9][5] = "img/team/nathan_zanuto.jpg";

    // 11° Membro
    membros[10][0] = "nome"; membros[10][1] = "cargo";
    membros[10][2] = "#"; membros[10][3] = "#"; membros[10][4] = "#";
    membros[10][5] = "img/team/nathan_zanuto.jpg";

    // 12° Membro
    membros[11][0] = "nome"; membros[11][1] = "cargo";
    membros[11][2] = "#"; membros[11][3] = "#"; membros[11][4] = "#";
    membros[11][5] = "img/team/nathan_zanuto.jpg";

    // 13° Membro
    membros[12][0] = "nome"; membros[12][1] = "cargo";
    membros[12][2] = "#"; membros[12][3] = "#"; membros[12][4] = "#";
    membros[12][5] = "img/team/nathan_zanuto.jpg";

    // 14° Membro
    membros[13][0] = "nome"; membros[13][1] = "cargo";
    membros[13][2] = "#"; membros[13][3] = "#"; membros[13][4] = "#";
    membros[13][5] = "img/team/nathan_zanuto.jpg";

    // 15° Membro
    membros[14][0] = "nome"; membros[14][1] = "cargo";
    membros[14][2] = "#"; membros[14][3] = "#"; membros[14][4] = "#";
    membros[14][5] = "img/team/nathan_zanuto.jpg";

    // 16° Membro
    membros[15][0] = "nome"; membros[15][1] = "cargo";
    membros[15][2] = "#"; membros[15][3] = "#"; membros[15][4] = "#";
    membros[15][5] = "img/team/nathan_zanuto.jpg";

    // 17° Membro
    membros[16][0] = "nome"; membros[16][1] = "cargo";
    membros[16][2] = "#"; membros[16][3] = "#"; membros[16][4] = "#";
    membros[16][5] = "img/team/nathan_zanuto.jpg";

    // 18° Membro
    membros[17][0] = "nome"; membros[17][1] = "cargo";
    membros[17][2] = "#"; membros[17][3] = "#"; membros[17][4] = "#";
    membros[17][5] = "img/team/nathan_zanuto.jpg";



    /* 19° Membro
    membros[18][0] = "nome";
    membros[18][1] = "cargo";
    membros[18][2] = "#";
    membros[18][3] = "#";
    membros[18][4] = "#";
    membros[18][5] = "img/team/nathan_zanuto.jpg"; // Endereco da imagem.  */

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

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              <h4>
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModalMembers">
                Clique aqui para ver todos os membros. </a>
              </h4>
              <br>
            </p>
          </div>
        </div> 

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active"> <!-- Sessão1: primeira "página de membros" -->

  					<div class="row">
  						<div class="col-sm-4">
  							<div class="team-member">
  								<img class="mx-auto rounded-circle" id="endereco_imagem_membro1"  src="img/team/member.jpg" alt="" >
  								<h4> <div id="nome_membro1"> <!-- NOME DO MEMBRO 1 --> </div> </h4>
  								<p> <div id="cargo_membro1"> <!-- CARGO DO MEMBRO 1 --> </div> </p>
  								<ul class="list-inline social-buttons">
  									<li class="list-inline-item">
  										<a id="rede_social1_membro1" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro1" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro1" href="#">
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
  										<a id="rede_social1_membro2" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro2" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro2" href="#">
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
  										<a id="rede_social1_membro3" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro3" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro3" href="#">
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
  										<a id="rede_social1_membro4" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro4" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro4" href="#">
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
  										<a id="rede_social1_membro5" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro5" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro5" href="#">
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
  										<a id="rede_social1_membro6" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro6" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro6" href="#">
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
  										<a id="rede_social1_membro7" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro7" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro7" href="#">
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
  										<a id="rede_social1_membro8" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro8" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro8" href="#">
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
  										<a id="rede_social1_membro9" href="#">
  											<i class="fa fa-twitter"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social2_membro9" href="#" >
  											<i class="fa fa-facebook"></i>
  										</a>
  									</li>
  									<li class="list-inline-item">
  										<a id="rede_social3_membro9" href="#">
  											<i class="fa fa-linkedin"></i>
  										</a>
  									</li>
  								</ul>
  							</div>
  						</div>
  					</div>
          </div> <!-- fim 3° myslides -->
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


      <!-- Modal Members -->
                <div class="portfolio-modal modal fade" id="portfolioModalMembers" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" style="width:85%;margin:auto">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl"></div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="modal-body">

                                            <!-- Project Details Go Here -->
                                            <h2 class="text-uppercase">Membros</h2>
                                            <p class="item-intro text-muted">Conheça nossa equipe.</p>

                                            <!-- Linha 1 -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/anderson_apunike.jpg" alt="">
                                                        <h4>Anderson Apunike</h4>
                                                        <p class="text-muted">Lead Designer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/bianca_carvalho.jpg" alt="">
                                                        <h4>Bianca Carvalho</h4>
                                                        <p class="text-muted">Lead Marketer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/camila_gaio.jpg" alt="">
                                                        <h4>Camila Gaio</h4>
                                                        <p class="text-muted">Lead Developer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br><br>

                                            <!-- Linha 2 -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/carla_silva.jpg" alt="">
                                                        <h4>Carla Silva</h4>
                                                        <p class="text-muted">Lead Designer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/douglas_feltrim.jpg" alt="">
                                                        <h4>Douglas Feltrim</h4>
                                                        <p class="text-muted">Lead Marketer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/gabriel_rubio.jpg" alt="">
                                                        <h4>Gabriel Rubio</h4>
                                                        <p class="text-muted">Lead Developer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <br><br><br>

                                            <!-- Linha 3" -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/guilherme_castro.jpg" alt="">
                                                        <h4>Guilherme Castro</h4>
                                                        <p class="text-muted">Lead Designer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/gustavo_barbosa.jpg" alt="">
                                                        <h4>Gustavo Barbosa</h4>
                                                        <p class="text-muted">Lead Marketer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/karen_kanashiro.jpg" alt="">
                                                        <h4>Karen Kanashiro</h4>
                                                        <p class="text-muted">Lead Developer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Linha 4 -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/larissa_asito.jpg" alt="">
                                                        <h4>Larissa Asito</h4>
                                                        <p class="text-muted">Lead Designer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/nathan_zanuto.jpg" alt="">
                                                        <h4>Nathan Zanuto</h4>
                                                        <p class="text-muted">Lead Marketer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/natielle_sa.jpg" alt="">
                                                        <h4>Natielle Sa</h4>
                                                        <p class="text-muted">Lead Developer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <br><br><br>
                                            <!-- Linha 5 -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/ninna_silva.jpg" alt="">
                                                        <h4>Ninna Silva</h4>
                                                        <p class="text-muted">Lead Designer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/robson_baioco.jpg" alt="">
                                                        <h4>Robson Baioco</h4>
                                                        <p class="text-muted">Lead Marketer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/thais_jesus.jpg" alt="">
                                                        <h4>Thais Jesus</h4>
                                                        <p class="text-muted">Lead Developer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <br><br><br>

                                            <!-- Linha 6 -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/tiago_kapp.jpg" alt="">
                                                        <h4>Tiago Kapp</h4>
                                                        <p class="text-muted">Lead Designer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/veronica_silva.jpg" alt="">
                                                        <h4>Veronica Silva</h4>
                                                        <p class="text-muted">Lead Marketer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="team-member">
                                                        <img class="mx-auto rounded-circle" src="img/team/.jpg" alt="">
                                                        <h4>Pessoa extra</h4>
                                                        <p class="text-muted">Lead Developer</p>
                                                        <ul class="list-inline social-buttons">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <br><br><br>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times"></i>
                                                Fechar membros</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
