<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{

    public function index()
    {
        $content = Articles::orderBy('updated_at', 'asc')->paginate(1);
        return view('pages/articles', $content)->with('contents', $content);
    }

    public function new_article_form(Request $request)
    {
        $article = new Articles();
        return view('pages/add-update-article', $article)->with('article', $article);
    }

    public function add_new_article(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'content' => 'required']);
        Articles::create($request->all());
        return redirect('articles');
    }

    public function edit_article_form($id)
    {
        $article = Articles::find($id);
        return view('pages/add-update-article', $article)->with('article', $article);
    }

    public function update_article_record(Request $request)
    {
        $article = Articles::find($request->id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect('articles');
    }

    public function show_by_id($id)
    {
        $content = Articles::find($id);
        return view('pages/article', $content)->with('contents', $content);
    }

    public function delete_by_id($id)
    {
        $res = Articles::where('id', $id)->delete();
        $content = Articles::orderBy('updated_at', 'asc')->paginate(1);
        return view('pages/articles', $content)->with('contents', $content);
    }

}
