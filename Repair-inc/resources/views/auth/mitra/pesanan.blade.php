@extends('app-dashboard')

@section('title')
Pesanan | Repair.Inc
@endsection

@section('content')
<div class="page-title mb2">
	<h3>Pesanan</h3>
</div>

<section class="section">
	<div class="card">
		<div class="card-header">

		</div>
		<div class="card-body">
			<table class='table table-striped' id="table1">
				<thead>
					<tr>
						<th>Customer</th>
						<th>Jasa</th>
						<th>Kategori</th>
						<th>Status</th>
						<th>Pembayaran</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td>username customer</td>
						<td>nama jasa</td>
						<td>kategorinya</td>
						<td>statusnya</td>
						<td>
							<a 
							href="#!" 
							class="btn btn-danger round">Belum dibayar</a>

							<button 
							data-toggle="modal" 
							data-target="#modal-verifikasi"
							class="btn btn-warning round">Proses Verifikasi</button>

							<button 
							data-toggle="modal" 
							data-target="#modal-pembayaran"
							class="btn btn-success round">Terbayar</button>
						</td>
						<td>
							<a class="btn btn-success round" href="#!">Terima</a>
							<a class="btn btn-danger round" href="#!">Tolak</a>
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
</section>


<div class="modal fade" id="modal-verifikasi" tabindex="-1" role="dialog">
	<form action="#!" method="POST">
		@csrf
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Verifikasi Pembayaran</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>Customer</th>
								<td class="text-left">
									Username customer
								</td>
							</tr>
							<tr>
								<th>Kode Invoice</th>
								<td class="text-left">Kode Invoice</td>
							</tr>
							<tr>
								<th>Kategori</th>
								<td class="text-left">Kategori</td>
							</tr>
							<tr>
								<th>Jasa</th>
								<td class="text-left">jasa</td>
							</tr>
							<tr>
								<th>Mitra</th>
								<td class="text-left">Mitra</td>
							</tr>
							<tr>
								<th>Biaya</th>
								<td class="text-left">Rp harga</td>
							</tr>
						</tbody>
					</table>

					<div class="alert alert-primary" role="alert">
						Dibayarkan pada 10 april 2021
					</div>

					<div class="text-center">
						<img width="100%" src="url gambar">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
						<i class="bx bx-x d-block d-sm-none"></i>
						<span class="d-none d-sm-block">Close</span>
					</button>

					<input type="hidden" name="id" value="">
				</div>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="modal-pembayaran" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Verifikasi Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i data-feather="x"></i>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-striped">
					<tbody>
						<tr>
							<th>Customer</th>
							<td class="text-left">
								Customer
							</td>
						</tr>
						<tr>
							<th>Kode Invoice</th>
							<td class="text-left">Kode Invoice</td>
						</tr>
						<tr>
							<th>Kategori</th>
							<td class="text-left">kategori</td>
						</tr>
						<tr>
							<th>Jasa</th>
							<td class="text-left">jasa</td>
						</tr>
						<tr>
							<th>Mitra</th>
							<td class="text-left">mitra</td>
						</tr>
						<tr>
							<th>Biaya</th>
							<td class="text-left">Rp biaya</td>
						</tr>
					</tbody>
				</table>

				<div class="alert alert-primary" role="alert">
					Dibayarkan pada 10 april 2021
				</div>

				<div class="text-center">
					<img src="url gambar">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
					<i class="bx bx-x d-block d-sm-none"></i>
					<span class="d-none d-sm-block">Close</span>
				</button>
			</div>
		</div>
	</div>
</div>

@endsection