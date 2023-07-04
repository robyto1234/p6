<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Tracks=Track::where("user_id", auth()->id())->orderByDesc('id')->paginate(3);
        return view('Tracks.index',compact('Tracks'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Sing create';
        $route = route('Tracks.store');
        $button = 'Register';
        return view('Tracks.createc', compact('title', 'route', 'button'));
     //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:100',
            'audio' => 'mimes:mp3'
        ]);
        $path = "public/musica/noname.mp3";
        if ($request->hasfile('audio'))
            $path = $request->audio->store("public/musica");
       
        $Track = Track::create([
            'title'=> $request->title,
            'path'=> $path,
        ]);
        $Track->save();

        return redirect()->route('Players.index')->with('success', 'Stored with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }
}
