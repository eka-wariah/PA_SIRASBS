<?php

namespace App\Http\Controllers;

use App\Models\citizens;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
Use Alert;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = \App\Models\User::all(); 
        $user = Auth::user(); // Get the currently authenticated user
        $userId = $user ? $user->usr_id : null; // Safely get the user's ID
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        
        return view('treasurer.citizen_data.index', compact('users','userId', 'user_name', 'user_email'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('treasurer.citizen_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Berhasil Menambah', 'Berhasil menambahkan kategori lingkup wilayah');

        return redirect('/treasurer/users');

    }

    /**
     * Display the specified resource.
     */
    public function show(citizens $citizens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(citizens $citizens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, citizens $citizens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(citizens $citizens)
    {
        //
    }
}
