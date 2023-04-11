<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmethod extends Model
{
    use HasFactory;

    public function mprospek()
    {
        return $this->belongsTo(Cprospect::class);
    }
}
