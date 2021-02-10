@extends('layouts.main')
{{-- //I MADE GANAL ASMARA JAYA - 2201799386 --}}
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
            <p class="quote">Wonderful Journey</p>
            <p class="quote">Blog of Indonesia Tourism</p>
        </div>
        </div>
    
    </div>

    <div class="container" style="padding-top: 50px">
        <div class="row">
            @foreach ($article as $ar)
            <div class="col-md-4">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">{{ $ar->title }}</h5>
                      <p class="card-text">{{ $ar->description }}</p>
                      <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection