@extends('layouts.web.master')

  @section('canonical', 'http://www.verenzuela.com/pagos')

  @section('title', 'Pagos | Andres Elias Verenzuela Conigliaro')
  
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
            <h1 style="font-size: 32px;">Notificación de Pagos.</h1>
          </header>

          <h3>Indique número de recibo:</h3>

          <form method="get" action="{{route('pagos')}}">
            <div class="row uniform">
              

              <!-- Break -->
              <div class="6u 12u$">
                <div class="select-wrapper">
                  <select name="demo-category" id="demo-category">
                    <option value="">- Seleccione País -</option>
                    <option value="1">Venezuela</option>
                    <option value="1">Ecuador</option>
                  </select>
                </div>
              </div>

              <div class="6u 12u$(xsmall)">
                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Numero de recibo" />
              </div>

              <!-- Break -->
              <div class="12u$">
                <ul class="actions">
                  <li><input type="submit" value="Buscar" class="special" /></li>
                </ul>
              </div>

            </div>
          </form>


        </section>

          

      </div>
    </div>

    @include('commons.web.sidebar')
    
  </div>

<!-- End Content -->
@endsection
