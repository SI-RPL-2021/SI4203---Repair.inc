@if(request()->is('admin','admin/*'))
<div id="sidebar" class='active'>
	<div class="sidebar-wrapper active">
		<div class="sidebar-header">
			<img src="https://i.ibb.co/Yb4fYPc/Group-48.png" alt="" srcset="">
		</div>
		<div class="sidebar-menu">
			<ul class="menu">
				<li class='sidebar-title'>Main Menu</li>
				<li class="sidebar-item ">
					<a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="sidebar-item ">
					<a href="{{ route('admin.customer') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Customer</span>
					</a>
				</li>
				<li class="sidebar-item ">
					<a href="{{ route('admin.mitra') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Mitra</span>
					</a>
				</li>
				<li class="sidebar-item ">
					<a href="{{ route('admin.jasa.kategori') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Kategori Jasa</span>
					</a>
				</li>
			</ul>
		</div>
		<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
	</div>
</div>

@elseif(request()->is('mitra','mitra/*'))
<div id="sidebar" class='active'>
	<div class="sidebar-wrapper active">
		<div class="sidebar-header">
			<img src="{{asset('assets/admin/assets/images/logo.svg')}}" alt="" srcset="">
		</div>
		<div class="sidebar-menu">
			<ul class="menu">
				<li class='sidebar-title'>Main Menu</li>
				<li class="sidebar-item ">
					<a href="{{ route('mitra.dashboard') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="sidebar-item ">
					<a href="{{ route('mitra.jasa') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Jasa</span>
					</a>
				</li>
				<li class="sidebar-item ">
					<a href="{{ route('mitra.pesanan') }}" class='sidebar-link'>
						<i data-feather="home" width="20"></i>
						<span>Pesanan</span>
					</a>
				</li>
			</ul>
		</div>
		<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
	</div>
</div>

@else
@endif