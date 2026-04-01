<?php

namespace App\Models;

use App\Models\Contract;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Designations extends Model
{
    //
    protected $fillable = [
        "name",
        "dep_id"
    ];
    public function departments(){
        return $this->belongsTo(Department::class);
    }
    public function employee(){
        return $this->hasMany(Employee::class);
    }
    public function contract(){
        return $this->hasMany(Contract::class);
    }
}
