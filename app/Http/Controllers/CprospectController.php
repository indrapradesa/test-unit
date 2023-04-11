<?php

namespace App\Http\Controllers;

use App\Models\Cmethod;
use App\Models\Cprospect;
use App\Models\Cstatus;
use Illuminate\Http\Request;

class CprospectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('d_sales.prospek.index', [
            'title' => 'Data Customer Prospek',
            'prospeks' => Cprospect::paginate(10)->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('d_sales.prospek.created', [
            'title' => 'Input Customer Prospek',
            'metode' => Cmethod::all(),
            'status' => Cstatus::all()
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
            'no_tlpn' => 'required',
        ]);

        $validateData['sales_id'] = auth()->user()->id;

        Cprospect::create($validateData);

        return redirect('/dashboard/prospect')->with('success','New post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cprospect $cprospect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cprospect $cprospect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cprospect $cprospect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cprospect $cprospect)
    {
        //
    }
}
