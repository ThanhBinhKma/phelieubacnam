<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.post.index');
    }

    public function create()
    {
        return view('dashboard.post.create');
    }
}
