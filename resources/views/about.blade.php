@extends('vendor.template')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>About</li>
        </ol>
      </div>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Event List Section ======= -->
  <section id="event-list" class="event-list">
    <div class="container">

      
      <div class="row">
        @foreach ($data as $about)
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="{{asset('photoAbout/'.$about->photo)}} " alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$about->title}} </h5>
              <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
              <p class="card-text">{{$about->description}} </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Event List Section -->

@endsection