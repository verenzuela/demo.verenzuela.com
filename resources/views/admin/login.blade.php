@extends('layouts.admin.master')

  @section('canonical', 'http://www.verenzuela.com/admin')

  @section('title', 'Andres Verenzuela | Backend')
  
  @section('description', 'Servicios y soluciones para pequeña, mediana y grandes empresas, desarrollo de APP y sitios WEB, asesorias en Tecnología de la Información y Telecomunicaciones.')
  
  @section('keywords', 'developer,codigo,desarrollo,stack,fullstack,php,laravel,javascript,perfil,programador')

@section('styles')
<!-- Styles -->
	<style type="text/css">
		.login-box{ margin-top: 5%!important; }
		.login-page{ background-color: #f5f6f7; }
	</style>
<!-- End Styles -->
@endsection

@section('script') 
<!-- Script -->

<!-- End Script -->
@endsection

@section('content')
<!-- Content -->
	<body class="hold-transition login-page">
		<div class="login-box">
		  <div class="login-logo">
		  	<a href="/" style="border: none;"><img alt="logo andres verenzuela" title="Andres Verenzuela" src="{{ asset('img/logo_andres_verenzuela.jpg') }}" style="border: none"></a>		    
		  </div>
		  <!-- /.login-logo -->
		  <div class="card">
		    <div class="card-body login-card-body">
		      <p class="login-box-msg">Sign in to start your session</p>

		      <form action="{{ route('admin.home') }}" method="get">
		        <div class="input-group mb-3">
		          <input type="email" class="form-control" placeholder="Email">
		          <div class="input-group-append">
		              <span class="fa fa-envelope input-group-text"></span>
		          </div>
		        </div>
		        <div class="input-group mb-3">
		          <input type="password" class="form-control" placeholder="Password">
		          <div class="input-group-append">
		              <span class="fa fa-lock input-group-text"></span>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-8">
		            <div class="checkbox icheck">
		              <label>
		                <input type="checkbox"> Remember Me
		              </label>
		            </div>
		          </div>
		          <!-- /.col -->
		          <div class="col-4">
		            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
		          </div>
		          <!-- /.col -->
		        </div>
		      </form>

		      
		      <!-- /.social-auth-links -->

		      <p class="mb-1">
		        <a href="#">I forgot my password</a>
		      </p>
		     
		    </div>
		    <!-- /.login-card-body -->
		  </div>
		</div>
		<!-- /.login-box -->

	</body>

<!-- End Content -->
@endsection
