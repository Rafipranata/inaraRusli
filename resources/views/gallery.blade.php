@extends('vendor.template')
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Gallery</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Gallery</li>
        </ol>
      </div>

    </div>
  </section>


<section id="gallery" class="gallery">
    <div class="container">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

      {{-- <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="gallery-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-home">Home</li>
                <li data-filter=".filter-beach">Beach</li>
                <li data-filter=".filter-vacation">Vacation</li>
              </ul>
        </div>
      </div> --}}

      <!-- Gallery -->
      <div class="row gallery-container">

        {{-- <div class="col-lg-4 col-md-6 gallery-item filter-home">
          <div class="gallery-wrap">
            <img src="assets/img/gallery/home-1.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Home 1</h4>
              <p>Home</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/home-1.jpg" class="glightbox" title="Home 1"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
          <div class="gallery-wrap">
            <img src="assets/img/gallery/vacation-2.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Vacation 2</h4>
              <p>Vacation</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/vacation-2.jpg" class="glightbox" title="Vacation 2"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-home">
          <div class="gallery-wrap">
            <img src="assets/img/gallery/home-2.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Home 2</h4>
              <p>Home</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/home-2.jpg" class="glightbox" title="Home 2"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        </div> --}}


        {{-- <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
          <div class="gallery-wrap">
            <img src="assets/img/gallery/vacation-1.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Vacation 1</h4>
              <p>Vacation</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/vacation-1.jpg" class="glightbox" title="Vacation 1"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-home">
          <div class="gallery-wrap">
            <img src="assets/img/gallery/home-3.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Home 3</h4>
              <p>Home</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/home-3.jpg" class="glightbox" title="Home 3"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
          </div>
        </div> --}}

        @foreach ($data as $gallery)
            
        <div class="col-lg-4 col-md-6 gallery-item filter-beach">
          <div class="gallery-wrap">
            <img src="{{asset('photoGallery/'.$gallery->photo)}} " class="img-fluid" alt="">
            <div class="gallery-info">
              <div class="gallery-links">
                <a href="{{asset('photoGallery/'.$gallery->photo)}}" class="glightbox"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

    
        {{-- <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
          <div class="gallery-wrap">
            <img src="assets/img/gallery/vacation-3.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>Vacation 3</h4>
              <p>Vacation</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/vacation-3.jpg" class="glightbox" title="Vacation 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div> --}}

      </div>

  </section>
    
@endsection