@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/acerca_de_mi')

  @section('title', 'Acerca de mi | Andres Elias Verenzuela Conigliaro')
  
  @section('description', 'Servicios y soluciones para pequeña, mediana y grandes empresas, desarrollo de APP y sitios WEB, asesorias en Tecnología de la Información y Telecomunicaciones.')
  
  @section('keywords', 'developer,codigo,desarrollo,stack,fullstack,php,laravel,javascript,perfil,programador')

@section('styles')
<!-- Styles -->

<!-- End Styles -->
@endsection

@section('script') 
<!-- Script -->
  
<!-- End Script -->
@endsection

@section('content')
<!-- Content -->

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Main -->
    <div id="main">
      <div class="inner">

        @include('commons.web.header')

        <section>
          <header class="main">
            <h1 style="font-size: 32px;">Acerca de mi.</h1>
          </header>

          <h4>Información básica:</h4>
          <dl>
            <dt>Datos personales:</dt>
            <dd>
              <ul>
                <li>Nombres: Andrés Elias</li>
                <li>Apellidos: Verenzuela Conigliaro</li>
              </ul>
            </dd>

            <dt>Datos de contacto:</dt>
            <dd>
              <ul>
                <li>Teléfonos: +593 098 380 2397</li>
                <li>Correo electrónico: verenzuela@gmail.com</li>
              </ul>
            </dd>
            <dt>Profesión:</dt>
            <dd>
              <ul>
                <li>Ingeniero en informática</li>
              </ul>
            </dd>
          </dl>

          <h4>Objetivo:</h4>
          <dl>
            <dd>
              <p>Desarrollar cada día más mis habilidades para lograr un óptimo desempeño en el ámbito laboral y profesional para alcanzar los objetivos propuestos.</p>
            </dd>
          </dl>
          
        </section>

      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
