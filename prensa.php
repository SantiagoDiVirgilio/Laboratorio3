<!DOCTYPE html>
<html lang="es">

<head>
	<link rel="icon" href="Imagenes/Marco_PC.png" type="Images/png">
	<title>FRIENDS: The One With The Fan Page</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
	<header>
		<div>
			<a href="index.html"><img src="Imagenes/Logo_PC.png" alt="Logo FRIENDS">
		</div>
		
		<nav id="menu_hamburguesa">
		<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
		<div class="dropdown">
			<ul>
				<li><a href="index.html">Inicio</a></li>
			</ul>
		</div>
			<div class="dropdown">
				<ul>
					<li><a>Personajes</a></li>
					<div class="dropdown-content">
						<li><a href="protagonistas.html">Protagonistas</a></li>
						<li><a href="secundarios.html">Personajes Secundarios</a></li>
						<li><a href="cameos.html">Estrellas Invitadas</a></li>
					</div>
				</ul>
			</div>
			<div class="dropdown">
				<ul>
					<li><a>¿Que es<br>F·R·I·E·N·D·S?</a></li>
					<div class="dropdown-content">
						<li><a href="resumen.html">Resumen</a></li>
						<li><a href="origen.html">Origen</a></li>
						<li><a href="derivados.html">Derivados</a></li>
					</div>
				</ul>
			</div>
			<div class="dropdown">
				<ul>
					<li><a>Detrás de<br>Cámaras</a></li>
					<div class="dropdown-content">
						<li><a href="produccion.html">Producción</a></li>
						<li><a href="impacto.html">Impacto Cultural</a></li>
						<li><a href="temporadas.html">Temporadas</a></li>
						<li><a href="prensa.html">Datos de Prensa</a></li>
					</div>
				</ul>
			</div>
		<div class="dropdown">
			<ul>
				<li><a href="galeria.html">Galería</a></li>
			</ul>
		</div>
		<div class="dropdown">
			<ul>
				<li><a href="contacto.html">Contacto</a></li>
			</ul>
		</div>
		</nav>
	</header>
	<section>
		<article class="fondo">
			<div>
				<img src="Imagenes/Logo_White_PC.png" alt="Logo FRIENDS">
				<h1>F·R·I·E·N·D·S:</h1>
				<h2>The One With The Fan Page</h2>
			</div>
		</article>
	<article class="title_logo">
		<div>
			<img src="Imagenes/Prensa_Logo.png" alt="Sección Datos de Prensa">
		</div>
	</article>
		<article>
			<h4><i>Críticas:</i></h4>
			<p>Las primeras revisiones de la serie fueron mixtas. Muchas críticas aparecieron, y si bien tuvo bastantes buenas críticas, muchas otras fueron bastante malas.<br>

				<a href="https://news.google.co.uk/newspapers?id=IYwNAAAAIBAJ&sjid=ym8DAAAAIBAJ&pg=3371,4064656&hl=es">“las constantes bromas fueron haciéndose aburridas, como realmente pasaría en la vida real". (Bianco Robert , 1994)</a><br></p>

  			<p><br>Sin embargo, a medida que la serie progresaba, las revisiones se volvieron más positivas, y Friends se convirtió en una de las comedias de situación más populares de su época. Ahora se encuentra a menudo entre los mejores programas de televisión de todos los tiempos. Los críticos elogiaron la serie por tener una escritura y química consistentes entre los principales actores.<br>
		
				<a href="https://www.excelsior.com.mx/funcion/es-oficial-friends-es-la-mejor-serie-de-la-historia/1300886">“El medio The Hollywood Reporter publicó una lista con las mejores series de televisión, según personas relacionadas a la industria del entretenimiento.” (Excelsior, 2019)<a>
			</p>
		</article>
	</section>
	<footer>
		<div>
			<a href="index.html"><strong>Inicio</strong></a>
		</div>
		<div>
			<h7><strong>Personajes</strong></h7>
			<br><a href="protagonistas.html">Protagonistas</a>
			<br><a href="secundarios.html">Personajes Secundarios</a>
			<br><a href="cameos.html">Estrellas Invitadas</a>
		</div>
		<div>
			<h7><strong>¿Que es F·R·I·E·N·D·S?</strong></h7>
			<br><a href="resumen.html">Resumen</a>
			<br><a href="origen.html">Origen</a>
			<br><a href="derivados.html">Derivados</a>
		</div>
		<div>
			<h7><strong>Detrás de Cámaras</strong></h7>
			<br><a href="produccion.html">Producción</a>
			<br><a href="impacto.html">Impacto Cultural</a>
			<br><a href="temporadas.html">Temporadas</a>
			<br><a href="prensa.html">Datos de Prensa</a>
		</div>
		<div>
			<a href="galeria.html"><strong>Galería</strong></a>
		</div>
		<div>
			<a href="contacto.html"><strong>Contacto</strong></a>
		</div>
		<a href="https://es-la.facebook.com/"><img src="Imagenes/Iconos_Personajes/Icono_Facebook.png" alt="Facebook"></a>
		<a href="https://www.instagram.com/"><img src="Imagenes/Iconos_Personajes/Icono_Instagram.png" alt="Instagram"></a>
		<a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D"><img src="Imagenes/Iconos_Personajes/Icono_Twitter.png" alt="Twitter"></a>
		<a href="https://www.tiktok.com/es/"><img src="Imagenes/Iconos_Personajes/Icono_TikTok.png" alt="TikTok"></a>
	</footer>

		<script type="text/javascript">
        function myFunction() {
          var x = document.getElementById("menu_hamburguesa");
          if (x.className === "") {
              x.className = "responsive";
            } 
          else {
              x.className = "";
          	}
		}
    </script>
</body>
</html>