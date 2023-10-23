@extends('./vendor.templateAdmin')

@section('content')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1>Gallery</h1>
            <nav>
            <ol class="breadcrumb">      
                <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
                <li class="breadcrumb-item">Gallery</li>
                
            </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">
           <!-- Top Selling -->
           <div class="col-12">
            <div class="card top-selling overflow-auto">
    
              
              <div class="card-body pb-0">
                <h5 class="card-title">Gallery <span>| Today</span></h5>
    
                <div class="row">
                    
                    <div class="col mb-3">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Tambah +
                      </button></div>
                </div>

                {{-- modal input gallery --}}
                <div class="modal fade" id="basicModal" tabindex="-1">
                  <form action="{{route('admin.insertGallery')}}" method="POST" enctype="multipart/form-data">
  
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Tambah Gallery</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label" >Image</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputText" name="photo" >
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
                </div>
              {{-- end modal input gallery --}}
    
                <table class="table table-borderless">
                  <thead>
                    
                    <tr>
                      <th scope="col">Preview</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $gallery)
                    <tr>
                      <th scope="row">
                        <a href="#"><img src="{{asset('photoGallery/'. $gallery->photo)}}" alt="Eror"></a> 
                      </th>
                      <td class="fw-bold  "><a href="/admin/ubahGallery/{{$gallery->id}}" class="text-warning"><i class="bi bi-pencil"></i></a></td>
                      <td class="fw-bold "><a href="/admin/deleteGallery/{{$gallery->id}}" class="text-danger"><i class="bi bi-trash"></i></a></td>
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
                
                <div class="d-flex justify-content-end me-3">
                  {{$data->links()}}
    
                </div>
    
              </div>
    
            </div>
          </div><!-- End Top Selling -->
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