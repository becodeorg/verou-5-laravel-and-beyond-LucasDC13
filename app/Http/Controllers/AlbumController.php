<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function myAlbums () 
    {
        return view ('albums.favorites');
    }

    public function index ()
    {
        return view ('albums.all');
    }
}
