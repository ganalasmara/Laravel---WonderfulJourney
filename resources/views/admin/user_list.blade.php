@extends('layouts.main')

@section('content')
    @if(Session::has('successMsg'))
    <div class="alert alert-danger text-center"> {{ Session::get('successMsg') }}</div>
    @endif

    <h1 style="padding-top: 50px" class="text-center">User List</h1>
    
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <table class="table table-dark table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                  <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td><a href="/user/delete/{{ $u->id }}" type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection