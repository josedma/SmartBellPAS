<!DOCTYPE HTML>
<html>
<head>
<title>SmartBell:Registro</title>
<?php 
		include_once "conexion.php"
?>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body>
<div class="header_bg" id="home"><!-- start header -->

<div class="container">
	<div class="row header text-center specials">
		<div class="h_logo">
			<a href="index.html"><img src="images/logo.png" alt="" class="responsive"/></a>
		</div>
		<nav class="top-nav">
			<ul class="top-nav nav_list">
				<li class="page-scroll"><a href="inicio.html"><font>INICIO</font></a></li>
				<li class="page-scroll"><a href="pedirhorario.php"><font>CREAR HORARIO</font></a></li>	
				<li class="page-scroll"><a href="mostrarHorario.php"><font>MOSTRAR HORARIOS</font></a></li>
				<li class="page-scroll"><a href="editarHorario.php"><font>EDITAR HORARIOS</font></a></li>
				<li class="page-scroll"><a href="eliminarHorario.php"><font>ELIMINAR HORARIOS</font></a></li>
				<li class="page-scroll"><a href="#nosotros"><font>NOSOTROS</font></a></li>
				<li class="page-scroll"><a href="index.html"><font>Cerrar Sesion</font></a></li>
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
		</nav>
		<div class="clearfix"></div>
	</div>
</div>
</div>

<div class="container">
	<div class="row about">
		<div class="col-md-3 about_img">
			<img src="images/user.png" alt="" class="responsive"/>
		</div>
		<div class="col-md-8 contact_left">
			<form  method="POST" action="programarhorario.php">
				<h2> CREAR HORARIO </h2>
				<input type="number" placeholder="&#128272; ID " name="idHorario">
				<h2> DESCRIPCION </h2>
				<input type="text" placeholder="&#128272; ID " name="descripcion">
				<h3><font color="black"> 1a HORA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 6:00:00 " name = "hora1" min="5:00:00" max="20:00:00">
				<h3><font color="black"> 2a HORA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 7:00:00 " name = "hora2" min="5:00:00" max="20:00:00">
				<h3><font color="black"> 3a HORA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 8:00:00 " name = "hora3" min="5:00:00" max="20:00:00">
				<h3><font color="black"> DESCANSO </font></h3>
				<input type="time" placeholder="&#128272; Ej: 9:00:00 " name = "descanso" min="5:00:00" max="20:00:00">
				<h3><font color="black"> 4a HORA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 9:30:00 " name = "hora4" min="5:00:00" max="20:00:00">
				<h3><font color="black"> 5a HORA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 10:30:00 " name = "hora5" min="5:00:00" max="20:00:00">
				<h3><font color="black"> 6a HORA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 11:30:00 " name = "hora6" min="5:00:00" max="20:00:00">
				<h3><font color="black"> SALIDA </font></h3>
				<input type="time" placeholder="&#128272; Ej: 12:30:00 " name = "salida" min="5:00:00" max="20:00:00">
				
				<input type="submit" value="Guardar">
        </form>
		</div>
	</div>
</div>

<div class="footer_bg" id="nosotros"><!-- start footer -->
<div class="container">
	<div class="col-md-4  contact_right">
		<h1><a href="xyz"><font color=white>SmartBell</font></a></h1>
			<p>"Tu Nueva Herramienta":</h4>
			<p><span>Acerca de: </span> SmartBell es un proyecto el cual busca facilitar la mecanica del tradicional timbre estudiantil realizado en las escuelas de la ciudad de monteria, ha sido desarrolada por un grupo de estudiantes de Ingenieria De Sistemas, conformado por: Eva Padilla, Saul Machado, Jesus Nieves, José Murillo. Los cuales desidieron icnursionar en este campo y desarrollar este aplicativo para la solucion de algunos  problemas que se venian presentando en las instituciones. </p>
			<ul class="list-unstyled address">
				<li><i class="fa fa-map-marker"></i><span>Universidad de Cordoba - Campus Monteria</span></li>
				<!--<li><i class="fa fa-phone"></i><span>(00) 222 666 444</span></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></li>-->
			</ul>
		</div>
</div></div>
<div class="footer1_bg"><!-- start footer1 -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; Todos los derechos reservados | Template by&nbsp;<a href="http://w3layouts.com/"> Unicordoba</a></span></p>
				<a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<script type="text/javascript">
				$(function() {
				  $('a[href*=#]:not([href=#])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
				});
		</script>
		<!---- start-smoth-scrolling---->		
	</div>
</div>
</body>
</html>