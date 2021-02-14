@extends('layouts.main')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('successMsg'))
    <div class="alert alert-success text-center"> {{ Session::get('successMsg') }}</div>
    @endif
    <h1 style="padding-top: 50px" class="text-center">Update Profile</h1>
    <div class="container justify-content-center d-flex text-center" style="padding-top: 50px">
        
        <div class="row">
            <form action="{{ route('update', ['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label>Name:</label>
                  <input name="name" type="text" class="form-control"  placeholder="{{ $user->name }}">
                  
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="email" type="email" class="form-control"  placeholder="{{ $user->email }}">
                    
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <input name="phone" type="text" class="form-control"  placeholder="{{ $user->phone }}">
                    
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
@endsection