<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Darbinieks extends Model
{
    public $timestamps = false;
    public function amats()
    {
        return $this->belongsTo(Amats::class);
    }
}
