<?php

namespace App\Http\Controllers;

use App\Models\Odp;
use App\Models\Jcustomer;
use App\Models\Custclosing;
use App\Models\Custprospek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class CustomerClosingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $pp = Custprospek::where('sales_id', auth()->user()->id)->get();

        // $ss = DB::table('cust_prospek')->where('sales_id', auth()->user()->id)->get();

        // $closing = DB::table('cust_closing')
        //  ->whereExists(function(Builder $query){
        //     $query->select(DB::raw(1))
        //         ->from('cust_prospek')
        //         ->whereColumn('cust_closing.prospek_id', 'cust_prospek.idcust_prospek');
        //  })
        //  ->get();

        // $gg =  Custclosing::where('prospek_id', $pp)->get();
        // @dd($clos);

        // @dd($pp);

        $clos = DB::table('cust_closing')
                ->where('cust_prospek.sales_id', auth()->user()->id)
                ->join('cust_prospek', 'cust_closing.prospek_id', '=', 'cust_prospek.idcust_prospek')
                ->paginate(10);

        return view('d_sales.closing.index',[
            'title' => 'Data Customer Closing',
            // 'closing' => Custclosing::whereExists($query)->get()
            'closing' => $clos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('d_sales.closing.create', [
            'title' => 'Input Customer Closing',
            'jcust' => Jcustomer::all(),
            'odp' => Odp::all(),
            'prospek' => Custprospek::where('sales_id', auth()->user()->id)
            ->where('status', '=', 'Prospek')
            ->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'prospek_id' =>'required',
            'jenis_cust_id' => 'required',
            'nik' =>'required|unique:cust_closing',
            'nama' => 'required',
            'almt_ktp' => 'required'
        ]);

        Custclosing::create($validateData);

        return redirect('/dashboard/closing')->with('success','New post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Custclosing $custclosing, $id)
    {

        $cc = Custclosing::findOrfail($id);
        // @dd($custclosing);
        return view('d_sales.closing.show', [
            'title' => 'Detail Customer',
            'custclosing' => $cc
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Custclosing $custclosing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Custclosing $custclosing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Custclosing $custclosing)
    {
        //
    }
}
