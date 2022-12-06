@extends('layouts.app')

@section('content')

    <h2 style="text-align: center">All Registered Users</h2>
    <table style="width: 50%; margin-left: auto; margin-right: auto">
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
