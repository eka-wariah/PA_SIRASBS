<?php

namespace App\Http\Controllers;

use App\Models\regions;
use Illuminate\Http\Request;
use Alert;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = regions::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('citizens_association.region.index', compact(['regions']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citizens_association.region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regions = regions::create([
            'rgn_level' => $request->rgn_level,
            'rgn_number' => $request->rgn_number
        ]);
        Alert::success('Berhasil Menambah', 'Berhasil menambahkan kategori lingkup wilayah');

        return redirect('citizen_associations/region'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(regions $regions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(regions $regions, $id)
    {
        $editRegions = regions::findOrFail($id);        
        return view('citizens_association.region.edit',compact(['editRegions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, regions $regions, $id)
    {
        $updateRegions = regions::findOrFail($id); 
        $updateRegions->rgn_level = $request->rgn_level;
        $updateRegions->rgn_number = $request->rgn_number;
        $updateRegions->save();
        return redirect('/citizen_associations/region');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(regions $regions, $id)
    {
        $destroyRegions = regions::findOrFail($id);
        //dd ($destroyScopeCategories);
        $destroyRegions->delete();
        return redirect('/citizen_associations/region');
    }
}
