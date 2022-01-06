<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Artist;
use App\Models\Chord;

class adminChordController extends Controller
{
    public function index()
    {
        $chord = Chord::orderBy('id', 'desc')->simplePaginate(10);
        $count = Chord::count();
        return view('admin.chord.index', compact('chord', 'count'));
    }

    public function create()
    {
        $artist = Artist::orderBy('name', 'asc')->get();
        return view('admin.chord.create', compact('artist'));
    }

    public function store(Request $request)
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
        $chord->slug = str::of($request->title)->slug('-');
        $chord->meta_title = $request->meta_title;
        $chord->meta_description = $request->meta_description;
        $chord->artist_id = $request->artist_id;
        $chord->count = 0;
        $chord->save();

        return redirect()->route('admin.chord.index')->with('status', 'Data added successfully');
    }

    public function edit($id)
    {
        $chord = Chord::find($id);
        $artist = Artist::orderBy('name', 'asc')->get();
        
        return view('admin.chord.edit', compact('chord', 'artist'));
    }

    public function update(Request $request, $id)
    {
        $chord = Chord::find($id);
        $chord->title = $request->title;
        $chord->content = $request->content;
        $chord->slug = str::of($request->title)->slug('-');
        $chord->meta_title = $request->meta_title;
        $chord->meta_description = $request->meta_description;
        $chord->artist_id = $request->artist_id;
        $chord->save();

        return redirect()->route('admin.chord.edit', $id)->with('status', 'Data has been successfully changed');
    }

    public function destroy($id)
    {
        
    }
}
