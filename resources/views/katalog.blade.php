@extends('vendor.template')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Katalog</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Katalog</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="section-title">
        <h2>Katalog</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="gallery-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($kategori as $produk)
              <li data-filter=".{{Str::slug($produk->kategori)}}">{{$produk->kategori}} </li>
              @endforeach
            </ul>
        </div>
      </div>

      <div class="row gallery-container">

        @foreach ($data as $catalog)
        <div class="col-lg-4 col-md-6 gallery-item {{Str::slug($catalog->kategori->kategori)}}">
          <div class="gallery-wrap">
            <img src="{{asset('photoProduk/'.$catalog->productImage)}} " class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>{{$catalog->productName}}</h4>
              <p>IDR {{ number_format($catalog->productPrice)}}</p>
              <div class="gallery-links">
                <a href="{{asset('photoProduk/'.$catalog->productImage)}}" class="glightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="d-flex justify-content-end m-auto">
          {{$data->links()}}

        </div> --}}
        
        @endforeach
      </div>
    </div>
  </section>
    
@endsection