<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="{{ route('admin.home') }}" class="brand-link">
	  <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
	       style="opacity: .8">
	  <span class="brand-text font-weight-light">www.verenzuela.com</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	  <!-- Sidebar user panel (optional) -->
	  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
	    <div class="image">
	      <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
	    </div>
	    <div class="info">
	      <a href="#" class="d-block">Jhon Doe</a>
	    </div>
	  </div>

	  <!-- Sidebar Menu -->
	  <nav class="mt-2">
	    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	      <!-- Add icons to the links using the .nav-icon class
	           with font-awesome or any other icon font library -->

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fa fa-dashboard"></i>
					<p>
						Dashboard
						<span class="right badge badge-danger">New</span>
					</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fa fa-calculator"></i>
					<p>
						POV
					</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fa fa-table"></i>
					<p>
						Presupuestos
					</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fa fa-shopping-basket"></i>
					<p>
						Productos
					</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fa fa-cogs"></i>
					<p>
						Servicios
					</p>
				</a>
			</li>


	      <li class="nav-item has-treeview menu-close">
	        <a href="#" class="nav-link">
	          <i class="nav-icon fa fa-usd"></i>
	          <p>
	            Contable
	            <i class="right fa fa-angle-left"></i>
	          </p>
	        </a>
	        <ul class="nav nav-treeview">
	          <li class="nav-item">
	            <a href="#" class="nav-link">
	              <i class="fa fa-file-text-o nav-icon"></i>
	              <p>Facturas</p>
	            </a>
	          </li>
	          <li class="nav-item">
	            <a href="#" class="nav-link">
	              <i class="fa fa-percent nav-icon"></i>
	              <p>Inpuestos</p>
	            </a>
	          </li>
	        </ul>
	      </li>

	      
	      

	      <li class="nav-header">Configuracion</li>
	      
	      <li class="nav-item">
	        <a href="#" class="nav-link">
	          <i class="nav-icon fa fa-calendar"></i>
	          <p>
	            SEO
	          </p>
	        </a>
	      </li>


	    </ul>
	  </nav>
	  <!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>