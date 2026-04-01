<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        "name",
        "whatsapp_link"
    ];
    public function users(){
        return $this->belongsTo(User::class,"schoolusers");
    }
}
