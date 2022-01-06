<?php

namespace App\Http\Controllers\admin\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

use App\Models\Artist;
use App\Models\Chord;

class adminArtistController extends Controller
{
    // Artist
    public function index()
    {
        $artist = Artist::orderby('id', 'desc')->simplePaginate(10);
        $count = Artist::count();
        return view('admin.artist.index', compact('artist', 'count'));
    }

    public function create()
    {
        return view('admin.artist.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:artist',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $image_name = 'ARTIST-IMAGE-'.date('ymdhis').Str::random(50).'.webp';

        $artist = new Artist;
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->slug = str::of($request->name)->slug('-');
        $artist->image = $image_name;
        $artist->meta_title = $request->meta_title;
        $artist->meta_description = $request->meta_description;
        $artist->count = 0;
        $artist->save();

        Image::make($request->image)->encode('webp', 75)->resize(300,300)->save(storage_path('app/assets/artist/300x300/'.$image_name));
        Image::make($request->image)->encode('webp', 75)->resize(500,500)->save(storage_path('app/assets/artist/500x500/'.$image_name));

        return redirect()->route('admin.artist.index')->with('status', 'Data added successfully');
    }

    public function show($id)
    {
        $artist = Artist::find($id);
        return view('admin.artist.show', compact('artist'));
    }

    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('admin.artist.edit', compact('artist'));
    }

    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);
        if($request->hasFile('image'))
        {
            $validated = $request->validate([
                'image' => 'required|mimes:jpg,png',
            ]);

            Image::make($request->image)->encode('webp', 75)->resize(300,300)->save(storage_path('app/assets/artist/300x300/'.$artist->image));
            Image::make($request->image)->encode('webp', 75)->resize(500,500)->save(storage_path('app/assets/artist/500x500/'.$artist->image));
        }
        
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->slug = str::of($request->name)->slug('-');
        $artist->meta_title = $request->meta_title;
        $artist->meta_description = $request->meta_description;
        $artist->save();

        return redirect()->route('admin.artist.edit', $id)->with('status', 'Data has been successfully changed');
    }

    public function destroy($id)
    {
        
    }

    public function search(Request $request)
    {
        $artist = Artist::where('name', 'like', '%'.$request->key.'%')->simplePaginate(15);
        $artist->appends(['key' => $request->key]);
        $count = Artist::count();

        return view('admin.artist.index', compact('artist', 'count'));
    }
}
