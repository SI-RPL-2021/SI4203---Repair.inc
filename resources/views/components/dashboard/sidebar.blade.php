<div id="sidebar" class='active'>
	<div class="sidebar-wrapper active">
		<div class="sidebar-header">
			<img src="{{asset('assets/admin/assets/images/logo.svg')}}" alt="" srcset="">
		</div>
		<div class="sidebar-menu">
			<ul class="menu">
				<li class='sidebar-title'>Main Menu</li>
				<li class="sidebar-item 
				{{ (request()->routeIs(

					'admin.dashboard'

					)) ? 'active' : '' }}
					">
					<a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i> 
						<span>Dashboard</span>
					</a>
				</li>
				<li class="sidebar-item 
				{{ (request()->routeIs(

					'admin.customer'

					)) ? 'active' : '' }}
					">
					<a href="{{ route('admin.customer') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i> 
						<span>Customer</span>
					</a>
				</li>
				
			</ul>
		</div>
		<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
	</div>
</div>

