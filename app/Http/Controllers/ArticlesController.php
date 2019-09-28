<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//link to table model
use App\Article;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        // use ORM to get data

        $articles = Article::orderBy('created_at', 'DESC')->get();

        return view('articles.index')->with(compact('articles'));

    }




    /**
     * create function
     */
    public function create()
    {
        //die("create");
        return view ('Articles.create');
    }

    /**
     * save data in database
     */

     public function store(Request $request){

        //insert article to db

        // $article = new Article();

        // $article->title = $request->get('title');
        // $article->title = $request->get('body');
        // $article->published = $request->published;
        // $article->save();

        // return back();


        //method 2
        // use static method
       // $article = new Article();
        $article = Article::create($request->only('title', 'body' , 'published'));


        //return back();
        //redirect(string url)
        //redirect()->route(name)
        return redirect()->route('articles:index')->with('success', true)->with('message', 'Database updated!');
    }


    public function view(Article $article)
    {
        return view('articles.view')->with(compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit')->with(compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article = Article::update($request->only('title', 'body', 'published'));

        return redirect()->route('articles:index')->with('success', true)->with('message' ,'Article '.$article->id.' is updated!');
    }

    //delete

    public function delete(Article $article)
    {
        $article->delete();

        //return redirect()->route('articles:index')->with('success', true)->with('message', 'Article '.$article->id.'is deleted ');
    }
}
