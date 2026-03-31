<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        "firstName",
        "lastName",
        "email",
        "phone",
        "tazkira",
        "gender"
    ];
}
