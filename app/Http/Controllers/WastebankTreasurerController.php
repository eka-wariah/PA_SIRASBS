<?php

namespace App\Http\Controllers;

use App\Models\wastebank_treasurer;
use App\Models\waste_banks;
use App\Models\User;
use App\Models\trash_categories;
use Illuminate\Http\Request;
Use Alert;

class WastebankTreasurerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waste_banks = waste_banks::all();
        $users = User::all();
        $trash_categories = trash_categories::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('treasurer.wastebank.index', compact(['waste_banks', 'users', 'trash_categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
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
    public function show(wastebank_treasurer $wastebank_treasurer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wastebank_treasurer $wastebank_treasurer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wastebank_treasurer $wastebank_treasurer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wastebank_treasurer $wastebank_treasurer)
    {
        //
    }
}
