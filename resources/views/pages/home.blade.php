@extends('layouts.app', ['title' => 'Home | Laravel POS'])

@section('content')
    <section class="hero">
        <p class="eyebrow">Point of Sale</p>
        <h1>Welcome to Laravel POS System</h1>
        <p class="lead">Manage customer accounts and user accounts in one simple Laravel application.</p>
        <div class="actions">
            <a class="button" href="{{ route('customers') }}">View Customer Accounts</a>
            <a class="button secondary" href="{{ route('users') }}">View User Accounts</a>
        </div>
    </section>
    <section class="cards" aria-label="Application pages">
        <article class="card"><span class="number">01</span><h2>Home</h2><p>The landing page for the POS application.</p></article>
        <article class="card"><span class="number">02</span><h2>About</h2><p>Learn more about this Laravel POS System.</p></article>
        <article class="card"><span class="number">03</span><h2>Customers</h2><p>View customer names, email addresses, and phone numbers.</p></article>
        <article class="card"><span class="number">04</span><h2>Users</h2><p>View usernames, full names, and staff roles.</p></article>
    </section>
@endsection
