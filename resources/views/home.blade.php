@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Challenges') }}
                </div>

                <div class="card-body">
                    <a href="{{ route('challenge-1') }}">Challenge 1</a>
                </div>

                <div class="card-body">
                    <a href="{{ route('challenge-2') }}">Challenge 2</a>
                </div>

                <div class="card-body">
                    <a href="{{ route('challenge-3') }}">Challenge 3</a>
                </div>

                <div class="card-body">
                    <a href="#">Challenge 4</a>
                </div>

                <div class="card-body">
                    <a href="#">Challenge 5</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
