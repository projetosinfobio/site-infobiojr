   <!-- LOCALIZACAO E CONTATO -->
    <section class="py-4" id="contato">
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
							<div class="info"><p> (16) 99375-3695</p></div>
						</div>
						
						<div class="row">
							<div class="icon"><i class="fa fa-envelope"></i></div> &nbsp; &nbsp;
							<div class="info"><p>contato@infobiojr.com.br</p></div>
						</div>
						
						<div class="row">
							<div class="icon"> <i class="fa fa-facebook"></i> </div> &nbsp; &nbsp;
							<div class="info"> <p> <a href="https://www.facebook.com/InfoBioJr/">www.facebook.com/InfoBioJr/</a> </p> </div>
						</div>
					</div>
                  </div>
                </div>

                <!-- Contato -->
                <div class="col-md-6">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contato</h2>
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="nome" type="text" placeholder="Seu nome *" required data-validation-required-message="Por favor coloque seu nome.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Seu Email *" required data-validation-required-message="Por favor coloque seu email.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="assunto" type="text" placeholder="Assunto *" required data-validation-required-message="Por favor coloque o Assunto.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Sua mensagem *" required data-validation-required-message="Por favor coloque sua mensagem."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div id="success"></div>
                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensagem</button>
                  </div>
                </div>
                <div class="clearfix"></div>

            </form>
          </div>
        </div>
      </div>
    </section>
