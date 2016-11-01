 <?php
		#Conexion con la BD
		$link = mysqli_connect("mysql.hostinger.es", "u923585965_root", "Informatica", "u923585965_quiz");
		if(!$link){
		echo 'Fallo al concectar a MySQL:' . $link->connect_error; 
			mysqli_close($link);
		}
	
        $email=$_GET[var1];
		
		#Consulta de SQL: Obtener el numero de preguntas de la BD.
		$result1 = mysqli_query($link, "select count(*) as total from pregunta" );
                $preguntas=mysqli_fetch_array($result1); 
   
        #Consulta de SQL: Obtener el numero de preguntas de la BD.
		$result2= mysqli_query($link, "select count(*) as mitotal from pregunta where CORREO='$email'");       
		$preguntascorreo =mysqli_fetch_array($result2);
		
		echo '<b>Mis preguntas/Todas las preguntas: </b>' .  $preguntascorreo['mitotal'] . ' / ' .$preguntas['total'];
		$result1->close();
                $result2->close();
		
		#Cierre de la conexion con la BD.
		mysqli_close($link);

    ?>
