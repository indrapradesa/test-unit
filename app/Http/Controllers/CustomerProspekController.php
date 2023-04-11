<?php

namespace App\Http\Controllers;

use App\Models\Sawal;
use App\Models\Mketemu;
use App\Models\Custprospek;
use Illuminate\Http\Request;

class CustomerProspekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('d_sales.prospek.index', [
            'title' => 'Data Customer Prospek',
            "active" => "all",
            'prospeks' => Custprospek::where('sales_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('d_sales.prospek.created', [
            'title' => 'Input Customer Prospek',
            'metode' => Mketemu::get(),
            'status' => Sawal::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'metode_id' =>'required',
            'status_id' => 'required',
            'nama' =>'required',
            'alamat' => 'required',
            'no_tlpn' => 'required|unique:cust_prospek'
        ]);

        $validateData['sales_id'] = auth()->user()->id;

        Custprospek::create($validateData);

        return redirect('/dashboard/prospek')->with('success','New post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Custprospek $custprospek)
    {
        return view('d_sales.prospek.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Custprospek $custprospek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Custprospek $custprospek)
    {
         //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Custprospek $custprospek, $ids)
    {

        Custprospek::destroy($ids);

    //    @dd($custprospek);

        return redirect('/dashboard/prospek')->with('success','Post has been Deleted');
    }
}
