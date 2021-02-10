@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
            <p class="quote">{{ $category->name }}</p>

        </div>
        </div>
    
    </div>

    <div class="container" style="padding-top: 50px">
        <div class="row">
            @foreach ($article as $ar)
            <div class="col-md-4 mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">{{ $ar->title }}</h5>
                      <p class="card-text">{{ $ar->description }}</p>
                      <p>Category: @if($ar->categories_id==1) <a href="/category/1">Mountain</a>
                        @else <a href="/category/2">Beach</a>
                        @endif
                      </p>
                      
                      <a href="/detail/{{ $ar->id }}" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 d-flex justify-content-center">
                {{$article->links()}}
            </div>
        </div>
    </div>


@endsection