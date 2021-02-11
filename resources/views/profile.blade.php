@extends('layouts.main')

@section('content')
    
    <div class="container" style="padding-top: 150px">
        <div class="row">
            <form action="{{ route('update', ['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name:</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $user->name }}">
                  
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $user->email }}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone:</label>
                    <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $user->phone }}">
                    
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
    

@endsection