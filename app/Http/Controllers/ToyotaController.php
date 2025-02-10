<?php

namespace App\Http\Controllers;

use App\Models\Toyota;
use Illuminate\Http\Request;

class ToyotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toyotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the inputs
        $request->validate([
            'model' => 'required',
            'engine' => 'required',
            'price' => 'required',
        ]);

        //create new product
        Toyota::create($request->all());

        //redirect to the index page
        return redirect()->route('toyotas.index')
            ->with('success', 'New Toyota created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function show(Toyota $toyota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function edit(Toyota $toyota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toyota $toyota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toyota $toyota)
    {
        //
    }
}
