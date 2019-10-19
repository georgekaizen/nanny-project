<!-- resources/views/employee.blade.php -->
@extends('index')
@section('title', 'Employees')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through Employees returned from controller -->
        @foreach ($employees as $employee)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $employee->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Front of hotel"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $employee->names }}</h5>
                    <small class="text-muted">{{ $employee->location }}</small>
                    <p class="card-text">{{ $employee->description }}</p>
                    <a href="{{  url('/dashboard/reservations/create',$employee->id) }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
