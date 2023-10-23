@extends('./vendor/templateAdmin')
@section('content')
<div class="main" id="main">
  <div class="pagetitle">
    <h1>Catalog</h1>
    <nav>
    <ol class="breadcrumb">      
        <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
        <li class="breadcrumb-item"><a href=" {{route('admin.catalog')}} ">Catalog</a></li>
        <li class="breadcrumb-item">Tambah Produk</li>
        
    </ol>
    </nav>
</div>


    <section class="section">
        <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tambah Produk</h5>

            <!-- Vertical Form -->
            <form action="{{route('admin.insertCatalog')}}" class="row g-3" method="POST" enctype="multipart/form-data" >
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
                  @foreach ($kategori as $data)
                  <option value="{{$data->id}}">{{$data->kategori}} </option>
                  @endforeach
                </select>
            </div>
            
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Deskripsi</label>
                            <textarea name="description" id="" required cols="20" rows="10"class="form-control"></textarea>
                        </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Produk Image</label>
                <input type="file" class="form-control" required id="inputPassword4" name="productImage">
                <label for="inputEmail3" class=" col-form-label text-danger" >Gunakan Ukuran Foto Yang Sama</label>
            </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
              </div>
          </form><!-- Vertical Form -->

          </div>
        </div>

       
      </div>
    </div>
</section>
</div>
@endsection