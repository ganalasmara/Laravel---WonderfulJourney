@extends('layouts.main')

@section('content')
    
    <div class="container" style="padding-top: 150px">
        <div class="row">
            <table class="table">
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
                    <td><a href="/user/delete/{{ $u->id }}" type="button" class="btn btn-primary">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection