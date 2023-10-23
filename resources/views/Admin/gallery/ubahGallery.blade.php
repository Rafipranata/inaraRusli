@extends('./vendor.templateAdmin')

@section('content')
<div class="main" id="main">
    <div class="pagetitle">
        <h1>Gallery</h1>
        <nav>
        <ol class="breadcrumb">      
            <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
            <li class="breadcrumb-item">Gallery</li>
            <li class="breadcrumb-item">ubah Foto</li>
            
        </ol>
        </nav>
    </div>
    
    <section class="section">
        <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Foto Gallery</h5>

                <!-- Horizontal Form -->
                <form action=" {{route('admin.updateGallery', $data->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >Image</label>
                    <div class="col-sm-10">
                        <img src="{{asset('photoGallery/'. $data->photo)}}" width="300" height="200" alt="Foto Eror">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >Image Update</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputText" name="photo" >
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                </form><!-- End Horizontal Form -->

            </div>
        </div>
    </div>
  </section>
</div>
@endsection