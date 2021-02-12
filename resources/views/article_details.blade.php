@extends('layouts.main')

@section('content')
    

    <div class="container text-center" style="padding-top: 50px">
        <div class="row justify-content-center">
            <h2>{{ $article->title }}</h2>
            
        </div>
        <div class="row">
            <img class="mx-auto" src="{{ $article->photo }}" alt="" style="padding-bottom: 50px">
            <p>{{ $article->description }}</p>
        </div>
        <button type="button " class="btn btn-primary"><a href="/" class="card-link text-white">Back</a></button>
    </div>

@endsection