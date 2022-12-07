@extends('layouts.app')

@section('content')

    <h2 style="text-align: center">All Registered Users</h2>
    <table style="width: 50%; margin-left: auto; margin-right: auto">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="/users/{{ $user->id }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="submit" name="enable" value="1">Enable</button>
                        <button type="submit" name="disable" value="1">Disable</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
