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
        $toyotas = Toyota::latest()->paginate(10);
        return view('toyotas.index', compact('toyotas'))
            ->with(request()->input('page', 1));
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
            ->with('success', 'New car created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function show(Toyota $toyota)
    {
        return view('toyotas.show', compact('toyota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function edit(Toyota $toyota)
    {
        return view('toyotas.edit', compact('toyota'));
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
        $request->validate([
            'model' => 'required',
            'engine' => 'required',
            'price' => 'required',
        ]);

        //create new product
        $toyota->update($request->all());

        //redirect to the index page
        return redirect()->route('toyotas.index')
            ->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toyota  $toyota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toyota $toyota)
    {
        $toyota->delete();
        return redirect()->route('toyotas.index')
            ->with('success', 'Car deleted successfully.');
    }
}
