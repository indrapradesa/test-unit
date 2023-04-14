<?php

namespace App\Models;

use App\Models\Custprospek;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custclosing extends Model
{
    use HasFactory;

    protected $table = 'cust_closing';
    protected $primaryKey = 'idcust_closing';
    protected $guarded = ['idcust_closing'];
    // protected $with = ['cust_prospek'];


    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['idcust_prospek'] ?? false, fn($query, $author) =>
    //         $query->whereHas('idcust_prospek', fn($query) =>
    //             $query->where('nama', $author)
    //         )
    //     );
    // }

    public function filter($query, array $filters)
    {
        $query->when($filters['cust_prospek'] ?? false, fn($query, $prospek) =>
            $query->whereHas('cust_prospek', fn($query) =>
                $query->where('sales_id', $prospek)
                )
        );
    }

    public function ss()
    {
        $clos = DB::table('cust_closing')
                ->where('cust_prospek.sales_id', auth()->user()->id)
                ->join('cust_prospek', 'cust_closing.prospek_id', '=', 'cust_prospek.idcust_prospek')
                ->get();
    }

    public function prospek(): BelongsTo
    {
        return $this->belongsTo(Custprospek::where('sales_id', auth()->user()->id), 'prospek_id');
    }

    // public function tak()
    // {
    //     return $this->where('idcust_prospek', '<>', 'prospek_id')->get();
    // }

    public function sales(): BelongsTo
    {
        return $this->belongsTo(Sales::class, 'sales_idsales', 'idsales');
    }

    public function jcust() : BelongsTo
    {
        return $this->belongsTo(Jcustomer::class, 'jenis_cust_id', 'idjenis_cust');
    }

    public function codp() : BelongsTo
    {
        return $this->belongsTo(Odp::class, 'odp_id', 'idodp');
    }

    public function getRouteKeyName()
    {
        return 'idcust_closing';
    }
}
