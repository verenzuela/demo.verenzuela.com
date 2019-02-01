@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/formacion')

  @section('title', 'Formación | Andres Elias Verenzuela Conigliaro')
  
  @section('description', 'Servicios y soluciones para pequeña, mediana y grandes empresas, desarrollo de APP y sitios WEB, asesorias en Tecnología de la Información y Telecomunicaciones.')
  
  @section('keywords', 'developer,codigo,desarrollo,stack,fullstack,php,laravel,javascript,perfil,programador')

@section('styles')
<!-- Styles -->
  <style>
    .div_img_modal {
      width: 100%;
      height: auto;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 1% auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    blockquote{ padding: 0 0 0 0.5em!important }

  </style>
<!-- End Styles -->
@endsection

@section('script') 
<!-- Script -->
  <script>

    function openModal(id){
      modal.style.display = "block";
      document.getElementById('imagenModal').src = 'img/soportes/png/'+id+'.png';
    }

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
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

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <img id="imagenModal" class="div_img_modal" src="">
            </div>

          </div> 


          <header class="main">
            <h1 style="font-size: 32px;">Formación.</h1>
          </header>

          <h3>5. Certified in Emergency Communication Network for Developing Countries</h3>
          <blockquote>
            <spam style="font-size: 16px">2016</spam>, <strong>Wuhan Research Institute of P & T</strong>, orientado al la atencion y mejoramiento de las telecomunicaciones en caso de desastres para paises en desarrollo, <strong>Wuhan - China.</strong>

            <div>
              <img id="seminario_china" onclick="openModal(this.id)" src="{{ asset('img/soportes/jpg/seminario_china.jpg') }}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>4. Diplomado de Gestión para el Servicio Público</h3>
          <blockquote>
            <spam style="font-size: 16px">2015</spam>, <strong>Colegio Universitario de Caracas</strong>, enmarcado en el área para la implementación de mejoras continuas en los procesos informáticos orientados al público en general, <strong>Caracas - Venezuela.</strong>

            <div>
              <img id="Titulo_diplomado" onclick="openModal(this.id)" src="{{ asset('img/soportes/jpg/Titulo_diplomado.jpg') }}" width="auto" height="370" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>3. ING. en Informática</h3>
          <blockquote>
            <spam style="font-size: 16px">2013</spam>, <strong>Instituto Universitario de Tecnología de Los Llanos</strong>, título obtenido con la presentación de un proyecto en software libre para la gestión y control remota, de equipos de computación en aulas de clases, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img id="Titulo_ingeniero" onclick="openModal(this.id)" src="{{ asset('img/soportes/jpg/Titulo_ingeniero.jpg') }}" width="auto" height="370" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>2. TSU. en Informática</h3>
          <blockquote>
            <spam style="font-size: 16px">2005</spam>, <strong>Instituto Universitario de Tecnología de Los Llanos</strong>, título obtenido con la presentación de un proyecto desarrollado en Visual Basic para la poligonación y cálculo de coordenadas topograficas, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img id="Titulo_tsu" onclick="openModal(this.id)" src="{{ asset('img/soportes/jpg/Titulo_tsu.jpg') }}" width="auto" height="370" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>1. Bachiller en Administración</h3>
          <blockquote>
            <spam style="font-size: 16px">1999</spam>, <strong>Instituto Teresa de la Parra</strong>, título obtenido de bachiller en administración, mensión procesamiento de datos, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img id="Titulo_bachiller" onclick="openModal(this.id)" src="{{ asset('img/soportes/jpg/Titulo_bachiller.jpg') }}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

        </section>
  
      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
