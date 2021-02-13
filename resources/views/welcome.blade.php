@extends('layouts.main')

@section('content')
    
        <div style="color:white" class="text-center">
            <h1>Wonderful Journey</h1>
            <h2>Blog of Indonesia Tourism</h2>
        </div>

    <div class="container" style="padding-top: 50px">
        <div class="row">
            @foreach ($article as $r)
            <div class="col-md-4 mb-3 d-flex justify-content-center text-center">
                <div class="card scale" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">{{ $r->title }}</h5>
                      <p class="card-text">{{ $r->description }}</p>
                      <p>Category: @if($r->category_id==1) <a href="/category/1">Mountain</a>
                        @elseif($r->category_id==2) <a href="/category/2">Beach</a>
                        @else <a href="/category/3">Culinary</a>
                        @endif
                      </p>
                      <button type="button " class="btn btn-dark"><a href="/detail/{{ $r->id }}" class="card-link text-white">Baca lebih lanjut</a></button>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection