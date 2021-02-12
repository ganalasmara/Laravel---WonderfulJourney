@extends('layouts.main')

@section('content')
    

    <div class="container" style="padding-top: 50px">
        <div class="row">
            
            @foreach ($article as $ar)
            
            <div class="col-md-6 mb-3 d-flex justify-content-center text-center">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">{{ $ar->title }}</h5>
                      <p class="card-text">{{ $ar->description }}</p>
                      <p>Category: @if($ar->categories_id==1) <a href="/category/1">Mountain</a>
                        @else <a href="/category/2">Beach</a>
                        @endif
                      </p>
                      
                      <button type="button " class="btn btn-primary"><a href="/detail/{{ $ar->id }}" class="card-link text-white">Read more</a></button>
                    </div>
                </div>
            </div>
          
            @endforeach
            
        </div>
    </div>


@endsection