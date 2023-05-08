<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;

class ArticleController extends Controller
{
    public function toAdd() {
        return view('article-form');
    }

    public function add(Request $request) {
        Article::create([
                'titre' => $request->input('titre'),
                'resume' => $request->input('resume'),
                'contenu' => $request->input('contenu'),
                'img' => $request->input('img')
            ]
        );
        return redirect('/articles');
    }

    public function toUpdate($id)
    {
        $data = [
            'article' => Article::find($id)
        ];
        return view('article-update', $data);
    }

    public function update(Request $request)
    {
        $id = $request->input('id_article');
        Article::find($id)
            ->update([
                'titre' => $request->input('titre'),
                'resume' => $request->input('resume'),
                'contenu' => $request->input('contenu'),
                'img' => $request->input('img')
                ]
            );
        return redirect('/articles');
    }

    public function delete(Request $request , $id)
    {
        Article::find($id)
            ->delete();
        return redirect('/');
    }

    public function toList() {
        $data = [ 'articles' => Article::all()];
        return view('article-list', $data);
    }

    public function detail($slug) {

        $id_article = explode("-",$slug)[count(explode("-",$slug))-1];
        $data = [ 'article' => Article::find($id_article)];
        return view('article-detail', $data);
    }
}
