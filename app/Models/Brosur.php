<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brosur extends Model
{
    use HasFactory;

    protected $table = 'sebaran_brosur';
    protected $primaryKey = 'idsebaran';
    protected $guarded = ['idsebaran'];

    public function area() :BelongsTo
    {
        return $this->belongsTo(Areacover::class, 'area_cover_id');
    }

}
