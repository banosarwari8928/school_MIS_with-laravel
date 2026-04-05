<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    //
    protected $fillable = [
        "year",
        "month",
        "school_id"
        
    ];
     public function school(){
        return $this->belongsTo(School::class);
    }
     public function salaries(){
        return $this->hasMany(Salary::class);
    }
     public function payroll(){
        return $this->hasMany(Payroll::class);
    }
}
