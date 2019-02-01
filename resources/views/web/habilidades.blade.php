@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/habilidades')

  @section('title', 'Habilidades | Andres Elias Verenzuela Conigliaro')
  
  @section('description', 'Servicios y soluciones para pequeña, mediana y grandes empresas, desarrollo de APP y sitios WEB, asesorias en Tecnología de la Información y Telecomunicaciones.')
  
  @section('keywords', 'developer,codigo,desarrollo,stack,fullstack,php,laravel,javascript,perfil,programador')

@section('styles')
<!-- Styles -->
  <style type="text/css">
    
    .img-responsive {
      max-width: 130px;
      height: auto;
    }

  </style>
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
            <h1 style="font-size: 32px;">Habilidades.</h1>
          </header>

          <h2 id="content">Desarrollo de Software</h2>
          <p>Desarrollo de aplicaciones y paginas web a la medida, con tecnología responsive y html5, manejo de: PHP, JavaScript, NojeJs, Visual Basic, C, VBScript, Java, PL/SQL, Visual Fox-Pro, ASP, Shell Script, Pascal. Conocimiento y manejo de los frameworks: Laravel, Yii, Angular, Kohana, Ionic y de las librerías: Ajax, Jquery, Boostrap, font awesome, amplios conocimientos en el desarrollo en aplicaciones y/o páginas web y aplicaciones para escritorio, uso y manejo de Wordpress y Drupal.</p>

          <div class="row">
            <!-- Break -->
            <div class="4u 12u$(small)">
              <!-- Box -->
              <h3>Base de Datos Sql/No Sql</h3>
              
              <p>Conocimiento y manejo de base de datos (MySql, Postgre, Sysbase, Oracle, Mongo) relacionales y no relacionales, entonación y configuracion de servidores para ambientes de dessarrollo y/o producción, optimización de querys en BD Sql. Análisis, normalización, documentación y creación de bases de datos.</p>
              
            </div>
            <div class="4u 12u$(small)">
              <!-- Box -->
              <h3>Hardware</h3>
        
              <p>Mantenimiento y revisión de equipos de informáticos y/o T.I, PC's, servidores, routers, modens, equipos de telecomunicaciones, instalación y revisión de componentes, limpieza e identificación de posibles fallas por desgaste y uso, instalación y reubicación de estantes (racks) y organizadores de cables.</p>
              
            </div>
            <div class="4u 12u$(small)">
              <!-- Box -->
              <h3>Manejo de Git</h3>
              
              <p>Manejo de control de versiones de codigo con repositorios GIT locales y en la nube (GitHub, Bitbucket), implementación de ramas para control de código y revisiones de bugs y/o errores en ambientes de desarrollo, calidad y/o producción, documnetación de código en implementación de proyectos para control de version.</p>
              
            </div>
            
          </div>

          <div class="row">
            <!-- Break -->
            <div class="4u 12u$(small)">
              <!-- Box -->
              <h3>Redes</h3>
              
              <p>Instalación de cableado estructurado y redes de trabajo para pequeña y mediana empresa, revision y cambios de puntos de red, organización e identificación/etiquetado de cableado, instalación y revición de equipos de redes, switches, routers. Instalación de redes punto a punto, orientación de antenas outdoor, análisis de espacios cerrados para ubicacio y optimización de antenas y equipos indoor.</p>
              
            </div>
            <div class="4u 12u$(small)">
              <!-- Box -->
              <h3>Servidores, AWS y GCloud</h3>
              
              <p>Configuración e instalación de S.O en servidores para ambientes Web (apache, nginx) o base de datos (Mysql, Oracle, Postgret, Sysbase, Mongo), manejo de plataformas Amazon AWS y Google Cloud, creación y mantenimeinto de maquinas virtuales en la nube en los servicios antes mencionados, manejo y uso de Docker Container configuración de ambientes en Docker para desarrollos y/o ambientes de producción.</p>
              
            </div>
            <div class="4u 12u$(small)">
              <!-- Box -->
              <h3>CCTV</h3>
              
              <p>Instalación, configuración y mantenimiento de circuitos cerrados de video vigilancia, mantenimiento y revision de equipos DRV y camaras de seguridad, reubicacion de cableado y camaras. Mantenimiento y revisión de fuentes de poder, filtros y baluns. Análisis de áreas de trábajo y ubicación estrátégica de cámaras.</p>
              
            </div>
          </div> 


          <h4><b>Herramientas de Servicio:</b></h4>        
          <p><i>Desarrollos afianzados en las plataformas mas solidas del mercado...</i></p>

          <div class="row">

            <div class="row">
              <div class="col-md-2">
                <img src="{{ asset('img/it/centos.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/wserver.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/debian.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/ubuntu.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/windows.png') }}" class="img-responsive" />
              </div>
               <div class="col-md-2">
                <img src="{{ asset('img/it/vmware.png') }}" class="img-responsive" />
              </div>                   
              <div class="col-md-2">
                <img src="{{ asset('img/it/docker.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/zabbik.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/cpanel.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/apache.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/html5.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/css3.png') }}" class="img-responsive" />                  
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/php.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/jquery.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/mysql.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/mariadb.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/prestashop.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">        
                <img src="{{ asset('img/it/joomla.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/wordpress.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/sdk.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/aws.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/googlecloud.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/laravel.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/angular.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/nodejs.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/mongodb.png') }}" class="img-responsive" />
              </div>
              <div class="col-md-2">
                <img src="{{ asset('img/it/oracle.png') }}" class="img-responsive" />
              </div>  
              <div class="col-md-2">
                <img src="{{ asset('img/it/hikvision.png') }}" class="img-responsive" />
              </div>  
              <div class="col-md-2">
                <img src="{{ asset('img/it/tplink.png') }}" class="img-responsive" />
              </div>  
              <div class="col-md-2">
                <img src="{{ asset('img/it/ubiquiti.png') }}" class="img-responsive" />
              </div>  

            </div>

          </div>

        </section>
  
      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
