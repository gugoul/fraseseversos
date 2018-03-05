
	<section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?=base_url()?>assets/_images/01.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="h4">{{$s1}}</h2>
              <p>{{$frase}}</p>
			  <p><i><small>{{$autorf}}</small></i></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="<?=base_url()?>assets/_images/02.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="h4">{{$s2}}</h2>
              <p><?=$verso?></p>
			  <p><i><small>{{$autorv}}</small></i></p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<section id="contact">
		<!--<div class="container">-->
        <div class="row align-items-center">
		  <div class="col-lg-3 clearfix"></div>
          <div class="col-lg-6">
			<div class="p-5">
				<div>{{$error}}</div>
				<h4 class="h4 text-center">Contato<h4>
				<p class="lead">Para sugestões, recomendações e doações envie uma mensagem!</p>
				<form id="form" method="POST" action="<?=base_url('email')?>">
					<label class="m-0 small"><small>Nome</small></label>
					<input type="text" name="nome" class="form-control" placeholder="Nome">
					<label class="m-0 small"><small>E-mail</small></label>
					<input type="text" name="email" id="email" class="form-control" placeholder="E-mail">					
					<label class="m-0 small"><small>Assunto</small></label>
					<input type="text" name="assunto" class="form-control" placeholder="Assunto">					
					<label class="m-0 small"><small>Mensagem</small></label>
					<textarea name="mensagem" class="form-control" placeholder="Mensagem"></textarea><br>
					<input type="submit" value="Enviar" class="btn btn-success"/>
				<form>
			</div>
			<div id="response"></div>
          </div>
		 </div>
		<!--</div>	-->
	</section>

	<script  src="<?=base_url()?>assets/_js/lib.js"></script>