<?php

namespace App\Http\Controllers\admin\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Str;

use App\Models\Artist;
use App\Models\Chord;

class adminArtistChordController extends Controller
{
    public function index($artist_id)
    {
        $artist = Artist::find($artist_id);
        $chord = Chord::where('artist_id', $artist_id)->simplePaginate(10);
        $count = Chord::where('artist_id', $artist_id)->count();
        return view('admin.artist.chord.index', compact('artist', 'chord', 'count'));
    }

    public function create($artist_id)
    {
        $artist = Artist::find($artist_id);
        return view('admin.artist.chord.create', compact('artist'));
    }

    public function store(Request $request, $artist_id)
    {
        $validated = $request->validate([
            'title' => 'required|unique:chord',
            'content' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $chord = new Chord;
        $chord->title = $request->title;
        $chord->content = $request->content;
        $chord->slug = Str::of($request->title)->slug('-');
        $chord->meta_title = $request->meta_title;
        $chord->meta_description = $request->meta_description;
        $chord->artist_id = $artist_id;
        $chord->count = 1;
        $chord->save();

        return redirect()->route('admin.artist.chord.index', $artist_id)->with('status', 'Data added successfully');
    }

    public function edit($id)
    {
        $chord = Chord::find($id);
        return view('admin.artist.chord.edit', compact('chord'));
    }

    public function update(Request $request,$id)
    {
        $chord = Chord::find($id);
        $chord->title = $request->title;
        $chord->content = $request->content;
        $chord->slug = Str::of($request->title)->slug('-');
        $chord->meta_title = $request->meta_title;
        $chord->meta_description = $request->meta_description;
        $chord->save();

        return redirect()->route('admin.artist.chord.index', $chord->artist_id)->with('status', 'Data has been successfully changed');
    }

    public function search(Request $request, $artist_id)
    {
        $chord = Chord::where('artist_id', $artist_id)->where('title', 'like', '%'.$request->key.'%')->simplePaginate(10);
        $chord->appends(['key' => $request->key]);
        $artist = Artist::find($artist_id);
        $count = Chord::where('artist_id', $artist_id)->count();

        return view('admin.artist.chord.index', compact('chord', 'count','artist'));
    }
}
