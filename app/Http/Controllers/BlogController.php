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

    // Dostęp tylko dla admina - pilnuje tego middleware 'admin' w routes/web.php.
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
        ], [
            'title.required'   => 'Podaj tytuł wpisu.',
            'content.required' => 'Treść wpisu nie może być pusta.',
        ]);

        $slug = Str::slug($data['title']);
        $base = $slug;
        $i = 2;
        while (PostModel::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }

        $data['slug'] = $slug;
        $data['user_id'] = auth()->id();
        $data['is_published'] = true;
        $data['published_at'] = now();

        $post = PostModel::create($data);

        return redirect()->route('blog.show', $post->slug)->with('status', 'Wpis został opublikowany.');
    }

    public function show($slug)
    {
        $post = PostModel::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
