@extends('layouts.app')

@section('content')
    {{ $challenge }}
    <!-- Do people really read this? No more hints this time!-->
    <form action="{{Route('challenge-3')}}" method="POST">
        <input type="text" name="challenge3">
        <button type="submit">Click me daddy</button>
    </form>
@endsection
