<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contacto</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="stylesheet" type="text/css" href="contacto.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 
        <link rel="shortcut icon" type="image/png" href="imagenes/favico.png"/>
    </head>
    <body>

        <!-- CABECERA-->
        <div class="cabecera">

        <div class="logo">
            <a href="index.html"><h1>Macarena Gimenez</h1></a>
        </div>
        <div class="menu">
            <ul class="botonera">
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="galeria.html">Galería</a></li>
                <li><a href="sobremi.html">Sobre mi</a></li>
                <li><a href="index.html">Home</a></li>
            
            </ul>

        </div>

<div class="contacto">
        <div class="escribime">

            <h2>CONTACTO:</h2>
            
<?php
		// Consigo los datos del form
		$nombre = $_POST['nombre'];
		$mail  = $_POST['mail'];
		$texto = $_POST['texto'];
		
		// echo $nombre;
		
		// Uno o varios separados por ,
		$destinatario = "makygimenez@gmail.com";
		
		$asunto = "Formulario desde web";
		
		// Junto todos los datos solicitados en el form en 1 sola variable
		$cuerpo = "$nombre te envío el formulario, contactalo a su mail $mail Su mensaje es: $texto ";
		
		$cabeceras = "From: Nombre <diseño@makygimenez.com>";
		
		mail($destinatario,
			 $asunto,
			 $cuerpo,
			 $cabeceras);
			
		echo "Mensaje enviado: $cuerpo";
		
		
	?>
	
	










            
        </div>

        <div class="social">
            <h3>Redes sociales</h3>
            <a href="https://www.behance.net/makygimenez"><img src="imagenes/behance-negro.png" alt="behance"></a>
            <a href="https://www.facebook.com/macarena.gimenez.90"><img src="imagenes/facebook-negro.png" alt="facebook"></a>
            <a href="https://www.linkedin.com/in/mmgimenez/"><img src="imagenes/linkedin-negro.png" alt="linkedin"></a>



        </div>

    </div>

        <!--FOOTER-->

        <div class="pie">
        <div class="redes">
            <a href="https://www.behance.net/makygimenez"><img src="imagenes/behance-pie.png" alt="behance"></a>
            <a href="https://www.facebook.com/macarena.gimenez.90"><img src="imagenes/facebook-pie.png" alt="facebook"></a>
            <a href="https://www.linkedin.com/in/mmgimenez/"><img src="imagenes/linkedin-pie.png" alt="linkedin"></a>
        </div>
        <div class="saludo">
        <p>Contactame a: <a href="contacto.html">makygimenez@gmail.com</a></p>
        </div>

        </div>

  
    </body>
</html>