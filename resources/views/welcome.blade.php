@extends('layouts.main')

@section('content')
{{-- I MADE GANAL ASMARA JAYA - 2201799386 --}}

    <div class="container">
      <div class="img-header">
      <img class="img-fluid mx-auto border border-secondary rounded" src="../img/homepage.jpg" alt="">
      <div class="centered"><h1 class="gentium" style="color: white; font-size: 35pt">Wonderful Journey</h1></div>
      <div style="padding-top: 100px; font-size: 10pt" class="centered"><h1 class="gentium" style="color: white">Blog of Indonesia Tourism</h1></div>
      </div>
      
      <div style="padding-top: 30px" class="row">
        <div class="row mr-auto ml-auto mb-4">
        <h1 class="gentium " style="color: black; font-size: 25pt">All Articles</h1>
        
      </div>
      
        
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
            <div class="col-md-12 d-flex justify-content-center">
              {{$article->links()}}
            </div>
          </div>
        </div>
    </div>
@endsection