<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Chord;
class webHomeController extends Controller
{
    public function index()
    {
        $artist = Artist::orderBy('id', 'desc')->take(12)->get();
        $chord = Chord::take(9)->get();
        return view('web.home.index', compact('artist', 'chord'));
    }
}
