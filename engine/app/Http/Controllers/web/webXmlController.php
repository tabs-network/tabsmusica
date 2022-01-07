<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;

use App\Models\Artist;
use App\Models\Chord;

class webXmlController extends Controller
{
    public function sitemap()
    {
        return SitemapIndex::create()
            ->add('chord_sitemap.xml')
            ->add('artist_sitemap.xml')
            ->add('page_sitemap.xml');
    }

    public function page()
    {
        return Sitemap::create()
            ->add('/')
            ->add('/artist')
            ->add('/chord');
    }

    public function chord()
    {
        $sitemap = Sitemap::create();
        $chord = Chord::all();

        foreach($chord as $v){
            $sitemap->add('chord/'.$v->slug);
        }
        
        return $sitemap;
    }

    public function artist()
    {
        $sitemap = Sitemap::create();
        $artist = Artist::all();

        foreach($artist as $v){
            $sitemap->add('artist/'.$v->slug);
        }
        
        return $sitemap;
    }
}
