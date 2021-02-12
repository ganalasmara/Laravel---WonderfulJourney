@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <h1 class="text-center">{{ $category->name }}</h1>

        </div>
        </div>
    
    </div>

    <div class="container" style="padding-top: 50px">
        <div class="row">
            @foreach ($article as $r)
            <div class="col-md-6 mb-3 d-flex justify-content-center text-center">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">{{ $r->title }}</h5>
                      <p class="card-text">{{ $r->description }}</p>
                      <p>Category: @if($r->category_id==1) <a href="/category/1">Pegunungan</a>
                        @else <a href="/category/2">Pantai</a>
                        @endif
                      </p>
                      
                      
                      <button type="button" class="btn btn-primary"><a href="/detail/{{ $r->id }}" class="card-link text-white">Read more</a></button>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>


@endsection