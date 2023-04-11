<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cprospect extends Model
{
    use HasFactory;

    protected $fillable = [
        'metode_id',
        'status_id',
        'sales_id',
        'nama',
        'alamat',
        'no_tlpn',
    ];

    public function metode()
    {
        return $this->BelongsTo(Cmethod::class, 'metode_id', 'id_metode');
    }

    public function status()
    {
        return $this->BelongsTo(Cstatus::class, 'status_id', 'idstatus_cust');
    }
}
