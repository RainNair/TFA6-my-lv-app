@extends('layouts.app', ['title' => 'User Accounts | Laravel POS'])

@section('content')
    <section class="intro"><p class="eyebrow">Account list</p><h1>User Accounts</h1><p class="lead">{{ count($users) }} user records are available below.</p></section>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Username</th><th>Full Name</th><th>Role</th></tr></thead>
            <tbody>
                @foreach ($users as $user)
                    <tr><td><strong>{{ $user->username }}</strong></td><td>{{ $user->full_name }}</td><td><span class="badge">POS Staff</span></td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
