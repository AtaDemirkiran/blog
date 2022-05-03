<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = blog::all();
        return view('index', ['blogs' => $data]);
    }
    public function show_category($blogCategory)
    {
        $data = blog::where('blogCategory', $blogCategory)->get();
        return view('category', ['category' => $data]);
    }
}
