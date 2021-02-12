@extends('layouts.main')

@section('content')
    
    <div class="container" style="padding-top: 150px">
        <h1>New Blog</h1>
        <div class="row">
            
            <div class="col">
            <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name:</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                  
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Category:</label>
                <select class="form-control" id="category" type="role" class="form-control @error('role') is-invalid @enderror" name="category" value="{{ old('email') }}" required autocomplete="role" autofocus>
                    <option value="1">Mountain</option>
                    <option value="2">Beach</option>
                </select>
                </div>

                <div class="form-group">
                    <label for="InputPhoto">Photo:</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Story:</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                     
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
            </div>
        </div>
    </div>
    

@endsection