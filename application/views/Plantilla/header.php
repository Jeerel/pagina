<!--
Universidad Nacional Autonoma de Mexico
Facultad de Ingenieria 
Hecho por:
Herrejon Alarcon Jeerel Zalatiel
Asesorado:
Chavez Rodriguez Norma Elva
2017
-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">

	<title><?php echo $titulo; ?>|Computación FI </title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url().'img/ic9.ico';?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/bootstrap.min.css';?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style.css';?>">
  
</head>

<body>

  

  <header>
    

    <div>
    <!--Navbar-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container clear-fix">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fi">
  				  <span class="sr-only">Desplegar / Ocultar Menu</span>
          	<span class="icon-bar"></span>
          	<span class="icon-bar"></span>
          	<span class="icon-bar"></span>
        	</button>
          <a class="navbar-brand" href="http://localhost/servicio/bienvenidos">Facultad de Ingeniería</a>
        </div>

  			  <!--Inicio de menu-->

  		  <div class="collapse navbar-collapse" id="navegacion-fi">
          <ul class="nav navbar-nav">
            <li><a href="http://localhost/servicio/bienvenidos/Profesores">Profesores</a></li>
            <li><a href="http://localhost/servicio/bienvenidos/Areas">Areas</a></li>
            <li><a href="http://localhost/servicio/bienvenidos/Labs">Laboratorios</a></li>
            <li><a href="http://localhost/servicio/bienvenidos/Proyectos">Proyectos</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
          </ul>   
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    </div>
  </header>

  <section class="jumbotron">
    <div class="container clear-fix">
      <div class="row">

        <div class="hidden-xs col-sm-12 col-md-2 col-lg-3 text-left">
          <a href="https://www.unam.mx/"><img id="logo2" src="<?php echo base_url().'img/unam3.png';?>"></a> 
        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-5 text-left">
          <a href="http://www.ingenieria.unam.mx/"><img id="logo1" src="<?php echo base_url().'img/años.png';?>"></a>
        </div> 

        <div class="hidden-xs hidden-sm hidden-md col-lg-4 text-right">
          <a href="http://www.fi-b.unam.mx/"><img id="logo3" src="<?php echo base_url().'img/die.png';?>"></a>
        </div> <!--fin del logo del footer-->

        <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
          <a href="http://computacion.fi-b.unam.mx/"><img id="logo4" src="<?php echo base_url().'img/ic2.png';?>"></a>
        </div>

      </div>
    </div>
  </section>
  