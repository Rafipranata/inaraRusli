@extends('./vendor.templateAdmin')

@section('content')
    <div class="main" id="main">
            <div class="pagetitle">
                <h1>Catalog</h1>
                <nav>
                <ol class="breadcrumb">      
                    <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
                    <li class="breadcrumb-item">Catalog</li>
                    
                </ol>
                </nav>
            </div>

            <div class="col-xxl-4 col-xl-12">

              <div class="card top-selling overflow-auto ">
                <div class="card-body pb-0">
                  <h5 class="card-title">Kategori Produk <span>| Today</span></h5>

            <div class="row">
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                  Tambah +
                </button></div>
              
            </div>

            {{-- modal input kategori --}}
            <div class="modal fade" id="basicModal" tabindex="-1">
              <form action="{{ route('admin.insertKategori')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Kategori</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    @csrf
                    <div class="col-md-12">
                      <label for="inputName5" class="form-label">Nama Kategori</label>
                      <input type="text" class="form-control" id="inputName5" name="kategori">
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

            {{-- end modal input kategori --}}
                  <table class="table table-borderless">
                    <thead class="text">
                      
                      <tr>
                        <th scope="col">Kategori</th>
                        
                        
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody class="text">
                      
                          @foreach ($dataKategori as $nama)
                              
                          <tr>
                            <td scope="row">{{$nama ->kategori}}</td>
                            
                            
                            
                            <td class="fw-bold  "><a href="#" class="text-warning"><i class="bi bi-pencil"></i></a></td>
                            <td class="fw-bold "><a href="/admin/deleteKategori/{{$nama->id}}" class="text-danger"><i class="bi bi-trash"></i></a></td>
                            @endforeach
                      </tr>
                      
                      
                    </tbody>
                  </table>
      
                </div>
              
            </div>

    <section class="section dashboard">
        <div class="row">
          
                  
      

       <!-- Top Selling -->
       <div class="col-12">
        <div class="card top-selling overflow-auto">
          <div class="card-body pb-0">
            <h5 class="card-title">Produk</h5>

            <div class="row">
                
                <div class="col mb-3">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModalProduk">
                    Tambah +
                  </button>
                </div>

                <div class="modal fade" id="basicModalProduk" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('admin.insertCatalog')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                          <label for="inputNanme4" class="form-label">Produk Name</label>
                          <input type="text" class="form-control" required id="inputNanme4" name="productName">
                        </div>
                          <div class="col-12">
                            <label for="inputEmail4" class="form-label">Produk Price</label>
                            <input type="number" class="form-control" required id="inputEmail4" name="productPrice">
                          </div>
                          <div class="col-12">
                            <label for="inputEmail4" class="form-label">Kategori</label>
                            
                            <select class="form-control"  name="kategori_id">
                              @foreach ($kategori as $kategoris)
                              <option value="{{$kategoris->id}}">{{$kategoris->kategori}} </option>
                              @endforeach
                            </select>
                          </div>
                    
                                <div class="col-12">
                                    <label for="inputPassword4" class="form-label">Deskripsi</label>
                                    <textarea name="description" id="" required style="height: 150px" class="form-control"></textarea>
                                </div>
                          <div class="col-12">
                              <label for="inputPassword4" class="form-label">Produk Image</label>
                              <input type="file" class="form-control" required id="inputPassword4" name="productImage">
                              <label for="inputEmail3" class=" col-form-label text-danger" >Gunakan Ukuran Foto Yang Sama</label>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                  </form>
                </div>
    
              </div>
                
                
                <div class="col-auto mb-3">
                  <form class="d-flex" action="" method="GET">
                    <input class="form-control me-2 " name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              
            <table class="table table-borderless">
              <thead class="text-center">
                
                <tr>
                  <th scope="col">Preview</th>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @forelse ($data as $product)
                    
                <tr>
                  <th scope="row">
                    <a href="#"><img src="{{asset('photoProduk/'.$product->productImage)}}" alt=""></a>
                  </th>
                  <td>
                    <a href="#" class="text-dark fw-bold">{{$product->productName}}</a>
                  </td>
                  <td>IDR {{ number_format($product->productPrice)}}</td>
                  
                  <td class="fw-bold  "><a href="/admin/lihatCatalog/{{$product->id}}" class="text-warning"><i class="bi bi-pencil"></i></a></td>
                  <td class="fw-bold "><a href="/admin/deleteCatalog/{{$product->id}}" class="text-danger"><i class="bi bi-trash"></i></a></td>
                </tr>
                
                @empty
                    <tr>
                      <td colspan="99" align="center">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Produk Tidak Ada
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
              </div><!-- End Left side columns -->
          
                  <!-- Right side columns -->
                  
    </section>
          
    </div>

    @include('sweetalert::alert')
    <script> 
      const todayElement = document.querySelector(".card-title span");
      const currentDate = new Date();
    
      // Format tanggal "dd MMMM yyyy" 
      let options = { year: 'numeric', month: 'long', day: 'numeric' };
      let formattedDate = currentDate.toLocaleDateString('id-ID', options);
    
      // Mengganti teks "Today" dengan tanggal 
      todayElement.textContent = "| " + formattedDate;
    </script>
    
@endsection