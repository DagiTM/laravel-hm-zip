<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counties = County::get();

        return view('counties.index', compact('counties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('counties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $county = County::create($validated);


         return redirect()
            ->route('counties.index', $county)
            ->with('status', 'Megye létrehozva!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(County $county)
    {
        return view('counties.edit', compact('county'));
    }

    public function update(Request $request, County $county)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $county->update($validated);

        return redirect()
            ->route('counties.index', $county)
            ->with('status', 'Megye frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(County $county)
    {
        $county->delete();

        return redirect()
            ->route('counties.index')
            ->with('status', 'Megye törölve!');
    }
}
