@extends('layouts.app')

@section('content')
    {{ $challenge }}
    <form action="{{Route('challenge-1')}}" method="POST">
        <input type="text" name="challenge1">
        <button type="submit">Click me daddy</button>
    </form>
@endsection
