@extends('./vendor.templateAdmin')

@section('content')
    <div class="main" id="main">
        <section class="section dashboard">
            <div class="row">
      
              <!-- Left side columns -->
              <div class="col-lg-8">
                <div class="row">
      
                  <!-- Sales Card -->
                  <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
      
                      
                      <div class="card-body">
                        <h5 class="card-title">Catalog</h5>
      
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{$jumlahCatalog}}</h6>
                            
                          </div>
                        </div>
                      </div>
      
                    </div>
                  </div><!-- End Sales Card -->
      
                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
      
                      
                      <div class="card-body">
                        <h5 class="card-title">Gallery</h5>
      
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-image"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{$jumlahGallery}}</h6>
                            
                          </div>
                        </div>
                      </div>
      
                    </div>
                  </div><!-- End Revenue Card -->
      
                  <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card top-selling overflow-auto ">
                <div class="card-body pb-0">
                  <h5 class="card-title">Carousel Image <span>| Today</span></h5>

            <div class="row">
                
                <div class="col mb-3">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Tambah +
                  </button></div>
                
                
                
            </div>

                  <table class="table table-borderless">
                    <thead class="text">
                      
                      <tr>
                        <th scope="col">Preview</th>
                        
                        
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody class="text">
                      
                      @foreach ($data as $page)
                          <tr>
                            <th scope="row">
                          <a href="#"><img src="{{asset('photoCarousel/'.$page->carouselImage)}}" alt=""></a>
                        </th>
                        
                        
                        
                        <td class="fw-bold  "><a href="/admin/ubahCarousel/{{$page->id}}" class="text-warning"><i class="bi bi-pencil"></i></a></td>
                        <td class="fw-bold "><a href="/admin/deleteCarousel/{{$page->id}}" class="text-danger"><i class="bi bi-trash"></i></a></td>
                      </tr>
                      @endforeach
                    
                      
                      
                    </tbody>
                  </table>
      
                </div>
              </div>

              

              {{-- modal input gambar carousel  --}}
              <div class="modal fade" id="basicModal" tabindex="-1">
                <form action=" {{route('admin.insertCarousel')}} " method="POST" enctype="multipart/form-data">

                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Carousel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      @csrf
                      <div class="row mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label" >Image</label>
                          <div class="col-sm-10">
                          <input type="file" class="form-control" id="inputText" name="carouselImage" >
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
              </div><!-- End Basic Modal-->

              {{-- end modal input gambar carousel  --}}


  
                  </div>
  
            </div><!-- End Customers Card -->
  
            <div class="col-xxl-4 col-xl-12">

              <div class="card top-selling overflow-auto ">
                <div class="card-body pb-0">
                  <h5 class="card-title">About <span>| Today</span></h5>

            <div class="row">
                
            </div>

                  <table class="table table-borderless">
                    <thead class="text">
                      
                      <tr>
                        <th scope="col">Preview</th>
                        
                        
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody class="text">
                      
                          
                          <tr>
                            <th scope="row">
                            <a href="#"><img src="#" alt=""></a>
                        </th>
                        
                        
                        
                        <td class="fw-bold  "><a href="#" class="text-warning"><i class="bi bi-pencil"></i></a></td>
                        <td class="fw-bold "><a href="#" class="text-danger"><i class="bi bi-trash"></i></a></td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
      
                </div>
              
            </div>
      </section>
      
    </div>
    <script>
      var todayElement = document.querySelector(".card-title span");
      var currentDate = new Date();

      // Format tanggal menjadi "dd MMMM yyyy"
      var options = { year: 'numeric', month: 'long', day: 'numeric' };
      var formattedDate = currentDate.toLocaleDateString('id-ID', options);
    
      // Menganti teks "Today" dengan tanggal 
      todayElement.textContent = "| " + formattedDate;
    </script>
    
@endsection