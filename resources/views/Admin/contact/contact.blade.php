@extends('./vendor.templateAdmin')

@section('content')
    <div class="main" id="main">

        <div class="pagetitle">
            <h1>Contact</h1>
            <nav>
            <ol class="breadcrumb">      
                <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{route('admin.catalog')}} ">Contact</a></li>
            </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Contact</h5>
        
                      <!-- Horizontal Form -->
                      <form action="{{route('admin.updateContact')}}" method="POST">
                        @csrf

                        @foreach ($data as $contact)
                            
                        <div class="row mb-3">
                            
                            <label for="inputEmail3" class="col-sm-2 col-form-label">{{$contact->title}} </label>
                            <div class="col-sm-10">
                                <input type="hidden" value="{{$contact->id}}" name="id[]" >
                                <input name="content[]" type="text" class="form-control" id="inputText" value="{{$contact->content}}">
                            </div>
                        </div>
                        @endforeach
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