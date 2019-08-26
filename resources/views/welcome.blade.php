@extends('layouts.navbarwelcome')


@section('content')

<div class="container">
	
<section class="content-satu">
	<div class="row mt-5 font">
		<div class="col-lg-3">
			<h2 class="category-utama">Kategori Utama</h2>
			<hr>
		</div>
		<div class="col-md-2  text-center">
			<div class="card justify-content-center bg-off clickable">
				<div class="card-body">
					<i class="fas fa-tablet-alt size-info-fonts mb-2 mt-2"></i>
					<p>Smarphone & Tablet</p>
				</div>
			</div>
		</div>
		<div class="col-md-2  text-center">
			<div class="card justify-content-center clickable">
				<div class="card-body">
					<i class="fas fa-tv size-info-fonts mb-2 mt-2"></i>
					<p>Komputer & Laptop</p>
				</div>
			</div>
		</div>
		<div class="col-md-2  text-center">
			<div class="card justify-content-center bg-off clickable">
				<div class="card-body">
					<i class="fas fa-truck-moving size-info-fonts mb-2 mt-2"></i>
					<p>Gadget</p>
				</div>
			</div>
		</div>
		<div class="col-md-2  text-center">
			<div class="card justify-content-center clickable">
				<div class="card-body">
					<i class="fas fa-headset size-info-fonts mb-2 mt-2"></i>
					<p>Aksesoris</p>
				</div>
			</div>
		</div>
	</div>
</section>

</div>

<div class="container">

			<div class="row mt-5 font">
					<div class="col-lg-7">
						<h2 class="category-utama">Produk</h2> <input class="typeahead form-control" type="text">
						<hr>
					</div>
			</div>

			<section class="content-dua">
				
				<div class="row">

					@foreach ($produks as $produk)
					<div class="col-md-2">
						<div class="card clickables mt-3">
							<img class="card-img-top" src="{{asset($produk->image)}}" alt="Card image cap">
							<div class="card-body len-het">
								<h5 class="text-welcome-produk"><a href="{{route('showit', ['produk' => $produk->id])}}">{{$produk->nama_produk}}</a></h5>
								<h3 class="price-welcome-page">{{$produk->price_produk}}  <i class="fas fa-tags mb-2 tags-price"></i> </h2>
							</div>
						</div>
					</div>
					@endforeach

				</div>

				<div class="row mt-3"> {{$produks->links()}}</div>

			</section>
</div>






@endsection