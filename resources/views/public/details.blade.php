@extends('layouts.main')

@section('content')
    
   <div class="container text-center">
    <div class="container text-center mb-2 " style="background-color:rgba(255,255,255,0.1); padding-top: 50px">
        <div class="row justify-content-center text-white">
            <h2>{{ $article->title }}</h2>
            
        </div>
        <div class="row">
            <img class="mx-auto img-fluid" src="{{ $article->photo }}" alt="" style="padding-bottom: 50px">
            <p class="text-white">{{ $article->description }}</p>
        </div>
        <br>
        
    </div>
    <button style="padding-top: " type="button " class="btn btn-dark"><a href="/" class="card-link text-white">Back</a></button>
</div>

@endsection