@extends('layouts.app')

@section('content')
    <?php

    ?>
    <p>This time it is not going to be that easy</p>
    {{-- just don't use <> --}}
    <form action="{{Route('challenge-2')}}" method="POST">
    <input type="text" name="challenge2">
    <button type="submit">Click me daddy</button>
    </form>
@endsection
