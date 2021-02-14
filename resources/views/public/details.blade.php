@extends('layouts.main')

@section('content')
    
   <div class="container text-center">
    <div class="container text-center mb-2">
        <div class="row">
            <div class="col mt-5">
            <h1 style="color: black" class="gentium text-center">{{ $article->title }}</h1>
        </div>
        <div class="row justify-content-center">
            <img class="mx-auto img-fluid" src="{{ $article->photo }}" alt="" style="padding-bottom: 20px">
            <p class="text-black">Author: <a href="/author/{{ $article->user_id }}">{{ $article->user->name }}</a></p>
            <p class="text-black">{{ $article->description }}</p>
        </div>
        <br>
        
    </div>
    <button onclick="goBack()" type="button" class="btn btn-dark">Back</button>
</div>

@endsection