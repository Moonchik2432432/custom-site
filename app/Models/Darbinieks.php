<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Darbinieks extends Model
{
    protected $table = 'darbinieks';

    // Связь с Amats
    public function amats()
    {
        return $this->belongsTo(Amats::class, 'Amats_ID'); 
    }
}


