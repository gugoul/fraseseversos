<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$page_title}}</title>
	<meta charset="utf-8">

	  <!-- Favicons -->
	<link href="<?=base_url()?>assets/_images/icon.png" rel="icon">
	<link href="<?=base_url()?>assets/_images/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/_css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/_css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>assets/_css/font-awesome.min.css" />
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/_css/one-page-wonder.min.css" rel="stylesheet">
	
	 <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/_js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/_js/bootstrap.bundle.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url()?>painel">Aldeia da Palavra-Administração</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div >
          <ul class="nav navbar-nav ml-auto">       
			  <li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorias</a>
				<!-- Dropdown Menu -->
				<ul class="dropdown-menu navbar-dark navbar-custom">
				  <li class="nav-item"><a class="nav-link" href="<?=base_url()?>sistema/frases">Frases</a></li>
				  <li class="nav-item"><a class="nav-link" href="<?=base_url()?>sistema/versos">Versos</a></li>
				  <li class="nav-item"><a class="nav-link" href="#"></a></li>
			  
				</ul>
			  </li>
				 
				<li class="nav-item">
				  <a class="nav-link" href="#">Contato</a>
				</li>			 
				<li class="nav-item">
				  <a class="nav-link" href="<?=base_url()?>logout">Sair</a>
				</li>
          </ul>
        </div>
      </div>
    </nav>

		@include($pagina)
	<!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Robert Carneiro de Assis 2018</p>
      </div>
      <!-- /.container -->
    </footer>

   

  </body>

</html>
