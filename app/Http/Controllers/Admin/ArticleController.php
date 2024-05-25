<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{

    public function __construct()
    {
        return $this->middleware('hasCategory', ['only' => 'create', 'update']);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.articles.index', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdims'). '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/'), $fileName);
            Article::create(array_merge($request->validated(), [
                'user_id' => auth()->id(),
                'image' => $fileName
            ]));
        }

        return to_route('articles.index')->with('success', '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.update', ['article' => $article, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        if ($request->hasFile('image')) {
            $articleImage = storage_path('app/public/'. $article->image);
            if (File::exists($articleImage)) {
                File::delete($articleImage);
            }

            $file = $request->file('image');
            $fileName = date('Ymdims'). '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/'), $fileName);
            $article->update(array_merge($request->validated(), [
                'user_id' => auth()->id(),
                'image' => $fileName
            ]));
        }else {
            $article->update(array_merge($request->validated(), [
                'user_id' => auth()->id()
            ]));
        }

        return to_route('articles.index')->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $file = storage_path('app/public/'. $article->image);
        if (File::exists($file)) {
            File::delete($file);
        }
        $article->delete();
        return back()->with('successful', '');
    }
}
