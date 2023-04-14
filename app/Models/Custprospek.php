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
    protected $primaryKey = 'idcust_prospek';
    protected $guarded = ['idcust_prospek'];

    protected $fillable = [
        'metode_id',
        'status_id',
        'sales_id',
        'nama',
        'alamat',
        'no_tlpn',
    ];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['prospek_id'] ?? false, fn($query, $author) =>
    //         $query->whereHas('prospek_id', fn($query) =>
    //             $query->where('nama', $author)
    //         )
    //     );
    // }

    public function closing(): BelongsTo
    {
        return $this->belongsTo(Custclosing::class, 'prospek_id', 'idcust_prospek');
    }

    public function metode() :BelongsTo
    {
        return $this->belongsTo(Mketemu::class, 'metode_id' ,'id_metode');
    }

    public function status() :BelongsTo
    {
        return $this->belongsTo(Sawal::class, 'status_id' ,'idstatus_cust');
    }
}
