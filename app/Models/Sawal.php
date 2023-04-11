<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sawal extends Model
{
    use HasFactory;

    protected $table = 'status_cust';
    protected $primaryKey = 'idstatus_cust';
    protected $guarded = ['idstatus_cust'];

    public function prospek() : HasMany
    {
        return $this->hasMany(Custprospek::class, 'status_id', 'idstatus_cust');
    }
}
