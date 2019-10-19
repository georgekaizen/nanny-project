<?php

namespace App\Models;

use App\Models\EmployeeDetails;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'names',
        'phonenumber',
        'location',
        'image',
        'national_id',
        'description'
    ];

    public function employee_details() {
        return $this->hasOne(EmployeeDetails::class);
    }
}
