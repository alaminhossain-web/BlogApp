<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs=[],$blog;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blogs.manage',[
            'blogs' => Blog::where('author',auth()->user()->name)->orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string',
            'status' => 'required|boolean',
        ]);
        Blog::updateOrCreateBlogs($request);
        return back()->with('success','Blog Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.blogs.edit',[
            'blog' => Blog::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string',
            'status' => 'required|boolean',
        ]);
        Blog::updateOrCreateBlogs($request,$id);
        return redirect()->route('blogs.index')->with('update','Blog Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->blog = Blog::find($id);
        if(file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return back()->with('delete','BLog Deleted Successfully.');
    }
}
