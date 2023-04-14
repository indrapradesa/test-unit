<?php

namespace App\Http\Controllers;

use App\Models\Brosur;
use App\Models\Areacover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SebaranBrosurController extends Controller
{
    public function index()
    {

        $total = DB::table('sebaran_brosur')->where('sales_id', auth()->user()->id)->sum('jml_gram');

        return view('d_sales.brosur.index', [
            'title' => 'Data Sebaran brosur',
            'brosur' => Brosur::where('sales_id', auth()->user()->id)->get(),
            'tt'   => $total
        ]);
    }

    public function create()
    {
        return view('d_sales.brosur.create', [
            'area' => Areacover::get()
        ]);
    }

    public function store()
    {

    }
}
