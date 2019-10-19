<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;

class Employee_details extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'employee_id',
        'type',
        'description',
        'price',
        'image',
        'work_experience',
        'availability'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
