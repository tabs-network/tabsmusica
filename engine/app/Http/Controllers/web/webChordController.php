<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Chord;
use App\Models\Artist;

class webChordController extends Controller
{
    public function index()
    {
        $chord = Chord::orderBy('id', 'desc')->simplePaginate(10);
        $artist = Artist::orderBy('id', 'desc')->take(12)->get();
        $popularChord = Chord::orderBy('count', 'desc')->take(5)->get();
        return view('web.chord.index', compact('chord', 'artist', 'popularChord'));
    }

    public function show($slug)
    {
        $chord = Chord::where('slug', $slug)->first();
        $chord->count = $chord->count + 1;
        $chord->save();
        $relatedChord = Chord::orderBy('id', 'desc')->where('artist_id', $chord->artist_id)->take(5)->get();
        $newChord = Chord::orderBy('id', 'desc')->take(5)->get();
        $otherArtist = Artist::orderBy('id', 'desc')->take(12)->get();
        return view('web.chord.show', compact('chord', 'relatedChord','newChord', 'otherArtist'));
    }

    public function search(Request $request)
    {
        $chord = Chord::where('title', 'like', '%'.$request->key.'%')->simplePaginate(15);
        $chord->appends(['key' => $request->key]);
        $popularChord = Chord::orderBy('count', 'desc')->take(5)->get();
        $artist = Artist::orderBy('id', 'desc')->take(12)->get();
        return view('web.chord.index', compact('chord', 'popularChord', 'artist'));
    }
}
