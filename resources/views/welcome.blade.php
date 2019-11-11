@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
		 	<img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="400" >
		</div>
		<div class="col-md-6">
		 	<h1>Wahidev Academy</h1>
		 	<h5>Melalui Teknologi Kami Siap Berkarya Untuk Negeri. Mari Daftarkan diri anda di Wahidev Academy</h5>
		 	<a href="" title="" class="btn btn-primary btn-lg"><i class="fa fa-sign-in" aria-hidden="true"></i> Daftar</a>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-4">
			<div class="card text-center" style="width: 18rem;">
			  <i class="fa fa-desktop fa-5x mt-3" aria-hidden="true"></i>
			  <div class="card-body">
			    <p class="card-text">Web Programming</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center" style="width: 18rem;">
			  <i class="fa fa-mobile fa-5x mt-3" aria-hidden="true"></i>
			  <div class="card-body">
			    <p class="card-text">Mobile Programming</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center" style="width: 18rem;">
			  <i class="fa fa-picture-o fa-5x mt-3" aria-hidden="true"></i>
			  <div class="card-body">
			    <p class="card-text">Web Design</p>
			  </div>
			</div>
		</div>	
	</div>

</div>

@endsection
