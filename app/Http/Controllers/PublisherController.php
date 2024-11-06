<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publisher = Publisher::all();
        return view('/publisher/index', compact('publisher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("publisher.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publisher = new Publisher;

        $publisher->name = $request->name;

        $publisher->save();

        return redirect()->route('publisher.index')
        ->with('status','New publisher added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        $publisher = Publisher::find($publisher->id);
        return view("publisher.edit", compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $publisher = Publisher::find($publisher->id);

        $publisher->name = $request->name;

        $publisher->save();

        
        return redirect()->route('publisher.index')
        ->with('status','publisher data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher = Publisher::findOrFail($publisher->id);
        $publisher->delete();

        return redirect()->route('publisher.index')
        ->with('status','publisher data deleted successfully.');
    }
}



