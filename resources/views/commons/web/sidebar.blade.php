
<style type="text/css">
	
	.badge1 {
	   position:relative;
	}
	.badge1[data-badge]:after {
	   content:attr(data-badge);
	   position:absolute;
	   top: 5px;
	   right: 5px;
	   font-size:.8em;
	   background: red;
	   color: white;
	   width: auto;
	   padding: 3px;
	   height: 25px;
	   text-align:center;
	   line-height: 18px;
	   border-radius: 5%;
	   box-shadow:0 0 1px #333;
	}

</style>

<!-- Sidebar -->
<div id="sidebar" style="width: 270px;">
	
	<div class="inner" style="width: 270px;">

		<!-- Search -->
		<!--section id="search" class="alt">
			<form method="post" action="#">
				<input type="text" name="query" id="query" placeholder="Buscar" />
			</form>
		</section-->
			
		<!-- Menu -->
		<nav id="menu">
			<header class="major">
				<a href="/" style="border: none;"><img alt="logo andres verenzuela" title="Andres Verenzuela" src="{{ asset('img/logo_andres_verenzuela.jpg') }}" style="border: none"></a>
			</header>
			<ul>
				<li><a href="/">Inicio</a></li>
				<li><a href="{{ route('formacion') }}">Formación</a></li>
				<li><a href="{{ route('habilidades') }}">Habilidades</a></li>
				<li><a href="{{ route('mejoramiento') }}">Mejoramiento</a></li>
				<li><a href="{{ route('contacto') }}">Contacto</a></li>
				<li><a href="{{ route('aderca_de_mi') }}">Acerca de mi</a></li>
				<li><a href="{{ route('clientes') }}">Clientes</a></li>
				<li><a href="{{ route('pagos') }}" class="badge1" data-badge="Nuevo">Pago en linea</a> </li>
			</ul>
		</nav>

		<!-- Section -->
		<section>
			<header class="major">
				<h2>Contactame:</h2>
			</header>
			<p>Quito - Ecuador</p>
			<ul class="contact">
				
				<li class="fa-phone"><a target="_blank" href="tel:593983802397">+593 98 380 2397</a></li>
				<li class="fa-whatsapp"><a target="_blank" href="https://wa.me/593962981079">+593 96 298 1079</a></li>
				<li class="fa-envelope-o"><a href="mailto:verenzuela@gmail.com">verenzuela@gmail.com</a></li>
				<li class="fa-twitter"><a href="https://twitter.com/andres_elias">Twitter</a></li>
				<li class="fa-linkedin-square"><a target="_blank" href="https://www.linkedin.com/in/verenzuela/">LinkedIn</a></li>
				<li class="fa-google-plus"><a target="_blank" href="https://plus.google.com/+Andr%C3%A9sVerenzuela">Google</a></li>

				<li class="fa-home">170605 Av. Simón Bolivar, Quito</li>
			</ul>
		</section>

		<!-- Footer -->
		@include('commons.web.footer')

	</div>
</div>