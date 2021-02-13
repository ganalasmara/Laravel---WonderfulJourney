@extends('layouts.main')

@section('content')
    
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