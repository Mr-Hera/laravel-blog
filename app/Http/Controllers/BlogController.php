<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('blogs.index', [
            'blogs' => Blog::latest()->filter(request(['tags', 'search']))->paginate(3)
        ]);
    }

    public function show(Blog $blog) {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    public function create() {
        return view('blogs.create');
    }

    public function store(Request $request) {
        $formData = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'published' => 'required',
            'description' => 'required',
        ]);

        Blog::create($formData);

        return redirect('/')->with('message', 'Blog Created Successfully!');
    }
}
