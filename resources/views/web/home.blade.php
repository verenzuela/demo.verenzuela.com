@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com')

  @section('title', 'Andres Verenzuela | Desarrollo Web | Full Stack Dev - Asesoria TI')
  
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

        <!-- Banner -->
        <section id="banner">
          <div class="content">
            <header>
              <h3>Hola, mi nombre es:</h2>
              <h2 style="font-size: 20px; margin-bottom: 0.5em;">Andrés Verenzuela<br /></h2>
              <p style="text-transform: none;">Analista y desarrollador de aplicaciones web y asesor en diversas áreas de TIC...</p>
            </header>
            <p><span style="font-style: italic;">Actualmente ofrezco asesoría y servicios en tecnología de la información y telecomunicaciones, desarrollo de app y aplicaciones web, automatización de procesos de negocios, implementación de esquemas para medición de la productividad, instalación y mantenimiento a plataformas tecnológicas y de video vigilancia y mucho más. Todo bajo una gama de productos de ultima generación para mantener tu negocio al día con la tecnología.</span> <strong>Echale un vistazo a mi trayectoria y habilidades y no dudes en comunicarte si necesitas de mi apoyo...</strong></p>
            
          </div>
          <span class="image object">
            <img alt="Andres Verenzuela" title="Andres Verenzuela" src="{{ asset('img/andres_verenzuela_home_page.jpg') }}" />
          </span>
        </section>

        <!-- Section -->
        <section>
          <header class="major">
            <h2>Habilidades</h2>
          </header>
          <div class="features">
            <article>
              <div class="content">
                <h3>Desarrollo de software.</h3>
                <p>Desarrollo de software, Backend y Frontend. (PHP, JavaScript, ASP, Pl/Sql), manejo de frameworks Laravel, Angular, Kohana, entre otros...</p>
              </div>
            </article>
            <article>
              <div class="content">
                <h3>Bases de datos.</h3>
                <p>Análisis, mantenimiento y operaciones en base de datos Mysql, Oracle, Postgre, SysBase.</p>
              </div>
            </article>
            <article>
              <div class="content">
                <h3>Instalación y mantenimiento.</h3>
                <p>Instalacione y mantenimineto a cableado estructurado, servidores y PC's bajo entornos empresariales o de uso personal.</p>
              </div>
            </article>
            <article>
              <div class="content">
                <h3>CCTV</h3>
                <p>Instalación y mantenimiento de componentes y elementos de circuitos cerrados de video vigilancia para uso personal y empresarial.</p>
              </div>
            </article>
          </div>
          <ul class="actions">
            <li><a href="{{ route('habilidades') }}" class="button big">Ver Mas</a></li>
          </ul>
        </section>

        <!-- Section -->
        <section>
          <header class="major">
            <h2>Mejoramiento</h2>
          </header>

          <div class="posts">
            <article>
              <a href="{{ route('mejoramiento') }}" class="image"><img alt="certificado desarrollo php" title="Certificado desarrollo PHP" src="{{ asset('img/soportes/jpg/14_certificado_desarrollo_php.jpg')}}" width="auto" height="250" style="cursor: pointer;"/></a>
              
            </article>
            <article>
              <a href="{{ route('mejoramiento') }}" class="image"><img alt="certificado programcion shell" title="Certificado programacion Shell" src="{{ asset('img/soportes/jpg/13_certificado_programacion_shell.jpg')}}" width="auto" height="250" style="cursor: pointer;"/></a>
              
            </article>
            <article>
              <a href="{{ route('mejoramiento') }}" class="image"><img alt="certificado administracion mysql" title="Certificado administracion MySql" src="{{ asset('img/soportes/jpg/12_certificado_administracion_mysql.jpg')}}" width="auto" height="250" style="cursor: pointer;"/></a>
              
            </article>
            <article>
              <a href="{{ route('mejoramiento') }}" class="image"><img alt="certificaco sistemas iptv" title="Certificado sistemas IPTv" src="{{ asset('img/soportes/jpg/11_certificado_sistemas_iptv.jpg')}}" width="auto" height="250" style="cursor: pointer;"/></a>
              
            </article>
          </div>
          <ul class="actions">
            <li><a href="{{ route('mejoramiento') }}" class="button big">Ver Mas</a></li>
          </ul>
        </section>

      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
