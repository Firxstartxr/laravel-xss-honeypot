@extends('layouts.app')

@section('content')

    <table class="styled-table">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
