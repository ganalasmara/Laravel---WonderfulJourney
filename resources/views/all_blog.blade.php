@extends('layouts.main')

@section('content')
    
    <h1 style="padding-top: 50px" class="text-center">Blog List</h1>

    <div class="container" style="padding-top: 50px">
        <div class="row">
            <table class="table table-dark table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($article as $r)
                  <tr>
                    <td>{{ $r->title }}</td>
                    <td>{{ $r->user->name }}</td>
                    <td>{{ $r->category->name }}</td>
                    <td><a href="/blog/delete/{{ $r->id }}" type="button" class="btn btn-primary">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection