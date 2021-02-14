<?php
// I MADE GANAL ASMARA JAYA - 2201799386
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();

        return view('user.profile',['user'=>$user]);
    }

    public function profile_update(Request $req,$id){
        $validated = $req->validate([
            'name' => ['string'],
            'email' => ['string', 'email'],
            'phone' => ['string'],
           
        ]);
        
        $user = Auth::user();
        if($req->name!=NULL) $user->name = $req->name;
        if($req->email!=NULL) $user->email = $req->email;
        if($req->phone!=NULL) $user->phone = $req->phone;
        $user->save();

        return back()->with('successMsg','Profile Updated!');
    }

    public function article(){
        $id = Auth::user()->id;
        $article = Article::where('user_id', $id)->get();
        

        return view('user.article_list',['article'=>$article]);
    }

    public function article_delete($id){

        Article::where('id', $id)->delete();
        

        return back()->with('successMsg','Article Deleted!');
    }

    public function create(){

        return view('user.create');
    }

    public function create_article(Request $req){

        $validated = $req->validate([
            'name' => ['required','string'],
            'story' => ['required','string'],
            'category' => ['required'],
            'photo' => ['required','image']
        ]);
        
        $user = Auth::user()->id;
        $article = new Article;
        $photo = $req->file('photo')->getClientOriginalName();
        $req->photo->move(public_path('img/'), $photo);

        $article->title = $req->name;
        $article->user_id = $user;
        $article->description = $req->story;
        $article->category_id = $req->category;
        $article->photo = '../img/' . $photo;
        $article->save();
        

        return back()->with('successMsg','Blog Published!');
    }
}
