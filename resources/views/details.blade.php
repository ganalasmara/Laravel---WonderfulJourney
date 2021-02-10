@extends('layouts.main')

@section('content')
    

    <div class="container" style="padding-top: 50px">
        <div class="row">
            <h2>{{ $article->title }}</h2>
            
        </div>
        <div class="row">
            <img src="{{ $article->photo }}" alt="" style="padding-bottom: 50px">
            <p>{{ $article->description }}</p>
        </div>
    </div>

@endsection