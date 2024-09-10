<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarkersRequest;
use App\Http\Requests\UpdateMarkersRequest;
use App\Models\Markers;
use Illuminate\View\View;
use Illuminate\Http\Request;



class MarkersController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $markers = Markers::latest()->paginate(5);

        return view('markers.index',compact('markers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('markers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'imgURL' => 'required',
        ]);

        Markers::create($request->all());

        return redirect()->route('markers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(markers $Markers): View
    {
        return view('markers.show',compact('markers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Markers $Markers): View
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
