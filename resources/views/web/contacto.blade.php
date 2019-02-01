@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/contacto')

  @section('title', 'Contacto | Andres Elias Verenzuela Conigliaro')
  
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
            <h1 style="font-size: 32px;">Contacto.</h1>
          </header>

          <div style="text-align: center;">
            <img src="{{asset('img/www.verenzuela.com.jpg')}}" style="border: solid 1px; width: 330px;">
          </div>

        </section>
  
      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
