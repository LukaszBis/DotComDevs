<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = PostModel::where('is_published', true)
            ->latest('published_at')
            ->get();

        return view('blog', compact('posts'));
    }

    public function create()
    {
        if (!auth()->user()->role == 'admin') {
            abort(403);
        }

        return view('blog.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->role == 'admin') {
            abort(403);
        }

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->id();
        $data['is_published'] = true;
        $data['published_at'] = now();

        PostModel::create($data);

        return redirect()->route('blog');
    }

    public function show($slug)
    {
        $post = PostModel::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
