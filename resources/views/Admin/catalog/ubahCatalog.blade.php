@extends('./vendor/templateAdmin')
@section('content')
<div class="main" id="main">
    <div class="pagetitle">
        <h1>Catalog</h1>
        <nav>
        <ol class="breadcrumb">      
            <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
            <li class="breadcrumb-item"><a href=" {{route('admin.catalog')}} ">Catalog</a></li>
            <li class="breadcrumb-item">Ubah Produk</li>
            
        </ol>
        </nav>
    </div>
    
    
    <section class="section">
        <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ubah Produk "{{$data-> productName}}"</h5>

            <!-- Vertical Form -->
            <form action="{{route('admin.updateCatalog', $data->id)}}" class="row g-3" method="POST" enctype="multipart/form-data" >
            @csrf  
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Produk Name</label>
                <input type="text" class="form-control" id="inputNanme4" name="productName" value="{{$data-> productName}}">
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Produk Price</label>
                <input type="number" class="form-control" id="inputEmail4" name="productPrice" value="{{$data-> productPrice }}">
            </div>
            <select class="form-control"  name="kategori_id">
              @foreach ($kategori as $k)
              <option @selected($k->id == $data->kategori_id) value="{{$k->id}}">{{$k->kategori}} </option>
              @endforeach
            </select>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Deskripsi</label>
                            <textarea name="description" id="" cols="20" rows="10" class="form-control">{{$data-> description}}</textarea>
                        </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Produk Image</label>
                <input type="file" class="form-control" id="inputPassword4" name="productImage">
            </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->
          </div>
        </div>
      </div>
    </div>
</section>
</div>
@endsection