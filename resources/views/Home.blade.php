@extends('index') {{-- Specify that we want to extend the index file --}}
@section('title', 'Home') {{-- Set the title content to "Home" --}}
{{--  Set the "content" section, which will replace "@yield('content')" in the index file we're extending --}}
@section('content')
<div class="jumbotron text-light" style="background-image: url('https://cdn.auth0.com/blog/laravel-6-crud/laravel-beach-bg.png')">
    <div class="container">
        @if(Auth::user())
        <h1 class="display-4">Welcome back,</h1>
        <p class="lead">Nanny reservation management.</p>
        <a href="/dashboard" class="btn btn-success btn-lg my-2">View Personal Nanny Dashboard</a>
        @else
        <h1 class="display-3">Reservation management made easy.</h1>
        <p class="lead">This the Best place to get all the best Nannys in this world.</p>
        <a href="/login" class="btn btn-success btn-lg my-2">Sign Up to access Thousands of our Top Rated Nannys</a>
        @endif
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Manage all your Nanny reservations in one place</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Best prices</h5>
                    <p class="card-text">special discounts Reserving our top-rated Nannys</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy using </h5>
                    <p class="card-text">Book and manage with the click of a button</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
