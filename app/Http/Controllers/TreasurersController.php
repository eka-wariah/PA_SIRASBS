<?php

namespace App\Http\Controllers;

use App\Models\treasurers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
Use Alert;

class TreasurersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treasurers = treasurers::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('citizens_association.treasurers.index', compact(['treasurers']));
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
    public function show(treasurers $treasurers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(treasurers $treasurers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, treasurers $treasurers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(treasurers $treasurers)
    {
        //
    }
}
