<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro'; 

    public function publisher()
    {
        return $this->belongsTo(Editorial::class, 'editorial_fk', 'id');
    }
}
 