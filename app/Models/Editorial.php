<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'editorial';

    public function book() 
    {
        return $this->hasMany(Libro::class,'id');
    }
}
 