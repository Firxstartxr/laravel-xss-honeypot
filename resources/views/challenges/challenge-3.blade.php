@extends('layouts.app')

@section('content')
    <p>Sometimes we don't really have to call things their real names</p>
    <!-- Do people really read this? -->
    <form action="{{Route('challenge-3')}}" method="POST">
        <input type="text" name="challenge3">
        <button type="submit">Click me daddy</button>
    </form>
@endsection
