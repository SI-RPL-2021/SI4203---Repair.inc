@extends('app')

@section('title')
<<<<<<< HEAD
<<<<<<< HEAD
Repair.Inch
=======
Repair-Inch
>>>>>>> yusuf_1202184304
=======
Repair-Inc
>>>>>>> yusuf_1202184304
@endsection

@section('content')
<div class="hero-section section mb-30">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="hero-slider hero-slider-one">
					<div class="hero-item">
						<div class="row align-items-center justify-content-between">
							<div class="hero-content col">
<<<<<<< HEAD
								<h2>Selamat Datang di</h2>
								<h1><span>Repair.inc</span></h1>
								<h1>IT’S <span class="big">29%</span> OFF</h1>
								<a href="#">get it now</a>
							</div>

							<div class="hero-image col"><img src="assets/images/hero/hero-1.png" alt="Hero Image"></div>
						</div>     
					</div>

					<div class="hero-item">
						<div class="row align-items-center justify-content-between">
							<div class="hero-content col">
								<h2>Repair.inc</h2>
								<h1><span>GL G6</span></h1>
								<h1>IT’S <span class="big">35%</span> OFF</h1>
								<a href="#">get it now</a>
							</div>

							<div class="hero-image col"><img src="assets/images/hero/hero-2.png" alt="Hero Image"></div>
						</div>     
					</div>

					<div class="hero-item">
						<div class="row align-items-center justify-content-between">
							<div class="hero-content col">
=======
>>>>>>> yusuf_1202184304
								<h2>HURRY UP!</h2>
								<h1><span>REPAIR.INC</span></h1>
								<h1>IT’S <span class="big">29%</span> OFF</h1>
								<a href="#">get it now</a>
							</div>
<<<<<<< HEAD

							<div class="hero-image col"><img src="assets/images/hero/hero-3.png" alt="Hero Image"></div>
						</div>     
=======
							<div class="hero-image col"><img src="https://i.ibb.co/HgpzYQw/Untitled-2.png" alt="Hero Image"></div>
						</div>
>>>>>>> yusuf_1202184304
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="feature-section section mb-60">
	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-6 col-12 mb-30">
				<!-- Feature Start -->
				<div class="feature feature-shipping">
					<div class="feature-wrap">
						<div class="icon"><img src="assets/images/icons/feature-van.png" alt="Feature"></div>
						<h4>FREE SHIPPING</h4>
						<p>Start from $100</p>
					</div>
				</div><!-- Feature End -->
			</div>

			<div class="col-lg-4 col-md-6 col-12 mb-30">
				<!-- Feature Start -->
				<div class="feature feature-guarantee">
					<div class="feature-wrap">
						<div class="icon"><img src="assets/images/icons/feature-walet.png" alt="Feature"></div>
						<h4>MONEY BACK GUARANTEE</h4>
						<p>Back within 15 days</p>
					</div>
				</div><!-- Feature End -->
			</div>

			<div class="col-lg-4 col-md-6 col-12 mb-30">
				<!-- Feature Start -->
				<div class="feature feature-security">
					<div class="feature-wrap">
						<div class="icon"><img src="assets/images/icons/feature-shield.png" alt="Feature"></div>
						<h4>SECURE PAYMENTS</h4>
						<p>Payment Security</p>
					</div>
				</div><!-- Feature End -->
			</div>

		</div>
	</div>
</div>

<div class="container">
	<div class="row row-30 mb-40">

		<!-- About Image -->
		<div class="about-image col-lg-6 mb-50">
			<img src="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317e146275.png" alt="no img" width="585" height="483">
		</div>

		<!-- About Content -->
		<div class="about-content col-lg-6">
			<div class="row">
				<div class="col-12 mb-50">
					<h1>tentang <span>Repair.inc</span></h1>
					<p>Repair.inc merupakan website penyedia jasa layanan reparasi rumahan yang dapat membantu kamu untuk menemukan jasa reparasi yang kamu butuhkan sesuai keinginan kamu.</p>
				</div>

				<div class="col-12 mb-50">
					<h4>SEMUA ADA DISINI</h4>
					<p>Kita memastikan kenyamanan pengguna dalam mencari jasa layanan dengan cara memfilter mitra jasa yang bercompeten dalam menangani masalah.</p>
				</div>

				<div class="col-12 mb-50">
					<h4>SOLUSI ANTI RIBET</h4>
					<p>Kamu tidak perlu khawatir dengan permasalahan rumah tangga kamu, hanya dengan mencari apa yang kamu butuhkan, mitra jasa kita bakal datang langsung ke rumah kamu.</p>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="product-section section mb-60">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-40">
				<div class="section-title-one" data-title="Jasa Terbaru"><h1>Jasa Terbaru</h1></div>
			</div>

			<div class="col-12">
				<div class="row">

					@foreach($jasa as $js)
					<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
						<div class="ee-product">
							<div class="image">
								<a href="{{ route('jasa.detail', $js->id) }}" class="img">
									<img src="{{ $js->gambar }}" alt="Product Image">
								</a>
							</div>

							<div class="content">
								<div class="category-title">
									<a href="{{ route('kategori.detail', $js->id_kategori) }}" class="cat">{{ App\Kategori::where('id', $js->id_kategori)->value('nama') }}</a>
									<h5 class="title"><a href="{{ route('jasa.detail', $js->id) }}">{{ $js->nama }}</a></h5>
								</div>
								<div class="price-ratting">
									<h5 class="price">Rp {{ number_format($js->harga) }}</h5>
									<div class="ratting">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>

<div class="product-section section mb-60">
	<div class="container mb10">
		<div class="row">

			<!-- Section Title Start -->
			<div class="col-12 mb-40">
				<div class="section-title-one" data-title="Artikel Terbaru"><h1>Artikel Terbaru</h1></div>
			</div><!-- Section Title End -->

			<div class="col-12">
				<div class="row">

					@foreach($artikel as $ar)
					<div class="col-xl-4 col-lg-4 col-md-6 col-12 pb-30 pt-10">
						<div class="ee-blog">
							<a href="{{ route('artikel.detail', $ar->id) }}" class="image">
								<img src="{{ $ar->gambar }}" alt="Blog Image">
							</a>
							<div class="content">
								<h3>
									<a href="single-blog-left-sidebar.html">
										{{ $ar->judul }}
									</a>
								</h3>
								<ul class="meta">
									<li>
										<a href="{{ route('artikel.detail', $ar->id) }}">{{ \Carbon\Carbon::parse($ar->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
									</li>
								</ul>
								<p>{!! Str::limit($ar->artikel, 100, '...') !!}</p>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>

		</div>
	</div>
</div>
@endsection