<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
			<?php
				$usuario=$_GET[var1];
				echo "<span class='right'>Hola, <font color='red'>".$usuario."</font></span>";
			?>
      		<span class="right"><a href="Layout.html">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
            <?php
			$usuario=$_GET[var1];
			echo "<span><a href='itzAlumno.php?var1=".$usuario."'>Inicio</a></spam>"; 
			echo "<span><a href='GestionPreguntas.php?var1=".$usuario."'> Insertar Pregunta</a></spam>";
		        #echo "<span><a href='VerPreguntasUsuarios.php?var1=".$usuario."'> Preguntas</a></spam>";
	        ?>
	</nav>
    <section class="main" id="s1">
    
	<div>
	Aqui se visualizan las preguntas y los creditos ...
	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>