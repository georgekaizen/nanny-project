<?php

namespace App\Models;

use App\Models\EmployeeDetail;
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

    public function employee_detail() {
        return $this->hasOne(EmployeeDetail::class);
    }
}
