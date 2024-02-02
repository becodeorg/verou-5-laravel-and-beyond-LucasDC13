<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login ()
    {
        return view ('users.login');
    }

    public function create () 
    {
        return view ('users.create');
    }

    public function store ()
    {

    }
}
