<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chord extends Model
{
    use HasFactory;

    protected $table = 'chord';

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function song()
    {
        return $this->belongsTo(Song::class, 'song_id');
    }
}
