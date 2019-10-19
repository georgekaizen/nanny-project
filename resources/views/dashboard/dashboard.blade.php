<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your Nanny Reservations</h4>
                <p class="card-text">Modify your current Nanny reservations.</p>
                <a href="/dashboard/reservations" class="btn btn-primary">My Reservations</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Find a Nanny</h4>
                <p class="card-text">Browse our catalog of top-rated Nannys.</p>
                <a href="/employees" class="btn btn-primary">Our Nannys</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
