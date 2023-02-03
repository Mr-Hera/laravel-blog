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

        if($request->hasFile('cover')) {
            $formData['cover'] = $request->file('cover')->store('covers', 'public');
        }

        $formData['user_id'] = auth()->id();

        Blog::create($formData);

        return redirect('/')->with('message', 'Blog Created Successfully!');
    }

    public function edit(Blog $blog) {
        return view('blogs.edit', [
            'blog' => $blog
        ]);
    }

    public function update(Request $request, Blog $blog) {
        // verify ownership of logged in user
        if($blog->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $formData = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'published' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('cover')) {
            $formData['cover'] = $request->file('cover')->store('covers', 'public');
        }

        $blog->update($formData);

        return back()->with('message', 'Blog Updated Successfully!');
    }

    public function destroy(Blog $blog) {
        // verify ownership of logged in user
        if($blog->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }
        
        $blog->delete();
        return redirect('/')->with('message', 'Blog Deleted Successfully!');
    }

    public function manage() {
        return view('blogs.manage', ['blogs' => auth()->user()->blogs()->get()]);
    }
}
