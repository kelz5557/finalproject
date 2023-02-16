<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function course(){
        return $this->belongsTo(course::class);
    }
}
