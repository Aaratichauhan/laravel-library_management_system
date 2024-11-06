<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use Illuminate\Http\Request;

class AutherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authers = Auther::all();
        return view('/auther/index', compact('authers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auther.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $auther = new Auther;

        $auther->name = $request->name;

        $auther->save();

        return redirect()->route('auther.index')
        ->with('status','New author added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Auther $auther)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auther $auther)
    {
        $authers = Auther::find($auther->id);
        return view("auther.edit", compact('authers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auther $auther)
    {
        $auther = Auther::find($auther->id);

        $auther->name = $request->name;

        $auther->save();

        
        return redirect()->route('auther.index')
        ->with('status','Auther data updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auther $auther)
    {
        $authers = Auther::find($auther->id);
        $auther->delete();

        return redirect()->route('auther.index')
        ->with('status','Auther data deleted successfully.');
    }
}
