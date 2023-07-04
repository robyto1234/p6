<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Players=Player::where("user_id", auth()->id())->orderByDesc('id')->paginate(3);
      
        return view('Players.index',compact('Players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Singer';
        $route = route('Players.store');
        $button = 'Register';
        return view('Players.createp' , compact('title','route','button'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'namep' => 'required|min:2|max:100'
        ]);

        $Player = Player::create([
            'namep' => $request->namep,
        ]);
        $Player->save();
       
        return redirect()->route('Tracks.create')->with('success', 'Stored with success');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        $title = 'Singer edit';
        $route = route('contacts.update', ['contact' => $contact]);
        $button = 'Update';
        return view('contacts.edit', compact('title', 'route', 'button', 'contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}
