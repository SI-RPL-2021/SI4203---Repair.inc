@extends('app')

@section('title')
<<<<<<< HEAD
Register | Repair.Inch
=======
Register | Repair-Inc
>>>>>>> yusuf_1202184304
@endsection

@section('content')

<div class="register-section section mt-90 mb-90">
	<div class="container mb10">
		<div class="row">
			<div class="col-md-3 col-12 d-flex">
			</div>

			<div class="col-md-6 col-12 d-flex">
				<div class="ee-register">

					<h3>Register</h3>

					<form action="{{ route('register.store') }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-12 mb-30">
								<input type="text" placeholder="Username" name="username">
							</div>
							<div class="col-12 mb-30">
								<input type="email" placeholder="Email" name="email">
							</div>
							<div class="col-12 mb-30">
								<input type="text" placeholder="Nomor Telepon" name="notelp">
							</div>
							<div class="col-12 mb-20">
								<input type="password" placeholder="Password" name="password">
							</div>
							<div class="col-12 mb-20">
								<textarea name="alamat" placeholder="Alamat"></textarea>
							</div>
							<div class="col-12 text-right">
								<input type="submit" value="Register"></input>
							</div>
						</div>
					</form>

				</div>
			</div>

			<div class="col-md-3 col-12 d-flex">
			</div>

		</div>
	</div>
</div>
@endsection