<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainee extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongstoMany(course::class);
    }
    public function receipt() {
        return $this->belongsToMany(course::class,user::class,receipt::class);
        }
}
