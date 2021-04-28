@extends('app')

@section('title')
@foreach($jasa as $js)
{{ $js->nama }} | Repair-Inch
@endforeach
@endsection

@section('content')

<!-- Single Product Section Start -->
<div class="product-section section mt-90 mb-90">
	<div class="container">

		<div class="row mb-90">

			<div class="col-lg-6 col-12 mb-50">

				<!-- Image -->
				<div class="single-product-image thumb-right">

					<div class="tab-content">
						<div id="single-image-1" class="tab-pane fade show active big-image-slider">
							<div class="big-image"><img src="assets/images/single-product/big-1.png" alt="Big Image"><a href="assets/images/single-product/big-1.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
							<div class="big-image"><img src="assets/images/single-product/big-2.png" alt="Big Image"><a href="assets/images/single-product/big-2.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
							<div class="big-image"><img src="assets/images/single-product/big-3.png" alt="Big Image"><a href="assets/images/single-product/big-3.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
						</div>
						<div id="single-image-2" class="tab-pane fade big-image-slider">
							<div class="big-image"><img src="assets/images/single-product/big-7.png" alt="Big Image"><a href="assets/images/single-product/big-7.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
							<div class="big-image"><img src="assets/images/single-product/big-8.png" alt="Big Image"><a href="assets/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
							<div class="big-image"><img src="assets/images/single-product/big-9.png" alt="Big Image"><a href="assets/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
						</div>
						<div id="single-image-3" class="tab-pane fade big-image-slider">
							<div class="big-image"><img src="assets/images/single-product/big-13.png" alt="Big Image"><a href="assets/images/single-product/big-13.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
							<div class="big-image"><img src="assets/images/single-product/big-14.png" alt="Big Image"><a href="assets/images/single-product/big-14.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
							<div class="big-image"><img src="assets/images/single-product/big-15.png" alt="Big Image"><a href="assets/images/single-product/big-15.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
						</div>
					</div>

					<div class="thumb-image-slider nav" data-vertical="true">
						<a class="thumb-image active" data-toggle="tab" href="#single-image-1"><img src="assets/images/single-product/thumb-1.png" alt="Thumbnail Image"></a>
						<a class="thumb-image" data-toggle="tab" href="#single-image-2"><img src="assets/images/single-product/thumb-2.png" alt="Thumbnail Image"></a>
						<a class="thumb-image" data-toggle="tab" href="#single-image-3"><img src="assets/images/single-product/thumb-3.png" alt="Thumbnail Image"></a>
					</div>

				</div>

			</div>

			<div class="col-lg-6 col-12 mb-50">
				<div class="single-product-content">
					<div class="head-content">
						<div class="category-title">
							<a href="#" class="cat">Smartphone</a>
							<h5 class="title">Flex 3310</h5>
						</div>

						<h5 class="price">$295.00</h5>
					</div>

					<div class="single-product-description">
						<div class="ratting">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>

						<div class="desc">
							<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora inform </p>
						</div>

						<span class="availability">Availability: <span>In Stock</span></span>

						<div class="actions">
							<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>
</div>
@endsection