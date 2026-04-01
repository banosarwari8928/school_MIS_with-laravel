<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        "employee_id",
        "paymet_method",
        "payroll_id"
    ];
}
