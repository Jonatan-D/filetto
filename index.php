<!DOCTYPE html>
<html>

<head>
	<title>Filetto pastas artesanales</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos-smartphone.css">
	<link rel="stylesheet" type="text/css" href="estilos-intermedio.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</head>

<body id="cuerpo" class="bg-dark">
	<header>
		<nav id="botonera">
			<ul>
				<li><a href="#productos">Productos</a></li>
				<li><a href="#servicio">Servicios</a></li>
				<li><a href="#nosotros">Nosotros</a></li>
				<li><a href="#contacto">Contacto</a></li>
				<li><a href="#encuesta">Encuesta</a></li>
				<li><a href="#rrhh">RRHH</a></li>

			</ul>
		</nav>

		<div id="logo"></div>
		<div id="eslogan"></div>
	</header>

	<!--#### cajas section PRODUCTOS #####*/-->

	<section id="productos">

		<div id="caja-arriba-sorrentino">
			<figure>
				<img src="img/sorrentinos.jpg">

			</figure>
		</div>
		<div class="sorrentino-descripcion">
			<h2>Sorrentinos</h2>
			<p>Fabricados artesanalmente con materia prima de primera calidad y sin conservantes.</p>
			<p>¡Sabores exclusivos!</p>
			<ul id="sabores-sorrentinos">
				<li>Jamon y mozzarella</li>
				<li>Calabaza, panceta ahumada y mozzarella</li>
				<li>Cuatro quesos</li>
				<li>Espinca, ricota y mozzarella</li>
				<li>Pollo al vino blanco, verdeo y mozzarella</li>
			</ul>
		</div>

		<div id="caja-fettuccini2">
			<figure>
				<img src="img/Fettuccine-2.jpg">

			</figure>
		</div>
		<div id="descripcion-fettuccini">
			<div id="detalle-fetuccini">
				<h2>Fetuccini</h2>
				<p>La tradicional pasta italiana saborizada al estilo Filetto</p>
				<ul>
					<li>Al huevo</li>
					<li>Al morrón</li>
					<li>Espinaca</li>
					<li>Verdeo con finas hierbas</li>
				</ul>
			</div>
		</div>
		<div id="caja-fettuccini">
			<figure>
				<img src="img/Fettuccine.jpg">

			</figure>
		</div>

		<div id="caja-pizza">
			<figure>
				<img src="img/pizza.png">
			</figure>

		</div>
		<div id="descripcion-pizza">
			<div id="detalle-pizza">
				<h2>Pizza</h2>
				<p>Nuestras pizzas presumen de ser frescas, deliciosas y diversas, lo que las conviente en UNICAS. </p>
				<ul>
					<li>Doble mozzarella</li>
					<li>Papas al romero</li>
					<li>Fugazza</li>
					<li>Roquefort</li>
					<li>Napolitana</li>
					<li>Crudo y rúcula</li>
					<li>Cheddar y bacon</li>
				</ul>
			</div>
		</div>

	</section>

	<!--####cajas section SERVICIOS##### -->
	<section id="servicio">
		<div id="caja-delivery"></div>

		<div id="caja-descripcion-delivery">
			<h2>Servicio de delivery</h2>
			<p>Brindamos un servicio de reparto a domicilio para que no tengas que moverte de tu casa para disfrutar de
				tus comidas Filetto.</p>
			<p>Incorporamos además, los servicios de Rappi y Pedidos Ya.</p>
			<div id="caja-rappi-pedidos-ya">

				<div id="rappi"></div>
				<div id="pedidos-ya"></div>
			</div>

		</div>
		<div id="caja-descripcion-catering">
			<div id="detalle-catering">
				<h2>Servicio de catering </h2>
				<p>Brindamos servicio de catering para todo tipos de eventos.</p>
				<p>Consulta por promos especiales, no amoldamos a tus necesidades.</p>
			</div>
		</div>
		<div id="caja-catering"></div>

	</section>

	<!-- ##### cajas section nosotros ##### -->

	<section id="nosotros">

		<div id="contenedor-nosotros-izq">
			<div id="detalle-nosotros">
				<h2> Nosotros</h2>
				<p>El el año 1997 Giusepe D’amico hijo del italiano -Adriano D’amico decide volcar sus conocimientos y
					pasión por la gastronomía italiana que su padre le heredó, en un emprendimiento propio. Su intención
					es que el pueblo pueda probar la comida tradicional de Italia tal como lo hizo él en su niñez
					gracias a su padre. Es así que desde entonces sus esfuerzos están centrados en lograr recetas lo más
					fiel posible y a su vez darle un toque de personalización y distinción.</p>
				<p>La tarea no fue facil, pero la dedicación y pasión de Giusepe hizo que Filetto Pastas Artesanales no
					pare de crecer desde su inauguración.</p>
				<p>Concebido como un negocio netamente familiar, hoy lucimos con orgullo el ¨título popular¨de nuestros
					clientes: ¨La italiana de Cordoba¨. Es que despues de todo, la influencia italiana en Argentina fué
					el mejor regalo que nos dieron nuestros padres y abuelos.</p>
			</div>
		</div>
		<h2>Nuestros especialistas</h2>
		<nav id="botonera-empleados">
			<ul>
				<li><a href="#nosotros" onMouseOver="mostrar('martin')" onMouseOut="ocultar('martin')"> Martín</a></li>
				<li><a href="#nosotros" onMouseOver="mostrar('romina')" onMouseOut="ocultar('romina')"> Romina</a></li>
				<li><a href="#nosotros" onMouseOver="mostrar('alejandra')" onMouseOut="ocultar('alejandra')"> Alejandra</a></li>
			</ul>
		</nav>

		<div id="martin" style="display: none;">
			<h3> Martín Luque </h3>
			<img src="img/martin.jpg">

		</div>
		<div id="romina" style="display: none;">
			<h3>Romina Zelarayan</h3>
			<img src="img/alejandra.jpg">
		</div>
		<div id="alejandra" style="display: none;">
			<h3>Alejandra Zárate</h3>
			<img src="img/romina.jpg">

		</div>

	</section>

	<!-- ##### cajas section contacto ##### -->

	<section id="contacto">

		<h2>Contactanos</h2>
		<div id="caja-datos-contacto">
			<div id="caja-telefono"><a id="numero-tel" href="tel:+54351156123456789">
					<div id="tel"></div>
				</a>
			</div>

			<div id="caja-whatsapp"><a id="wa-link" href="https://api.whatsapp.com/send?phone=+543516823621" target="_blank">
					<div id="wa"></div>
				</a></div>

			<div id="caja-facebook"><a id="fb-link" href="https://www.facebook.com/filettopastasartesanales" target="_blank">
					<div id="fb"></div>
				</a></div>

			<div id="caja-instagram"><a id="ig-link" href="https://www.instagram.com/filetto_pastasartesanales/" target="_blank">
					<div id="ig"></div>
				</a></div>

			<div id="caja-numero-tel">
				<p id="numero-tel">TEL:3516823621</p>
			</div>
			<div id="caja-leyenda-abajo-iconos">
				<p id>Hacé CLIC en la imágen para llamar o ir a nuestras redes.</p>
			</div>

		</div>

		<?php
		if (isset($_GET['ok'])) {
			echo "<h5>¡Hemos recibido su consulta, te contestaremos en breve!</h5>";
		} else { ?>

			<form id="formulario" class="col-md-6" method="POST" action="enviar_consulta.php">
				<label for="leyenda-form" class="form-label">Envianos tu consulta y tus datos. Nos comunicaremos a la brevedad.</label>
				<input type="text" placeholder="Nombre*" minlength="4" maxlength="30" name="nombre" required class="form-control">
				<input type="text" placeholder="Apellido*" minlength="4" maxlength="30" name="apellido" required class="form-control">
				<input type="tel" name="telefono" minlength="7" maxlength="15" placeholder="Teléfono*" required class="form-control">
				<input type="email" placeholder="Email*" minlength="4" maxlength="40" name="correo" required class="form-control">
				<label for="leyenda" class="form-label">Su consulta: </label>
				<textarea name="consulta" rows="10" cols="57" minlength="50"> </textarea>
				<input type="submit" value="Enviar consulta" class="form-control">

				</ul>
			</form>
			<div id="campos-obligatorios">
				<p>Los campos marcados con (*) son obligatorios.</p>
			</div>
		<?php } ?>

	</section>
	<section id="rrhh">
		<?php
		include 'carrousel.php';
		?>


	</section>
	<!-- contenido postulacion -->
	<section id="form_postulantes">
		<div id="contenido1" class="col-md">
			<?php
			if (isset($_GET['ok'])) {
				echo '<p class="text-success text-center"><font size=6> <b>¡Hemos recibido su postulación correctamente!</b></font></p>';
			} else if (isset($_GET['error'])) {

				echo '<p class="text-danger"><font size=4><b>Tu DNI ya se encuentra en nuestra base de datos.</b></font></p>';
				include 'formu_postulacion.php';
			} else {
				include 'formu_postulacion.php';
			}

			?>

		</div>

	</section>
	<footer>
		<div id="pie-izq">
			<p>Copyright © Filetto 2021</p>
		</div>
		<div id="pie-der">

			<P>Powered by JONATAN DEPORTE</P>
		</div>
	</footer>
	<script type="text/javascript" src="script2.js"></script>
	<script type="text/javascript" src="script3.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

</html>