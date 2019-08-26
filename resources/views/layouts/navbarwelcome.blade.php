<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styleup.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300&display=swap" rel="stylesheet">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
    <body>

     <nav class="navbar navbar-expand-lg navbar-light is-visible navigation-bar navnav">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-nav-status="toggle">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-5">
      <li class="nav-item">
        <a class="nav-link" href="#">0881-720-8483</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">irvslyy23@gmail.com</a>
      </li>
   </ul>
    
    <ul class="nav navbar-nav navbar-right mrse-5">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user-circle"></i> Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-sign-in-alt"></i> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
      </div>
    </nav>




    <!-- nav 2 -->

     <nav class="navbar navbar-expand-lg navbar-light is-visible navigation-bar navnavs">



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-5">
      <li class="nav-item color font">
        <h3 class="text-head mt-1">DROPAND SHOP</h3>
      </li>
     
   </ul>
    
    <ul class="nav navbar-nav navbar-right mrse-5">
                        <!-- Authentication Links -->
                    
                            <li class="nav-item"><a class="nav-link text-cart" href="#"> <i class="fas fa-shopping-cart text-certs"></i></i> Keranjang</a></li>
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
           
       <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-align-justify"></i>
          KATEGORI
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Smartphone & Tablet</a>
          <a class="dropdown-item" href="#">Komputer & Laptop</a>
          <a class="dropdown-item" href="#">Aksesoris</a>
          <a class="dropdown-item" href="#">Gadget</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>      
      </div>
    </nav>

    <!-- nav 3 -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('img/ab.jpeg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('img/ab.jpeg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('img/ab.jpeg')}}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <section class="info-panel info-2">
      <div class="container">
        <div class="row info-panel-row justify-content-center pd-5">
          <div class="col-lg-8">
            <div class="row justify-content-center text-center pds-5 backs">
              <div class="col-lg-3">
                  <i class="fas fa-truck-moving size-info-font mb-2"></i>
                 <h3 class="text-infos">Free Ongkir</h3>
                 <p class="text-desc-info">Kami menyediakan banyak kurir untuk mengantar barang anda.</p>
              </div>
              <div class="col-lg-3">
                 <i class="fas fa-money-check-alt size-info-font mb-2"></i>
                    <h3 class="text-infos">Murah Meriah</h3>
                 <p class="text-desc-info">Dropandshop menjual barang murah dan original</p>
              </div>
              <div class="col-lg-3">
                
                     <i class="fas fa-recycle size-info-font mb-2"></i>
                    <h3 class="text-infos">Garansi pengembalian</h3>
                 <p class="text-desc-info">Garansi pengembalian barang apabila barang rusak dijalan</p>
              </div>
              <div class="col-lg-3">
                 <i class="fas fa-tags size-info-font mb-2"></i>
                 <h3 class="text-infos">Original Produk  </h3>
                 <p class="text-desc-info">Kami hanya menjual barang original </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





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

    <footer id="sticky-footer mt-5 off-shadow" class="py-4 bg-darken text-white-50 foot-line">
    <div class="container text-center">
      <small class="text-foot">Design Theme BY IrvsLyy23. All Right Reserved <i class="fas fa-heart"></i></small>
    </div>
  </footer>



    </body>
  <!--   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/56a5f81545.js"></script>
       
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
</html>