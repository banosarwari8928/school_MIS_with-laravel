<?php

namespace App\Models;

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
    public function Department(){
        return $this->belongsTo(School::class);
    } 
}
