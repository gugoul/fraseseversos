<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Frases e versos para melhorar o seu dia">
    <meta name="author" content="Robert de Assis">
	<meta name="keywords" content="frase, frases, verso, versos, diarios, frases do dia, versiculo do dia, frases e versos ">

    <title>{{$page_title}}</title>
	<meta charset="utf-8">

	  <!-- Favicons -->
	<link href="<?=base_url()?>assets/_images/icon.png" rel="icon">
	<link href="<?=base_url()?>assets/_images/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="<?=base_url()?>assets/_css/font-awesome.min.css" />
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/_css/one-page-wonder.min.css" rel="stylesheet">
	
	    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/_js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/_js/bootstrap.bundle.min.js"></script>
	
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url()?>">Aldeia da Palavra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav ml-auto">       
			  <!--<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categorias<b class="caret"></b></a>
				<!-- Dropdown Menu -->
				<!--<ul class="dropdown-menu navbar-dark navbar-custom">
				  <li class="dropdown-header">Flexor Version Pages</li>
				  <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
				  <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
				  <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>

				  <li class="nav-link dropdown-footer">Dropdown footer</li>
				</ul>
			  </li>-->
				 
				<li class="nav-item">
				  <a class="nav-link" href="#contact">Contato</a>
				</li>			 
				<!--<li class="nav-item">
				  <a class="nav-link" href="<?=base_url()?>register">login</a>
				</li>-->
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h3 class="masthead-subheading mb-0">As palavras certas podem mudar o seu dia!</h3>
         
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>
	@include(content)
	<!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Robert Carneiro de Assis 2018 	
			<a href="https://www.facebook.com/robertcdeassis"><i class="fa fa-facebook-square"></i></a> 
			<a href="https://github.com/gugoul"><i class="fa fa-github"></i></a>
			<a href="https://www.linkedin.com/in/robert-carneiro-de-assis-49b172b9/"><i class="fa fa-linkedin-square"></i></a>
		</p>
      </div>
      <!-- /.container -->
    </footer>



  </body>

</html>
