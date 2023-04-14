<?php

namespace App\Models;

use App\Models\Brosur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Areacover extends Model
{
    use HasFactory;

    protected $table = 'area_cover';
    protected $primaryKey = 'idarea_cover';
    protected $guarded = ['idarea_cover'];

    public function brosur()
    {
        return $this->hasMany(Brosur::class);
    }
}
