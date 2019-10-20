<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\EmployeeDetail;
use App\Models\Employee_details;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::with('employee_detail', 'employee_detail.employee')
        ->where('user_id', Auth::id())
        ->orderBy('start_date', 'asc')
        ->get();
        Log::debug(print_r($reservations,true));


      return view('dashboard.reservations')->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($employee_id)
    {
      $employeeInfo = Employee::with('employee_detail')->find($employee_id);
      return view('dashboard.reservationCreate')->with('employeeInfo', $employeeInfo);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user_id = Auth::id();
      $emp_details = EmployeeDetail::where('employee_id', $request->emp_id)->first();
      $reservation = new Reservation();
      $reservation->user_id = $user_id;
      $reservation->employee_details_id = $emp_details->id;
      $reservation->num_of_children = $request->num_of_children;
      $reservation->start_date = $request->start_date;
      $reservation->end_date = $request->end_date;
      $reservation->save();

      return redirect()->action('ReservationController@index')->with('success', 'Reservation created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
      $reservation = Reservation::with('employee_detail', 'employee_detail.employee')
      ->find($reservation->id);
      
      if ($reservation->user_id === Auth::id()) {
        $employee_id = $reservation->employee_detail->employee_id;
        $employeeInfo = Employee::with('employee_details')->get()->find($employee_id);

        return view('dashboard.reservationSingle', compact('reservation', 'employeeInfo'));
      }else
    return redirect('dashboard/reservations')->with('error', 'You are not authorized to see that.');
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $reservation = Reservation::with('employee_detail', 'employee_detail.employee')
        ->find($reservation->id);

      $employee_id = $reservation->employee_detail->employee_id;

      if ($reservation->user_id === Auth::id()) {
        $employeeInfo = Employee::with('employee_details')->get()->find($employee_id);

          return view('dashboard.reservationEdit', compact('reservation', 'employeeInfo'));
      }else
      return redirect('dashboard/reservations')->with('error', 'You are not authorized to do that');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
      if ($reservation->user_id != Auth::id())
        return redirect('dashboard/reservations')->with('error', 'You are not authorized to update this reservation');

      $user_id = Auth::id();
      $reservation->user_id = $user_id;
      $reservation->no_of_children = $request->no_of_children;
      $reservation->start_date = $request->start_date;
      $reservation->end_date = $request->end_date;
      $reservation->employee_detail_id = $request->employee_detail_id;

      $reservation->save();
      return redirect('dashboard/reservations')->with('success', 'Successfully updated your reservation!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation = Reservation::find($reservation->id);
        if ($reservation->user_id === Auth::id()) {
        $reservation->delete();

        return redirect('dashboard/reservations')->with('success', 'Successfully deleted your reservation!');

    }else
    return redirect('dashboard/reservations')->with('error', 'You are not authorized to delete this reservation');
}
}
