<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function index()
    {
        return view('admin.addBlog');
    }

    public function takeAll()
    {
        $data = blog::all();
        return view('admin.allBlogs', ['allBlog' => $data]);
    }

    public function show($id)
    {
        $data = blog::find($id);
        return view('admin.blogEdit', ['blog' => $data]);
    }

    public function update(Request $request)
    {
        $data = blog::find($request->id);
        $data->blogTitle = $request->blogTitle;
        $data->blogShortDesc = $request->blogShortDesc;
        $data->blogCategory = $request->categories;
        $data->blogDesc = $request->blogDesc;

        if ($data->save()) {
            return redirect('admin/blogs');
        }
    }
    public function add(Request $request)
    {

        $ekle = blog::insert([
            'blogTitle' => $request->blogTitle,
            'blogShortDesc' => $request->blogShortDesc,
            'blogCategory' => $request->categories,
            'blogDesc' => $request->blogDesc
        ]);
        if ($ekle) {
            return redirect('admin/blogs');
        }
    }

    public function delete($id)
    {
        $data = blog::find($id);
        $data->delete();
        return redirect('admin/blogs');
    }
}
