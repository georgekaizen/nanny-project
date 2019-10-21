use Illuminate\Support\Facades\DB;
<!-- resources/views/dashboard/reservationCreate.blade.php -->
@extends('index')
@section('title', 'Register Employee')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Register Employee</p>
            <form action="{{ route('register_employee') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-8">

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="num_of_children">Names</label>
                            <input type="text" class="form-control" name="emp_names" placeholder="Names" required>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start_date"> Phone Number</label>
                            <input type="text" class="form-control" name="emp_phone" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end_date">Location</label>
                            <input type="text" class="form-control" name="emp_location" placeholder="Location" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end_date">ID No</label>
                            <input type="number" class="form-control" name="emp_id_no" placeholder="ID" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end_date">Description</label>
                            <textarea class="form-control" name="emp_description" required> </textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="employee_detail">Nanny Type</label>
                            <select class="form-control" name="emp_type" required>
                                @php
                                {{
                                    $nanny_types = DB::table('nanny_types')->select('id','nanny_type')->get();
                                 }}
                                @endphp

                                @endphp
                                @foreach ($nanny_types as $nanny_type)
                                    <option value="{{$nanny_type->id}}">{{ $nanny_type->nanny_type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                            <div class="form-group">
                                <label for="end_date"> Price</label>
                                <input type="number" class="form-control" name="emp_price" placeholder="Price" required>
                            </div>
                    </div>

                    <div class="col-sm-6">
                            <div class="form-group">
                                <label for="end_date">Work Experience</label>
                                <textarea class="form-control" name="emp_experience" required> </textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="end_date">Availability</label>
                                    <textarea class="form-control" name="emp_availability" required> </textarea>
                                </div>
                            </div>


                </div>
                <button type="submit" class="btn btn-lg btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection

