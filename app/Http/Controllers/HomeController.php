<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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
        $article = Article::all();

        return view('welcome',['article'=>$article]);
    }

    public function detail($id)
    {
        $article = Article::findOrfail($id);

        return view('public.details',['article'=>$article]);
    }

    public function category($id){
        $article = Article::where('category_id', $id)->paginate(6);
        $category = Category::where('id', $id)->firstOrfail();

        return view('public.category',['article'=>$article],['category'=>$category]);
    }

    
}
