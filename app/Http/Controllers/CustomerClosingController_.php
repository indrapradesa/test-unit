<?php

namespace App\Http\Controllers;

use App\Models\Custclosing;
use Illuminate\Http\Request;

class CustomerClosingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Custclosing::with('prospek')->get();
        // return response()->json($response);
        // return view('cclosing', compact('response'));
        @dd($response);
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
