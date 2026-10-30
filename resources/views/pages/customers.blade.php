@extends('layouts.app', ['title' => 'Customer Accounts | Laravel POS'])

@section('content')
    <section class="intro"><p class="eyebrow">Account list</p><h1>Customer Accounts</h1><p class="lead">{{ count($customers) }} customer records are available below.</p></section>
    <div class="table-wrap">
        <table>
            <thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr><td>{{ $customer->full_name }}</td><td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td><td>{{ $customer->phone ?? 'Not provided' }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
