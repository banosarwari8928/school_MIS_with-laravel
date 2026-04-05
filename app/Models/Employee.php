<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Designations;
use App\Models\Contract;
use App\Models\Salary;
use App\Models\Payment;
class Employee extends Model
{
    //
    protected $fillable = [
        "firstName",
        "email",
        "tazkira",
        "designations_id"
    ];
    public function designation(){
        return $this->hasMany(Designations::class);
    }
     public function contract(){
        return $this->hasMany(Contract::class);
    }
     public function salaries(){
        return $this->hasMany(Salary::class);
    }
     public function payment(){
        return $this->hasMany(Payment::class);
    }

}
