@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>

                    <div class="card-body">
                        {{ __(Auth::user()->name) }}
                    </div>
                    <div class="card-body">
                        {{ __(Auth::user()->email) }}
                    </div>

                    <div class="card-body">
                        <form action="{{route('profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" accept="image/png, image/jpeg">
                            <input type="submit" value="Upload">
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
