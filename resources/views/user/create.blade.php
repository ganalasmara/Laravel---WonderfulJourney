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
    <h1 style="padding-top: 50px" class="text-center">Create Article</h1>
    <div class="container text-black" style="padding-top: 150px">
      
        <div class="row">
            
            <div class="col">
            <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label >Name:</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
                  
                </div>

                <div class="form-group">
                    <label >Category:</label>
                <select class="form-control" id="category" type="role" class="form-control @error('role') is-invalid @enderror" name="category" value="{{ old('email') }}" required autocomplete="role" autofocus>
                    <option value="1">Mountain</option>
                    <option value="2">Beach</option>
                </select>
                </div>

                <div class="form-group">
                    <label >Photo:</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>

                <div class="form-group">
                    <label >Story:</label>
                    <textarea class="form-control" id="story" name="story" rows="3"></textarea>
                     
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
            </div>
        </div>
    </div>
    

@endsection