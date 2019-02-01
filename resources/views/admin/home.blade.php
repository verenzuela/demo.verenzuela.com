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
	
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
		  <!-- Navbar -->
		  @include('commons.admin.navbar')

		  <!-- Main Sidebar Container -->
		  @include('commons.admin.sidebar')

		  <!-- Content Wrapper. Contains page content -->
		  <div class="content-wrapper">
		    
		    <!-- Content Header (Page header) -->
		    <div class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0 text-dark">Dashboard</h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
		              <li class="breadcrumb-item active">Dashboard</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <!-- /.content-header -->

		    <!-- Main content -->
		    <div class="content">
		      <div class="container-fluid">
		        
		        
		      </div>
		      <!-- /.container-fluid -->
		    </div>
		    <!-- /.content -->
		  

		  </div>
		  <!-- /.content-wrapper -->

		  <!-- Control Sidebar -->
		  <aside class="control-sidebar control-sidebar-dark">
		    <!-- Control sidebar content goes here -->
		  </aside>
		  <!-- /.control-sidebar -->

		  <!-- Main Footer -->
		  
		</div>
		<!-- ./wrapper -->
	</body>
	
<!-- End Content -->
@endsection
