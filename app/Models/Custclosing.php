<?php

namespace App\Models;

use App\Models\Custprospek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custclosing extends Model
{
    use HasFactory;

    protected $table = 'cust_closing';
    protected $primaryKey = 'idcust_closing';
    protected $guarded = ['idcust_closing'];

    public function prospek(): BelongsTo
    {
        return $this->belongsTo(Custprospek::class, 'idcust_prospek', 'id_cus');
    }

    public function sales(): BelongsTo
    {
        return $this->belongsTo(Sales::class, 'sales_idsales', 'idsales');
    }
}
