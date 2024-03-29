@extends('layouts.main')

@section('content')
    @if(Session::has('successMsg'))
    <div class="alert alert-danger text-center"> {{ Session::get('successMsg') }}</div>
    @endif
    <h1 style="padding-top: 50px" class="text-center">Article List</h1>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <table class="table table-hover table-dark table-bordered">
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
                    <td><a href="/detail/{{ $r->id }}">{{ $r->title }}</a></td>
                    <td>{{ $r->user->name }}</td>
                    <td>{{ $r->category->name }}</td>
                    <td><a href="/blog/delete/{{ $r->id }}" type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection