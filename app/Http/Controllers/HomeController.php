<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function home_blogs()
    {
        $data = blog::all();
        return view('homeBlog', ['blogs' => $data]);
    }
    public function show_category($blogCategory)
    {
        $data = blog::where('blogCategory', $blogCategory)->get();
        return view('category', ['category' => $data]);
    }
}
