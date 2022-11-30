@extends('layouts.app')

@section('content')
    <div>
        <img src="{{ asset('canvas.png') }}" alt="canvas" title="use <canvas bruh" style="width: 20rem; margin-bottom: 2rem">
    </div>
    {{ $challenge }}
    <!-- Do people really read this? No more hints this time! Or who knows... -->
    <form action="{{Route('challenge-3')}}" method="POST">
        <input type="text" name="challenge3">
        <button type="submit">Click me daddy</button>
    </form>
@endsection
