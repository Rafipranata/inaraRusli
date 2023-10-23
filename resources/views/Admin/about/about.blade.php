@extends('./vendor.templateAdmin')

@section('content')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1>About</h1>
            <nav>
            <ol class="breadcrumb">      
                <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
                <li class="breadcrumb-item">About</li>
                
            </ol>
            </nav>
        </div>

        <section class="secttion dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                      <div class="card-body pb-0">
                        <h5 class="card-title">About <span>| Today</span></h5>
            
                        <div class="row">
                            
                            <div class="col mb-3">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                Tambah +
                              </button></div>
                            
                            
                            <div class="col-auto mb-3">
                                <form class="d-flex" action="" method="GET">
                                    <input class="form-control me-2 " name="search" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                        {{-- modal input artikel --}}
                        <div class="modal fade" id="basicModal" tabindex="-1">
                          <form action="{{route('admin.insertAbout')}}" method="POST" enctype="multipart/form-data"> 
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Tambah About</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                @csrf
                                <div class="col-md-12 mb-2">
                                  <label for="inputName5" class="form-label">Title</label>
                                  <input type="text" class="form-control" id="inputName5" name="title">
                                </div>
                                
                                <div class="col-md-12 mb-2">
                                  <label for="inputName5" class="form-label">Description</label>
                                  <textarea type="text" class="form-control" style="height: 150px;" name="description" id="inputName5" name="title"></textarea>
                                </div>
                                
                                <div class="col-md-12 mb-2">
                                  <label for="inputName5" class="form-label">Photo</label>
                                  <input type="file" class="form-control" id="inputName5" name="photo">
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
          
            
                        <table class="table table-borderless">
                            <thead class="text-center">
                            
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col w-50">Title</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                          <tbody class="text-center">
                                @forelse ($data as $about)
                                    
                                
                                <tr>
                                    <th scope="row">
                                <a href="#"><img src="{{asset('photoAbout/'.$about->photo)}} " alt=""></a>
                              </th>
                              <td class="w-50">
                                <a href="#" class="text-dark fw-bold">{{$about->title}} </a>
                            </td>
                            <td class="fw-bold"><a href="/admin/detailAbout/{{$about->id}}" class="text-info"><i class="bi bi-info-circle"></i></a></td>
                            
                            <td class="fw-bold  "><a href="/admin/ubahAbout/{{$about->id}}" class="text-warning"><i class="bi bi-pencil"></i></a></td>
                            <td class="fw-bold "><a href="/admin/deleteAbout/{{$about->id}}" class="text-danger"><i class="bi bi-trash"></i></a></td>
                        </tr>

                        @empty
                    <tr>
                      <td colspan="99" align="center">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Artikel Tidak Ada
                        </div>
                      </td>
                    </tr>
                
                        
                        @endforelse
                          </tbody>
                        </table>
                        <div class="d-flex justify-content-end me-3">
                          {{$data->links()}}
            
                        </div>
                      </div>
            
                    </div>
                  </div><!-- End Top Selling -->
            

            </div>
        </section>

    </div>

    <script>
      
      const todayElement = document.querySelector(".card-title span");
    
      
      const currentDate = new Date();
    
      // Format tanggal "dd MMMM yyyy" 
      let options = { year: 'numeric', month: 'long', day: 'numeric' };
      let formattedDate = currentDate.toLocaleDateString('id-ID', options);
    
      // Perbarui teks "Today" dengan tanggal 
      todayElement.textContent = "| " + formattedDate;
    </script>
    
@endsection