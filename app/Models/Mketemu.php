<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mketemu extends Model
{
    use HasFactory;

    protected $table = 'metode_ketemu';
    protected $primaryKey = 'id_metode';
    protected $guarded = ['id_metode'];

    public function prospek () : HasMany
    {
        return $this->hasMany(Custprospek::class, 'metode_id', 'id_metode');
    }
}
