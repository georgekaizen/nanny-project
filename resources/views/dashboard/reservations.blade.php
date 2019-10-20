@extends('index')
@section('title', 'reservations')
@section('content')
<div class="container mt-5">
    <h2>Your Nanny Reservations</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Employee</th>
            <th scope="col">start_date</th>
            <th scope="col">End_date</th>
            <th scope="col">Type</th>
            <th scope="col">num_of_children</th>
            <th scope="col">Price</th>
            <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->employee_detail->employee['names'] }}</td>
                <td>{{ $reservation->start_date}}</td>
                <td>{{ $reservation->end_date}}</td>
                <td>{{ $reservation->employee_detail['type'] }}</td>
                <td>{{ $reservation->num_of_children }}</td>
                <td>{{ $reservation->employee_detail['price'] }}</td>
            <td><a href="{{ url('dashboard/reservations/'.$reservation->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection
