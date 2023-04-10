<?php

namespace App\Http\Controllers;

use App\Models\Custprospek;
use Illuminate\Http\Request;

class CustomerProspekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $response = Custprospek::paginate(10)->all();
        // return view('tes.prospek.index', compact('response'));

        return view('tes.prospek.index', [
            'title' => 'Data Customer Prospek',
            'prospeks' => Custprospek::paginate(10)->all()
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
    public function show(Custprospek $custprospek)
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
    public function destroy(Custprospek $custprospek)
    {
        //
    }
}
