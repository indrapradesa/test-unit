<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cstatus extends Model
{
    use HasFactory;

    public function sprospek()
    {
        return $this->belongsTo(Cprospect::class);
    }
}
