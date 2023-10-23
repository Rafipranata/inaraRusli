@extends('./vendor.templateAdmin')
@section('content')

<div class="main" id="main">
        <div class="pagetitle">
            <h1>About</h1>
            <nav>
            <ol class="breadcrumb">      
                <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{route('admin.about')}} ">About</a></li>
                <li class="breadcrumb-item">Tambah About</li>
                
            </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Artikel About</h5>
    
                    <!-- Horizontal Form -->
                    <form action="{{route('admin.insertAbout')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Title</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" style="font-size: 13px;" name="title" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Description</label>
                        <div class="col-sm-10">
                        <textarea name="description" class="form-control" id="" style="height: 150px; font-size: 13px; "></textarea>    
                        
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Photo</label>
                        <div class="col-sm-10">
                        <input type="file" name="photo" class="form-control" id="">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                    </form><!-- End Horizontal Form -->
    
                </div>
            </div>
        </div>
</div>
@endsection