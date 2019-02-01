@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/clientes')

  @section('title', 'Clientes | Andres Elias Verenzuela Conigliaro')
  
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
            <h1 style="font-size: 32px;">Clientes.</h1>
          </header>


          <table>
            <tbody>
              <tr>
                <td>
                  <h4">Hidromaxi Construcciones</h4>
                  <p><span class="image left"><img src="{{asset('img/clientes/hidromaxi.jpeg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Creación de red para 4 clientes y 1 Servidor, configuración e instalación de Servidor. Instalación y configuración de equipos de comunicaciones, instalación, organización e identificación de cableado estructurado con canaletas empotradas, configuración de impresoras en red, creación y configuración de grupo de trabajo con cuentas y carpetas compartidas, creación y configuraciónde tareas automaticas para respaldos en la nube de información de contabilidad, venta y facturación.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Quito, Ecuador.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://www.hidromaxi.com/">www.hidromaxi.com</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4 style="text-align: right;">HotelsByDay</h4>
                  <p><span class="image right"><img src="{{asset('img/clientes/hotelsbyday_home_page.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Desarrollo y mantenimiento en el backend y frontend del sitio web www.hotelsbyday.com bajo el framework kohana PHP. Análisis de propuesta para la migración del sitio a una nueva plataforma basada en API Rest y nueva arquitectura en Amazon AWS.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Nueva York, Estados Unidos de America.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://www.hotelsbyday.com/">www.hotelsbyday.com</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Appnosticworx</h4>
                  <p><span class="image left"><img src="{{asset('img/clientes/appnosticworx_home_page.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Desarrollo fullstack para varios clientes externos en diversas plataformas WEB, integración de plataforma de pago Stripe en varios proyectos y desarrollo en nuevos proyectos bajo el framework Laravel PHP.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Londres, Inglaterra.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://www.appnosticworx.com/">www.appnosticworx.com</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4 style="text-align: right;">Hotel Reina Suite</h4>
                  <p><span class="image right"><img src="{{asset('img/clientes/hotel_reina_suite_fachada_1.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Creación de pagina web, reubicación y mantenimiento de CCTV, instalación de camaras de seguridad en nuevos espacios, reubicación y reconfiguración de red inalambrica para huespedes, etiquetado e identificación de puntos de red para el área administrativa, reubicación y reestructuración de cuarto de datos, peinado de cables reconfiguración de espacios para respaldo y servidores, mantenimiento y reparación de estaciones de trabajo.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Apure, Venezuela.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://www.reinasuite.com/">www.reinasuite.com</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Empresas LP21</h4>
                  <p><span class="image left"><img src="{{asset('img/clientes/Lp21.png')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Servicio prestados para análisis y desarrollo en PHP de un modulo CRM y control de flujo para importaciones en sistema desarrollado a la medida para cliente externo.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Caracas, Venezuela.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://lp21.com.ve/">www.lp21.com.ve</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4 style="text-align: right;">Heladería bajo 0</h4>
                  <p><span class="image right"><img src="{{asset('img/clientes/heladeria_bajo_cero_1.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Servicios prestados para identificación y reparación de falla en línea telefónica tradicional, realizando sustitución de cableado especial subterraneo para minimizar los ruidos electricos y atenuación de la línea para uso de punto de venta.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Apure, Venezuela.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://lp21.com.ve/">www.lp21.com.ve</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Panadería La Torraca</h4>
                  <p><span class="image left"><img src="{{asset('img/clientes/panaderia_la_torraca_2.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Servicios prestados para la identificación y reparación de tono en línea telefónica tradicional y sincronismo en moden ADSL, sustitución y reubicación de 30mts de cableado telefónico y cajetin de conexion superficial, cambio de cajenites y conectores de punta, cambio y configuración de modulación en moden ADSL2+..</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Apure, Venezuela.</strong>                 
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4 style="text-align: right;">El Castillo de las Telas</h4>
                  <p><span class="image right"><img src="{{asset('img/clientes/el_castillo.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Servicios prestados para la identificación y reparación de tono en línea telefónica tradicional y sincronismo en moden ADSL, sustitución y reubicación de 30mts de cableado telefónico y cajetin de conexion superficial, cambio de cajenites y conectores de punta, cambio y configuración de modulación en moden ADSL2+.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Apure, Venezuela.</strong>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; <strong><a target="_blank" href="http://www.elcastillotucentrotextil.com/">www.elcastillotucentrotextil.com</a></strong>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Bodegón Los Toneles</h4>
                  <p><span class="image left"><img src="{{asset('img/clientes/bodegon_los_toneles_1.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Servicios prestados para la reparanción y mantenimiento de PC de caja registradora, sustitución de tramo aéreo de cable para camara de seguridad, instalación de punto de red adicional para punto de venta.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Apure, Venezuela.</strong>
                  <br>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4 style="text-align: right;">Pizzeria Donatella</h4>
                  <p><span class="image right"><img src="{{asset('img/clientes/pizzeria_donatella_1.jpg')}}" alt="" /></span><span style="text-decoration: underline;">Trabajos realizados</span>: <span style="font-style: italic;">Servicios prestados para la sustitución de 30Mts de cableado telefónico en tramo subterraneo.</span>
                  <br>
                  <br>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <strong style="font-style: italic;">Apure, Venezuela.</strong>
                  <br>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>

        </section>

      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
