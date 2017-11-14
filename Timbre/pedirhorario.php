
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hexa a portfolio bootstrap Website Template | Home :: w3layouts</title>
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

<div class="container">
	<div class="row header text-center specials">
		<div class="h_logo">
			<a href="index.html"><img src="images/logo.png" alt="" class="responsive"/></a>
		</div>
		<nav class="top-nav">
			<ul class="top-nav nav_list">
				<li><a href="pedirdatos.html"><font color="black">Reg. Horario</font></a>
				<li class="page-scroll"><a href="#about"><font color="black">About</font></a></li>
				<li class="logo page-scroll"><a title="hexa" href="index.html"><img src="images/logo.png" alt="" class="responsive"/></a></li>
			    <li class="page-scroll"><a href="pedirhorario.php"><font color="black">Programar Horario</font></a></li>
				<li class="page-scroll"><a href="#contact"><font color="black">get in touch</font></a></li>
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
		</nav>
		<div class="clearfix"></div>
	</div>
</div>
</div>

<div class="main_bg"  id="about"><!-- start about us -->
<div class="container">
	<div class="row about">
		<div class="col-md-3 about_img">
			<img src="images/user.png" alt="" class="responsive"/>
		</div>
		<div class="col-md-8 contact_left">
			<form  method="POST" action="programarhorario.php">
				<h2> Ingrese sus datos</h2>
				<input type="number" placeholder="&#128272; ID " name="identhhorario">	
				<input type="number" placeholder="&#128272; ID Horario " name = "idregistrar">
				<input type="time" placeholder="&#128272; Hora Inicio " name="horainiciar" min="5:00:00" max="20:00:00">
				<input type="time" placeholder="&#128272; Hora Fin " name="horafinal" min="5:00:00" max="20:00:00" step="1">
				<input type="submit" value="Guardar">
        </form>
		</div>
	</div>
</div>
</div>
<div class="footer_bg" id="contact"><!-- start footer -->
<div class="container">
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
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