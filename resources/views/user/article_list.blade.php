@extends('layouts.main')

@section('content')
  @if(Session::has('successMsg'))
    <div class="alert alert-danger text-center"> {{ Session::get('successMsg') }}</div>
    @endif
    <h1 style="padding-top: 50px" class="text-center">My Article List</h1>
    <div class="container text-center" style="padding-top: 50px">
        <div class="row">
            <td><a href="/create" type="button" class="btn btn-primary mb-3">Create Article</a></td>
            <table class="table table-hover table-dark table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($article as $r)
                  <tr>
                    <td><a href="/detail/{{ $r->id }}"> {{ $r->title }}</a></td>
                    <td><a href="/article/delete/{{ $r->id }}" type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection