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

        return view('article_details',['article'=>$article]);
    }

    public function category($id){
        $article = Article::where('category_id', $id)->paginate(6);
        $category = Category::where('id', $id)->firstOrfail();

        return view('article_category',['article'=>$article],['category'=>$category]);
    }

    

    public function profile(){
        $user = Auth::user();

        return view('my_profile',['user'=>$user]);
    }

    public function profile_update(Request $req,$id){
        
        $user = Auth::user();
        if($req->name!=NULL) $user->name = $req->name;
        if($req->email!=NULL) $user->email = $req->email;
        if($req->phonenum!=NULL) $user->phonenum = $req->phonenum;
        $user->save();

        return back();
    }

    public function blog_list(){
        $id = Auth::user()->id;
        $article = Article::where('user_id', $id)->get();
        

        return view('my_blog',['article'=>$article]);
    }

    public function blog_delete($id){

        Article::where('id', $id)->delete();
        

        return back();
    }

    public function create(){

        return view('create');
    }

    public function create_blog(Request $req){
        
        $user = Auth::user()->id;
        $article = new Article;
        $photo = $r->file('photo')->getClientOriginalName();
        $req->photo->move(public_path('img/'), $photo);

        $article->title = $req->name;
        $article->user_id = $user;
        $article->description = $req->description;
        if($req->category=='1') $article->category_id = 1;
        else if($req->category=='2') $article->category_id = 2;
        $article->photo = '../img/' . $photo;
        $article->save();
        

        return back();
    }

    public function user(){
        $user = User::where('role', '1')->get();

        return view('user_list',['user'=>$user]);
    }

    public function delete_user($id){
        Article::where('user_id', $id)->delete();
        User::findOrfail($id)->delete();

        return back();
    }

    public function all_blog(){
        $article = Article::all();

        return view('all_blog',['article'=>$article]);
    }
    
    public function delete_blog($id){
        Article::where('id', $id)->delete();

        return back();
    }
}
