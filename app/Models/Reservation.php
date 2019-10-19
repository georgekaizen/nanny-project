<?php

namespace App\Models;

use App\Models\EmployeeDetail;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'employee_details_id',
        'num_of_children',
        'start_date',
        'end_date'
    ];

    public function employee_detail() {
        return $this->belongsTo(EmployeeDetail::class);
    }
}
