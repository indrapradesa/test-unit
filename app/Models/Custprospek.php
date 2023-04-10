<?php

namespace App\Models;

use App\Models\Custclosing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custprospek extends Model
{
    use HasFactory;

    protected $table = 'cust_prospek';
    protected $guarded = ['idcust_prospek'];

    public function closing(): BelongsTo
    {
        return $this->belongsTo(Custclosing::class);
    }
}
