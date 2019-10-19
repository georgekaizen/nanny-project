<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password'
    ];
}
