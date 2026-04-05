<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Designations;
class Contract extends Model
{
    //
    protected $fillable = [
        "end_date",
        "designations-id",
        "employee-id"
    ];
     public function designation(){
        return $this->belongsTo(Designations::class);
    }
     public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
