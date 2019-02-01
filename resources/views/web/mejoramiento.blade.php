@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/mejoramiento')

  @section('title', 'Mejoramiento | Andres Elias Verenzuela Conigliaro')
  
  @section('description', 'Servicios y soluciones para pequeña, mediana y grandes empresas, desarrollo de APP y sitios WEB, asesorias en Tecnología de la Información y Telecomunicaciones.')
  
  @section('keywords', 'developer,codigo,desarrollo,stack,fullstack,php,laravel,javascript,perfil,programador')

@section('styles')
<!-- Styles -->
  <style type="text/css">
    
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

        <!-- Section Mejoramiento-->
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
            <h1 style="font-size: 32px;">Mejoramiento Profesional.</h1>
          </header>


          <h3>14. PHP, JavaScript y Html</h3>
          <blockquote>
            <spam style="font-size: 16px">2011</spam>, <strong>Softrain</strong>, 40 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('14_certificado_desarrollo_php')" src="{{asset('img/soportes/jpg/14_certificado_desarrollo_php.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>13. Programación Shell para administradores de sistemas.</h3>
          <blockquote>
            <spam style="font-size: 16px">2010</spam>, <strong>Softrain</strong>, 40 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('13_certificado_programacion_shell')" src="{{asset('img/soportes/jpg/13_certificado_programacion_shell.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>12. MySql para administradores (Nivel Avanzado).</h3>
          <blockquote>
            <spam style="font-size: 16px">2010</spam>, <strong>Centec</strong>, 40 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('12_certificado_administracion_mysql')" src="{{asset('img/soportes/jpg/12_certificado_administracion_mysql.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>11. Básico sistema ZXBIV con plataforma IPTV.</h3>
          <blockquote>
            <spam style="font-size: 16px">2010</spam>, <strong>ZTE</strong>, 40 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('11_certificado_sistemas_iptv')" src="{{asset('img/soportes/jpg/11_certificado_sistemas_iptv.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>10. Fundamentos de ITIL V3.</h3>
          <blockquote>
            <spam style="font-size: 16px">2009</spam>, <strong>Global Knowledge</strong>, 24 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('10_certificado_itil_v3')" src="{{asset('img/soportes/jpg/10_certificado_itil_v3.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>09. Oracle Database 10g: RAC Basic Concepts & Arcihtecture Seminar ED.</h3>
          <blockquote>
            <spam style="font-size: 16px">2009</spam>, <strong>Oracle University</strong>, 8 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('9_certificado_oracle_rac')" src="{{asset('img/soportes/jpg/9_certificado_oracle_rac.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>08. Java programming language.</h3>
          <blockquote>
            <spam style="font-size: 16px">2008</spam>, <strong>Softrain</strong>, 40 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('8_certificado_programacion_java')" src="{{asset('img/soportes/jpg/8_certificado_programacion_java.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>07. Conformación de brigada industrial.</h3>
          <blockquote>
            <spam style="font-size: 16px">2008</spam>, <strong>Fundabomberos</strong>, 24 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('7_certificado_brigada_inductrial')" src="{{asset('img/soportes/jpg/7_certificado_brigada_inductrial.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>06. Base de Datos Oracle 10g: Entonación de comandos SQL.</h3>
          <blockquote>
            <spam style="font-size: 16px">2007</spam>, <strong>Oracle University</strong>, 24 horas, <strong>Caracas - Venezuela.</strong>

            <div>
              <img  onclick="openModal('6_certificado_oracle_entonacion')" src="{{asset('img/soportes/jpg/6_certificado_oracle_entonacion.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>05. Excelencia en la calidad de servicios.</h3>
          <blockquote>
            <spam style="font-size: 16px">2005</spam>, <strong>INCE</strong>, 8 horas, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img  onclick="openModal('5_certificado_excelencia_calidad_servicio')" src="{{asset('img/soportes/jpg/5_certificado_excelencia_calidad_servicio.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>04. Motivación al trabajo.</h3>
          <blockquote>
            <spam style="font-size: 16px">2005</spam>, <strong>INCE</strong>, 8 horas, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img  onclick="openModal('4_certificado_motivacion_al_trabajo')" src="{{asset('img/soportes/jpg/4_certificado_motivacion_al_trabajo.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>03. Relaciones interpersonales.</h3>
          <blockquote>
            <spam style="font-size: 16px">2005</spam>, <strong>INCE</strong>, 8 horas, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img  onclick="openModal('3_certificado_relaciones_interpersonales')" src="{{asset('img/soportes/jpg/3_certificado_relaciones_interpersonales.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>02. Tipos de redes.</h3>
          <blockquote>
            <spam style="font-size: 16px">2003</spam>, <strong>IUT de Los Llanos</strong>, 16 horas, <strong>Calabozo - Venezuela.</strong>

            <div>
              <img  onclick="openModal('2_certificado_tipo_redes')" src="{{asset('img/soportes/jpg/2_certificado_tipo_redes.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          <h3>01. Participación como delegado de tecnología.</h3>
          <blockquote>
            <spam style="font-size: 16px">2004</spam>, <strong>IUT los Llanos</strong>, 32 horas, <strong>Valle de la Pascua - Venezuela.</strong>

            <div>
              <img  onclick="openModal('1_certificado_participacion_coneses')" src="{{asset('img/soportes/jpg/1_certificado_participacion_coneses.jpg')}}" width="auto" height="220" style="cursor: pointer;">
            </div>

          </blockquote>

          
        </section>
  
      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
