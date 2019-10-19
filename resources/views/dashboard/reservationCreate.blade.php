<!-- resources/views/dashboard/reservationCreate.blade.php -->
@extends('index')
@section('title', 'Create reservation')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2>{{ $employeeInfo->names }} - <small class="text-muted">{{ $employeeInfo->location }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Book a Nanny now</p>
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="employee_detail">Nanny Type</label>
                            <select class="form-control" name="employee_detail_id">
                                @foreach ($employeeInfo->employee_details as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} - ${{ $option->price }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="num_of_children">Number of children</label>
                            <input class="form-control" name="num_of_children" placeholder="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" name="start_date" placeholder="03/21/2020">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" name="end_date" placeholder="03/23/2020">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Book</button>
            </form>
        </div>
    </div>
</div>
@endsection
