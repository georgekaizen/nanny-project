<!-- resources/views/dashboard/reservationEdit.blade.php -->
@extends('index')
@section('title', 'Edit Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $employeeInfo->name }} - <small class="text-muted">{{ $employeeInfo->location }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Book your Nanny now at the most magnificent price</p>
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="employee_detail">Nanny Type</label>
                            <select class="form-control" name="employee_detail_id" value="{{ old('employee_detail_id', $reservation->employee_detail_id) }}">
                                @foreach ($employeeInfo->employee_details as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} - ${{ $option->price }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="num_of_Children">Number of children</label>
                            <input class="form-control" name="num_of_children" value="{{ old('num_of_children', $reservation->num_of_children) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start_date">Start_date</label>
                            <input type="date" class="form-control" name="start_date" placeholder="03/21/2020" value="{{ old('start_date', $reservation->start_date) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end_date">End_date</label>
                            <input type="date" class="form-control" name="end_date" placeholder="03/23/2020" value="{{ old('end_date', $reservation->end_date) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Delete reservation</button>
        </p>
    </form>
</div>
@endsection
