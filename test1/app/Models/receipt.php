<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    use HasFactory;
    protected $table = 'receipts';
    public function receipt() {
        return $this->belongsToMany(course::class,trainee::class,);
        }
}
