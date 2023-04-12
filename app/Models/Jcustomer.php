<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jcustomer extends Model
{
    use HasFactory;

    protected $table = 'jenis_cust';
    protected $primaryKey = 'idjenis_cust';
    protected $guarded = ['idjenis_cust'];

    public function pclosing() :HasMany
    {
        return $this->hasMany(Custclosing::class, 'jenis_cust_id', 'idjenis_cust');
    }
}
