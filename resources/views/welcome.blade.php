
@extends('vendor.template')

@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
 
        
            
        @foreach ($data as $carousel)
            
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('photoCarousel/'. $carousel->carouselImage)}})">
        </div>
        
        @endforeach
        
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  
  
  <section id="about" class="about">
    
    <div class="container">
      <div class="section-title">
        <h2> About </h2>
        <p>  deskripsi About </p>
      </div>
      
      <div class="row content">
        @foreach ($aboutHome as $about)
        <div class="col-lg-6">
          <img src="assets/img/inara1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            {{$about->description}}
            
          </p>
          <p>
            {{$about->descriptionSecond}}
            
          </p>
          <a href="/about" class="btn-learn-more">About Me</a>
        </div>
      </div>
      @endforeach
      
        </div>
      </section>
      <section id="recent-photos" class="recent-photos">
        <div class="container">

      <div class="section-title">
        <h2> Gallery </h2>
        <p> deskripsi gallery </p>
      </div>
      
      <div class="recent-photos-slider swiper">
        
        <div class="swiper-wrapper align-items-center">
          @foreach ($gallery as $data)
          <div class="swiper-slide">
            <a href="{{asset('photoGallery/'.$data->photo)}}" class="glightbox">
              <img src="{{asset('photoGallery/'.$data->photo)}}" class="img-fluid" alt=""></a>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        
    </div>
  </section><!-- End Recent Photos Section -->
  
  
  
  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="section-title">
        <h2> Katalog </h2>
        <p> sub Katalog </p>
    </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="gallery-flters">
            <li data-filter="*" class="filter">Katalog Produk Terbaru</li>
          </ul>
        </div>
      </div>

      <div class="row gallery-container">

        
        @foreach ($catalog as $data)
        <div class="col-lg-4 col-md-6 gallery-item filter-beach">
          <div class="gallery-wrap">
            <img src="{{asset('photoProduk/'.$data->productImage)}} " class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>{{$data->productName}}</h4>
              <p>IDR {{ number_format($data->productPrice)}}</p>
              <div class="gallery-links">
                <a href="{{asset('photoProduk/'.$data->productImage)}}" class="glightbox"><i class="bx bx-chart"></i></a>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </div>
      {{-- <div class="d-flex justify-content-end me-3">
        {{$catalog->links()}}

      </div> --}}
    </div>
  </section><!-- End Gallery Section -->
  

    
@endsection