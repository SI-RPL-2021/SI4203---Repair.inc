@extends('app-dashboard')

@section('title')
Pesanan | Repair-Inch
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
					@foreach($pesanan as $ps)
					<tr>
						<td>{{ App\Customer::where('id', $ps->id_customer)->value('username') }}</td>
						<td>{{ App\Jasa::where('id', $ps->id_jasa)->value('nama') }}</td>
						<td>{{ App\Kategori::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_kategori'))->value('nama') }}</td>
						<td>{{ $ps->status }}</td>
						<td>
							@php
							$status = App\Pembayaran::where('id_pesanan', $ps->id)->value('status');
							@endphp

							@if( $status == "Belum dibayar" && $ps->status == "Belum diproses")
							<a 
							href="#!" 
							class="btn btn-danger round">{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('status') }}</a>

							@elseif($status == "Proses dibayar" && $ps->status == "Belum disetujui")

							@elseif($status == "Proses Verifikasi")
							<button 
							data-toggle="modal" 
							data-target="#modal-verifikasi{{ $ps->id }}"
							class="btn btn-warning round">{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('status') }}</button>

							@elseif($status == "Terbayar")
							<button 
							data-toggle="modal" 
							data-target="#modal-pembayaran{{ $ps->id }}"
							class="btn btn-success round">{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('status') }}</button>

							@endif
						</td>
						<td>
							@if($status == "Terbayar")
							<div class="btn-group mb-1">
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Detail
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
										<a
										data-toggle="modal" 
										class="dropdown-item"
										data-target="#modal-akhiri{{ $ps->id }}" 
										href="#">Progress</a>
										<a 
										data-toggle="modal" 
										class="dropdown-item"
										data-target="#modal-garansi{{ $ps->id }}"
										href="#">Garansi</a>
										<a 
										data-toggle="modal" 
										class="dropdown-item"
										data-target="#modal-feedback{{ $ps->id }}"
										href="#">Feedback</a>
									</div>
								</div>
							</div>
							@elseif($ps->status == "Belum disetujui")
							<a class="btn btn-success round" href="{{ route('mitra.pesanan.setujui', $ps->id) }}">Terima</a>
							<a class="btn btn-danger round" href="{{ route('mitra.pesanan.tolak', $ps->id) }}">Tolak</a>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>

@foreach($pesanan as $ps)
@php
$statuss = App\Pembayaran::where('id_pesanan', $ps->id)->value('status');
@endphp

@if( $statuss == "Proses Verifikasi" )
<div class="modal fade" id="modal-verifikasi{{ $ps->id }}" tabindex="-1" role="dialog">
	<form action="{{ route('mitra.pesanan.konfirmasi_bayar') }}" method="POST">
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
									{{ App\Customer::where('id', $ps->id_customer)->value('username') }}
								</td>
							</tr>
							<tr>
								<th>Kode Invoice</th>
								<td class="text-left">{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('kode_invoice') }}</td>
							</tr>
							<tr>
								<th>Kategori</th>
								<td class="text-left">{{ App\Kategori::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_kategori'))->value('nama') }}</td>
							</tr>
							<tr>
								<th>Jasa</th>
								<td class="text-left">{{ App\Jasa::where('id', $ps->id_jasa)->value('nama') }}</td>
							</tr>
							<tr>
								<th>Mitra</th>
								<td class="text-left">{{ App\Mitra::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_mitra'))->value('nama') }}</td>
							</tr>
							<tr>
								<th>Biaya</th>
								<td class="text-left">Rp {{ number_format(App\Jasa::where('id', $ps->id_jasa)->value('harga')) }}</td>
							</tr>
						</tbody>
					</table>

					<div class="alert alert-primary" role="alert">
						Dibayarkan pada {{ App\Pembayaran::where('id_pesanan', $ps->id)->value('updated_at') }}
					</div>

					<div class="text-center">
						<img width="100%" src="{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('gambar') }}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
						<i class="bx bx-x d-block d-sm-none"></i>
						<span class="d-none d-sm-block">Close</span>
					</button>

					<input type="hidden" name="id" value="{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('id') }}">

					<button type="submit" class="btn btn-primary ml-1">
						<i class="bx bx-check d-block d-sm-none"></i>
						<span class="d-none d-sm-block">Konfirmasi Sukses</span>
					</button>
				</div>
			</div>
		</div>
	</form>
</div>

@elseif($statuss == "Terbayar")
<div class="modal fade" id="modal-pembayaran{{ $ps->id }}" tabindex="-1" role="dialog">
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
								{{ App\Customer::where('id', $ps->id_customer)->value('username') }}
							</td>
						</tr>
						<tr>
							<th>Kode Invoice</th>
							<td class="text-left">{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('kode_invoice') }}</td>
						</tr>
						<tr>
							<th>Kategori</th>
							<td class="text-left">{{ App\Kategori::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_kategori'))->value('nama') }}</td>
						</tr>
						<tr>
							<th>Jasa</th>
							<td class="text-left">{{ App\Jasa::where('id', $ps->id_jasa)->value('nama') }}</td>
						</tr>
						<tr>
							<th>Mitra</th>
							<td class="text-left">{{ App\Mitra::where('id', App\Jasa::where('id', $ps->id_jasa)->value('id_mitra'))->value('nama') }}</td>
						</tr>
						<tr>
							<th>Biaya</th>
							<td class="text-left">Rp {{ number_format(App\Jasa::where('id', $ps->id_jasa)->value('harga')) }}</td>
						</tr>
					</tbody>
				</table>

				<div class="alert alert-primary" role="alert">
					Dibayarkan pada {{ App\Pembayaran::where('id_pesanan', $ps->id)->value('updated_at') }}
				</div>

				<div class="text-center">
					<img width="100%" src="{{ App\Pembayaran::where('id_pesanan', $ps->id)->value('gambar') }}">
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