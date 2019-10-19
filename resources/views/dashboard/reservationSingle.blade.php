<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Edit Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the {{ $employeeInfo->names }} in {{ $employeeInfo->location }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $employeeInfo->image }}" class="img-fluid" alt="image of Nanny">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $employeeInfo->names }} - <small>{{ $employeeInfo->location }}</small>
                        </h3>
                        <p class="card-text">{{ $employeeInfo->description }}</p>
                        <p class="card-text"><strong>Start date: </strong>{{ $reservation->start_date }}</p>
                        <p class="card-text"><strong>End date: </strong>{{ $reservation->end_date }}</p>
                        <p class="card-text"><strong>Nanny: </strong>{{ $reservation->employee_detail['type'] }}</p>
                        <p class="card-text"><strong>num_of_children: </strong>{{ $reservation->num_of_children }}</p>
                        <p class="card-text"><strong>Price: </strong>${{ $reservation->employee_detail['price'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Edit this reservation</a>
                    <a href="/dashboard/reservations/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
