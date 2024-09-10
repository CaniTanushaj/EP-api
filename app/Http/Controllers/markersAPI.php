<?php

namespace App\Http\Controllers;

use App\Models\Markers;
use Illuminate\Http\Request;
use DB;

class markersAPI extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $markers = Markers::all();

        return $markers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('markers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Markers::create($request->all());

        return "'success','Markers created successfully.'";
    }

    /**
     * Display the specified resource.
     */
    public function show(Markers $Markers)
    {
        return $markers;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Markers $Markers)
    {
        return view('markers.edit',compact('Markers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Markers $Markers): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $Markers->update($request->all());

        return redirect()->route('markers.index')
                        ->with('success','Markers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Markers $Markers): RedirectResponse
    {
        $Markers->delete();

        return redirect()->route('markers.index')
                        ->with('success','Markers deleted successfully');
    }
}
