<?php
// I MADE GANAL ASMARA JAYA - 2201799386
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
        $article = Article::paginate(6);
        $category = Category::all();

        return view('welcome',['article'=>$article],['category'=>$category]);
    }

    public function about(){

        return view('public.about');
    }

    public function author($id){
        $article = Article::where('user_id',$id)->get();
        $user = User::findOrfail($id);

        return view('public.author',['article'=>$article],['user'=>$user]);
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
