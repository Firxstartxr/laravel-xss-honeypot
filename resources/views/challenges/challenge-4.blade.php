@extends('layouts.app')

@section('content')
    <a href="https://en.wiktionary.org/wiki/figure" target="_blank">This is not a rick roll I swear</a>
    <br>
    {{ $challenge }}
    <!-- You would ask, why is there only xss? I also don't know :D -->
    <form action="{{Route('challenge-4')}}" method="POST">
        <input type="text" name="challenge4">
        <button type="submit">Click me daddy</button>
    </form>
@endsection
