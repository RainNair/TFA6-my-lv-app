@extends('layouts.app', ['title' => 'About | Laravel POS'])

@section('content')
    <section class="intro"><p class="eyebrow">About the system</p><h1>About Laravel POS System</h1><p class="lead">Laravel POS System is a simple point-of-sale application for viewing customer and user account information.</p></section>
    <section class="content-panel">
        <p>This system has separate pages for the home page, customer accounts, and user accounts. Use the navigation menu above to move between the pages.</p>
        <p>The customer page displays customer names, email addresses, and phone numbers. The user page displays usernames, full names, and roles.</p>
        <p>The application uses Laravel routes, controllers, and Blade views to organize and display the pages.</p>
    </section>
@endsection
