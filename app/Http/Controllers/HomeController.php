<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::paginate(6);

        return view('welcome')->with('article',$article);
    }

    public function detail($id)
    {
        $article = Article::findOrfail($id);

        return view('details')->with('article',$article);
    }

    public function category($id){
        $article = Article::where('categories_id', $id)->paginate(6);
        $category = Category::where('id', $id)->firstOrfail();

        return view('category')->with('article',$article)->with('category',$category);
    }
}
