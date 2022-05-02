<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('addBlog');
    }

    public function takeAll()
    {
        $data = blog::all();
        return view('allBlogs', ['allBlog' => $data]);
    }
    public function show($id)
    {
        $data = blog::find($id);
        return view('blogEdit', ['blog' => $data]);
    }
    public function add(Request $request)
    {

        $ekle = blog::insert([
            'blogTitle' => $request->blogTitle,
            'blogDesc' => $request->blogDesc
        ]);
        if ($ekle) {
            return redirect('/');
        }
    }
}