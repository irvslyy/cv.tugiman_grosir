<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styleup.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300&display=swap" rel="stylesheet">

</head>
    <body class="body-two">


 <nav class="navbar navbar-expand-lg navbar-light is-visible navigation-bar navnavs">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-5">
      <li class="nav-item color font">
        <h3 class="text-head mt-1">DROPAND SHOP</h3>
      </li>
     
   </ul>
    
    <ul class="nav navbar-nav navbar-right mrse-5">
                        <!-- Authentication Links -->
                    
                            <li class="nav-item"><a class="nav-link text-cart" href="{{ route('login') }}"> <i class="fas fa-shopping-cart text-certs"></i></i> Keranjang</a></li>
                    </ul>
      </div>
    </nav>


    <!-- akhir nav 2 -->






    <!-- nav 3 -->

     <nav class="navbar navbar-expand-lg navbar-light is-visible navigation-bar navna">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-nav-status="toggle">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-5">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Shopping</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Tentang kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Hubungi kami</a>
      </li>
   </ul>
    
    <ul class="nav navbar-nav navbar-right mrs-5">
      
    </ul>      
      </div>
    </nav>


       <main class="py-4">
            @yield('content')
        </main>


        <section class="footer-big">
          <div class="container-fluid">
            <div class="row justify-content-center mt-5 mb-5">
              <div class="col-md-4">
                   <h4 class="text-head mt-1">DROPAND SHOP</h4>
                   <h5 class="ask">Mempunyai Pertanyaan?</h5>
                   <p class="number">0813-720-8483</p>
                   <p class="font"> Jl.hajidimun II NO.32</p>
              </div>
              <div class="col-md-2 line-het">
                 <h5 class="text-head mt-1">Kategori</h5><br><br>
                 <p class="font">Smarphone & Tablet</p>
                 <p class="font">Komputer & Laptop</p>
                 <p class="font">All Gadget</p>
                 <p class="font">Baju dan Pakaian</p>
              </div>
              <div class="col-md-2 line-het">
                <h5 class="text-head mt-1">Jelajahi Dropandshop</h5><br><br>
                <p class="font">Home</p>
                <p class="font">Shopping</p>
                <p class="font">Tentang Kami</p>
                <p class="font">Hubungi Kami</p>
              </div>
              <div class="col-md-2 line-het">
                <h5 class="text-head mt-1">Layanan Pelanggan</h5><br><br>

                 <p class="font">Cara pemesananan</p>
                 <p class="font">Pusat Bantuan</p>
                 <p class="font">Pengiriman</p>
                 <p class="font">Cara Pengiriman</p>
                 <p class="font">List Produk</p>
              </div>
            </div>
          </div>
        </section>

    <footer id="sticky-footer mt-5 off-shadow" class="py-4 text-white-50 foot-line">
    <div class="container text-center">
      <small class="text-foot">Design Theme BY IrvsLyy23. All Right Reserved <i class="fas fa-heart"></i></small>
    </div>
  </footer>



    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/56a5f81545.js"></script>
</html>