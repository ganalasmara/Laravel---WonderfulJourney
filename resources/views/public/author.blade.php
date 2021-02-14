@extends('layouts.main')

@section('content')
    <div class="container text-white">
        <div class="row">
            <div class="col mt-5">
            <h1 style="color: black" class="gentium text-center">{{ $user->name }}</h1>
        </div>
        </div>
    
    </div>

    <div class="container" style="padding-top: 50px">
        <div class="row">
            @foreach ($article as $r)
            <a style="color: black" class="card-link" href="/detail/{{ $r->id }}">
            <div class="col-md-4 mb-3 d-flex justify-content-center text-center">
                <div class="card scale" style="width: 30rem;">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">{{ $r->title }}</h5>
                      <p class="card-text">{{ $r->description }}</p>
                      <p>Category: <a href="/category/{{ $r->category->id }}">{{ $r->category->name }}</a>
                      </p>

                    </div>
                </div>
            </div>
            </a>
            @endforeach
            
        </div>
    </div>


@endsection