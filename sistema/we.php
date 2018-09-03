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
              A InfoBio Jr. é a primeira Empresa Júnior de Informática Biomédica no Brasil, constituindo em uma associação civil, sem fins lucrativos. Foi criada em maio de 2006 pelos alunos de Informática Biomédica da Universidade de São Paulo de Ribeirão Preto (mais informações sobre o curso).

              Nossa Empresa Júnior proporciona aos seus membros efetivos condições para aplicações práticas dos conhecimentos obtidos durante a graduação,atuando em projetos de diversas áreas, prezando pela alta qualidade, inovação e custo abaixo do mercado.
            </div>

          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <img class="" src="img/about/icone-missao-1.png" alt="" style="width:250px;height:250px;">
              <p class="text-muted">Desenvolver sistemas computacionais na área da saúde para clientes interessados em inovação e qualidade, proporcionando aos nossos membros uma inserção no mercado de trabalho ainda na graduação.</p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/about/icone-visao-1.png" alt="" style="width:250px;height:250px;">
              <p class="text-muted">Consolidar-se como empresa na área de informática biomédica, capacitando os alunos para atuarem no mercado.</p>
            </div>
            <div class="col-md-4">
              <img class="" src="img/about/icone-valores-1.png" alt="" style="width:250px;height:250px;">
              <p class="text-muted">Trabalho em equipe, Comprometimento, Iniciativa, Qualidade e Inovação.</p>
            </div>
          </div>
        </div>
    </section>