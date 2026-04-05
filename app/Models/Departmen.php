<?php

namespace App\Models;

use App\Models\School;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
     protected $fillable = [
        "name",
        "school_id"
    ];
    public function designation(){
        return $this->hasMany(Department::class);
    }
    public function school(){
        return $this->belongsTo(School::class);
    } 
    public function  employees() {
        return $this->hasManyThrough(Employee::class,Designations::class);
    }
   
}
