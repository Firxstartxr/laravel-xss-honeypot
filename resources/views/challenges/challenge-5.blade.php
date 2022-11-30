@extends('layouts.app')

@section('content')
    <div>
        <img src="{{ asset('article.webp') }}" alt="article" title="this is an article bro" style="width: 20rem; margin-bottom: 2rem">
    </div>
    {{ $challenge }}
    <!-- Finally these crappy challenges are over xdxdxdxdxdxd -->
    <form action="{{Route('challenge-5')}}" method="POST">
        <input type="text" name="challenge5">
        <button type="submit">Click me daddy</button>
    </form>
@endsection
