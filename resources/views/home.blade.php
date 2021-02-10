@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 150px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    {{ __('Welcome')  }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
