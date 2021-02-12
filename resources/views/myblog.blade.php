@extends('layouts.main')

@section('content')
    
    <div class="container" style="padding-top: 150px">
        <div class="row">
            <td><a href="/create" type="button" class="btn btn-primary mb-3">Create Blog</a></td>
            <table class="table table-dark table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($article as $ar)
                  <tr>
                    <td><a href="/detail/{{ $ar->id }}"> {{ $ar->title }}</a></td>
                    <td><a href="/myblog/delete/{{ $ar->id }}" type="button" class="btn btn-primary">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection