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

    public function user(){
        $user = User::all();

        return view('user')->with('user',$user);
    }

    public function delete_user($id){
        Article::where('user_id', $id)->delete();
        User::findOrfail($id)->delete();

        return back();
    }

    public function blog(){
        $article = Article::all();

        return view('blog')->with('article',$article);
    }
    
    public function delete_blog($id){
        Article::where('id', $id)->delete();

        return back();
    }

    public function profile(){
        $user = Auth::user();

        return view('profile')->with('user',$user);
    }

    public function profile_update(Request $r,$id){
        
        $user = Auth::user();
        if($r->name!=NULL) $user->name = $r->name;
        if($r->email!=NULL) $user->email = $r->email;
        if($r->phone!=NULL) $user->phone = $r->phone;
        $user->save();

        return back();
    }

    public function myblog(){
        $id = Auth::user()->id;
        $article = Article::where('user_id', $id)->get();
        

        return view('myblog')->with('article',$article);
    }

    public function myblog_delete($id){

        Article::where('id', $id)->delete();
        

        return back();
    }

    public function create(){

        return view('create');
    }

    public function create_blog(Request $r){
        
        $user = Auth::user()->id;
        $article = new Article;
        $photo = $r->file('photo')->getClientOriginalName();
        $r->photo->move(public_path('img/'), $photo);
        $article->title = $r->name;
        $article->user_id = $user;
        $article->description = $r->description;
        if($r->category=='Mountain') $article->categories_id = 1;
        else if($r->category=='Beach') $article->categories_id = 2;
        $article->photo = '../img/' . $photo;
        $article->save();
        

        return back();
    }
}
