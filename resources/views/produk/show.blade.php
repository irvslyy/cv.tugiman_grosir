@extends('layouts.navbartwo')


@section('content')

 
    <div class="container">
     <div class="row">
     	<div class="col-md-9">
     		 <div class="card">
		      	<div class="card-body">
		      		<div class="row">
		      			<div class="col-md-4">

                            <img src="{{asset($produks->image)}}" alt="avatar" width="100%" class=" mr-1">
                            <img src="{{asset($produks->image)}}" alt="avatar" width="30" class=" mr-1">
                            <img src="{{asset($produks->image)}}" alt="avatar" width="30" class=" mr-1">
                            <img src="{{asset($produks->image)}}" alt="avatar" width="30" class=" mr-1">
		      			</div>
		      			<div class="col-md-8">
		      				<h1>{{$produks->nama_produk}}</h1>
		      				<hr>
                            <div class="alert alert-success" role="alert">
                              <span class="text-alert ml-3">Dapatkan diskon dengan me-masukan kode diskon!</span>
                            </div>
		      				<h1 class="price-produk-style">{{$produks->price_produk}}</h1>
                            <h5 class="display-one"><i class="fas fa-shield-alt"></i> Tersedia >200 barang</h5>
                            <h5 class="display-two">Masukan Jumlah yang di inginkan.</h5>
                        	<br>
                        	<a href="" class="btn btn-success btn-block shadow-sell no-bords">Beli Besok</a>
                        	<div class="row mt-2">
                        		<div class="col-md-6"><a href="" class="btn btn-primary btn-block no-bords color-but">Masukan keranjang</a></div>
                        		<div class="col-md-6"><a href="" class="btn btn-primary btn-block no-bords color-but">Chat Admin</a></div>
                        	</div>
                           <div class="display-trust mt-3">
                                <h5 class="display-one"><i class="fas fa-shield-alt"></i> Jaminan 100% uang aman</h5>
                           </div>
                           <div class="display-trust-2 font">
                               <h5 class="display-two">Uang pasti kembali.sistem pembayaran bebas penipuan.</h5>
                                <h5 class="display-two">Barang tidak sesuai pesanan? ikuti langkah disini</h5>
                           </div>
		      			</div>
		      		</div>
		      	</div>
		      </div>
     	</div>

     	<div class="col-md-3">
     		<div class="card">
     			<div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('img/aa.jpeg')}}" width="100%" class="rounded-circle" height="50%">
                        </div>
                        <div class="col-md-6 line-hetz">
                           <h5 class="dropand-profile">DROPAND OFFICIAL ADMIN</h5>
                           <h5 class="dropand-profile">Pasar Dop</h5>
                           <h5 class="display-two"><i class="fas fa-map-marker-alt"></i> Depok Utara</h5>
                        </div>
                    </div>        
                </div>
                <div class="card-footer">
                    
                </div>
     		</div>
     	</div>
     </div>


     <div class="row mt-3">
     	<div class="col-md-9">
     		<div class="card p-5 top-border">
     			<div class="card-body font">
                    <div class="row  mt-4">
                        <div class="col-md-2 line-hets">
                            <p>Informasi</p>
                        </div>
                        <div class="col-md-5 line-hets">
                            <p><i class="fas fa-tag text-certs"></i> Kondisi : <span class="badge badge-primary">New</span></p>
                            <p> <i class="fas fa-shopping-cart text-certs"></i> Terjual : bagus</p>
                            <p><i class="fas fa-eye text-certs"></i> Dilihat : bagus</p>
                        </div>
                         <div class="col-md-5 line-hets">
                            <p> <i class="fas fa-heart  text-certs"> </i> Difavoritkan : bagus</p>
                            <p><i class="far fa-clock text-certs"></i> Diperbarui   : bagus</p>
                        </div>
                    </div><hr>
                      <div class="row">
                        <div class="col-md-2 line-hets">
                            <p>Spesifikasi</p>
                        </div>
                        <div class="col-md-5 line-hets">
                            <p>Kategori : bagus</p>
                            <p>Berat : {{$produks->berat}}</p>
                            <p>Merek : {{$produks->merek}}</p>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-2 line-hets">
                            <p>Deskripsi</p>
                        </div>
                        <div class="col-md-10 ">
                            <p>{!!$produks->desc_produk!!}</p>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-2 line-hets">
                            <p>Catatan</p>
                        </div>
                        <div class="col-md-10 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
     		</div>
      
     	</div>
     </div>


    </div>




@endsection