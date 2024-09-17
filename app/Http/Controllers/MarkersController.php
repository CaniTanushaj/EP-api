<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarkersRequest;
use Illuminate\Http\RedirectResponse;
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
        $marker = Markers::latest()->paginate(100);

        return view('markers.index',compact('marker'))
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
    public function show(markers $marker): View
    {
        return view('markers.show',compact('marker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Markers $marker): View
    {
        return view('markers.edit',compact('marker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Markers $marker): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'imgURL' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $marker->update($request->all());

        return redirect()->route('markers.index')
                        ->with('success','Markers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Markers $marker): RedirectResponse
    {
        $marker->delete();

        return redirect()->route('markers.index')
                        ->with('success','Markers deleted successfully');
    }
}
