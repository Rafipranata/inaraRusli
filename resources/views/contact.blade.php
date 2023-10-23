@extends('vendor.template')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact-us" class="contact-us">
        <div class="container">
  
          <div >
            {!!$location->content!!}
            {{-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
          </div>
  
          <div class="row mt-5">
  
            <div class="col-lg-4">
              <div class="info mb-4">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
  
              </div>
  
            </div>
            
            <div class="col-lg-4">
              <div class="info mb-4">
                <div class="address">
                  <i class="bi bi-youtube"></i>
                  <h4>Youtube:</h4>
                  <a href="{{$youtube->content}}" target="_blank"><p>{{$youtube->content}}</p></a>
                </div>
  
                <div class="email">
                  <i class="bi bi-instagram"></i>
                  <h4>Instagram:</h4>
                  <p>{{$instagram->content}} </p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-twitter"></i>
                  <h4>twitter:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
  
              </div>
  
            </div>
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-facebook"></i>
                  <h4>Facebook:</h4>
                  <p>{{$facebook->content}}</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-tiktok"></i>
                  <h4>Tiktok:</h4>
                  <p>info@example.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-threads"></i>
                  <h4>Threads:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
  
              </div>
  
            </div>
  
  
          </div>
  
        </div>
      </section>

</main>
    
@endsection