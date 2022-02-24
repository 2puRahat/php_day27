<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $author;

    public function index()
    {
        return view('add-blog');
    }
    public function create(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;

        $this->blog->save();

        return redirect()->back()->with('messege', 'Blog info save successfully.');

    }
    public function manageBlog()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->get();
        return view('manage-blog',['blogs' => $this->blogs]);
    }
    public function editBlog($id)
    {
        $this->blog = Blog::find($id);
        return view('edit-blog', ['blog' => $this->blog]);
    }
    public function updateBlog(Request $request, $id)
    {
        $this->blog = Blog::find($id);
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

        return redirect('/manage-blog')->with('message', 'student info update successfully');
    }
}
