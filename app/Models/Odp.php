<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Odp extends Model
{
    use HasFactory;

    protected $table = 'odp';
    protected $primaryKey = 'idodp';
    protected $guarded = ['idodp'];

    public function oclosing() : HasMany
    {
        return $this->hasMany(Custclosing::class, 'odp_id', 'idodp');
    }

}
