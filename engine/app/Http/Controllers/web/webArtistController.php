<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Chord;
class webArtistController extends Controller
{
    public function index()
    {
        $artist = Artist::get();
        return view('web.artist.index', compact('artist'));
    }

    public function show($slug)
    {
        $artist = Artist::where('slug', $slug)->first();
        $artist->count = $artist->count + 1;
        $artist->save();
        
        $chord = Chord::where('artist_id', $artist->id)->get();
        $otherArtist = Artist::orderBy('id', 'desc')->take(12)->get();
        return view('web.artist.show', compact('artist', 'chord', 'otherArtist'));
    }
}
