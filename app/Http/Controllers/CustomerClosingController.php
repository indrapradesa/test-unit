<?php

namespace App\Http\Controllers;

use App\Models\Custclosing;
use App\Models\Custprospek;
use App\Models\Jcustomer;
use App\Models\Odp;
use Illuminate\Http\Request;

class CustomerClosingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('d_sales.closing.index',[
            'title' => 'Data Customer Closing',
            'closing' => Custclosing::all()
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
            'prospek' => Custprospek::where('sales_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Custclosing $custclosing)
    {
        //
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
