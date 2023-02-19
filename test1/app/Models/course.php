<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    public function trainer(){
        return $this->belongsTo(trainer::class);
    }
    public function ad(){
        return $this->hasone(ad::class);
    }
    public function trainee(){
        return $this->belongstoMany(trainee::class);
    }
    public function rececipt() {
        return $this->belongsToMany(trainee::class,user::class);
        }
}
