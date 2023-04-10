<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'idsales';
    protected $guarded = ['idsales'];

    public function prospek()
    {
        return $this->belongsTo(Custclosing::class);
    }
}
