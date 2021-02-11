@extends('layouts.main')

@section('content')
    
    <div class="container" style="padding-top: 150px">
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($article as $ar)
                  <tr>
                    <td>{{ $ar->title }}</td>
                    <td>{{ $ar->user->name }}</td>
                    <td>{{ $ar->category->name }}</td>
                    <td><a href="/blog/delete/{{ $ar->id }}" type="button" class="btn btn-primary">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection