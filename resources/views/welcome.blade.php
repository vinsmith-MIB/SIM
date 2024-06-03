@extends('layouts.app')


@section('header')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <!-- Container wrapper -->
  <div class="container justify-content-center justify-content-md-between">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hot offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gift boxes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu name</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#">Action</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another action</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
@endsection


@section('content')

<!--Main Navigation-->



<!--  intro  -->
<section class="mt-3">
  <div class="container">
    <main class="card p-3 shadow-2-strong">
      <div class="row">
        <div class="col-lg-3">
          <nav class="nav flex-column nav-pills mb-md-2">
            @foreach ($categories as $category)
            <a id="category-list" class="nav-link my-0 py-2 ps-3 bg-white" href="{{route('search',['category' => $category->nama_kategori])}}">{{ $category->nama_kategori }}</a>
            @endforeach
          </nav>
        </div>
        <div class="col-lg-9">
          <div class="card-banner h-auto p-5 bg-primary rounded-5" style="height: 350px;">
            <div>
              <h2 class="text-white">
                Great products with <br />
                best deals
              </h2>
              <p class="text-white">No matter how far along you are in your sophistication as an amateur astronomer, there is always one.</p>
              <a href="{{route('search')}}" class="btn btn-light shadow-0 text-primary"> View more </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- container end.// -->
</section>
<!-- intro -->

<!-- Products -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>New products</h3>
    </header>
    <div class="row">
      @foreach ($products as $product)
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="img-wrap">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-success pt-2">Offer</span></h6>
              </div>
            </div>
            <img src="{{asset('storage/products/'.$product->gambar)}}" class="card-img-top" style="aspect-ratio: 1 / 1">
          </a>
          <div class="card-body p-0 pt-3 mx-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">Rp. {{number_format($product->harga, 0, ',', '.');}}</h5>
            <p class="card-text mb-0">{{$product->nama_produk}}</p>
            <p class="text-muted text-truncate">
            {{$product->keterangan}}
            </p>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- Products -->

<!-- Feature -->
<section class="">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="card-banner bg-gray h-100" style="
                                                      min-height: 200px;
                                                      background-size: cover;
                                                      background-position: center;
                                                      width: 100%;
                                                      background-repeat: no-repeat;
                                                      top: 50%;
                                                      background-image: url('{{asset('storage/products/'.$productDiscount->gambar)}}');">
          <div class="p-3 p-lg-5" style="max-width: 70%;">
            <h3 class="text-dark">Best products & brands in our store at 80% off</h3>
            <p>That's true but not always</p>
            <button class="btn btn-warning shadow-0" href="#"> Claim offer </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
          <div class="col-6 d-flex">
            <div class="card w-100 bg-primary" style="min-height: 200px;">
              <div class="card-body">
                <h5 class="text-white">Gaming toolset</h5>
                <p class="text-white-50">Technology for cyber sport</p>
                <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex">
            <div class="card w-100 bg-primary" style="min-height: 200px;">
              <div class="card-body">
                <h5 class="text-white">Quality sound</h5>
                <p class="text-white-50">All you need for music</p>
                <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row.// -->

        <div class="card bg-success" style="min-height: 200px;">
          <div class="card-body">
            <h5 class="text-white">Buy 2 items, With special gift</h5>
            <p class="text-white-50" style="max-width: 400px;">Buy one, get one free marketing strategy helps your business improves the brand by sharing the profits</p>
            <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
          </div>
        </div>
      </div>
      <!-- col.// -->
    </div>
    <!-- row.// -->
  </div>
  <!-- container end.// -->
</section>
<!-- Feature -->

<!-- Recently viewed -->
<section class="mt-5 mb-4">
  <div class="container text-dark">
    <header class="">
      <h3 class="section-title">Recently viewed</h3>
    </header>

    <div class="row gy-3">
      @for ($i = 0; $i < 6 ; $i++) 
      <div class="col-lg-2 col-md-4 col-4">
        <a href="#" class="img-wrap">
            <img height="200" width="200" class="object-fit-cover img-thumbnail" style="height:100%;" src="{{asset('storage/products/'.$products[$i]->gambar)}}" />
        </a>
      </div>
      @endfor
      
    </div>
  </div>
</section>
<!-- Recently viewed -->

<section>
  <div class="container">
    <div class="px-4 pt-3 border">
      <div class="row pt-1">
        <div class="col-lg-3 col-md-6 mb-3 d-flex">
          <div class="d-flex align-items-center">
            <div class="badge badge-warning p-2 rounded-4 me-3">
              <i class="fas fa-thumbs-up fa-2x fa-fw"></i>
            </div>
            <span class="info">
              <h6 class="title">Reasonable prices</h6>
              <p class="mb-0">Have you ever finally just</p>
            </span>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3 d-flex">
          <div class="d-flex align-items-center">
            <div class="badge badge-warning p-2 rounded-4 me-3">
              <i class="fas fa-plane fa-2x fa-fw"></i>
            </div>
            <span class="info">
              <h6 class="title">Worldwide shipping</h6>
              <p class="mb-0">Have you ever finally just</p>
            </span>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3 d-flex">
          <div class="d-flex align-items-center">
            <div class="badge badge-warning p-2 rounded-4 me-3">
              <i class="fas fa-star fa-2x fa-fw"></i>
            </div>
            <span class="info">
              <h6 class="title">Best ratings</h6>
              <p class="mb-0">Have you ever finally just</p>
            </span>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3 d-flex">
          <div class="d-flex align-items-center">
            <div class="badge badge-warning p-2 rounded-4 me-3">
              <i class="fas fa-phone-alt fa-2x fa-fw"></i>
            </div>
            <span class="info">
              <h6 class="title">Help center</h6>
              <p class="mb-0">Have you ever finally just</p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection