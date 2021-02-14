<?php
// I MADE GANAL ASMARA JAYA - 2201799386
namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user(){
        $user = User::where('role', '1')->get();

        return view('admin.user_list',['user'=>$user]);
    }

    public function delete_user($id){
        Article::where('user_id', $id)->delete();
        User::findOrfail($id)->delete();

        return back()->with('successMsg','User Deleted!');
    }

    public function all_blog(){
        $article = Article::all();

        return view('admin.blog_list',['article'=>$article]);
    }
    
    public function delete_blog($id){
        Article::where('id', $id)->delete();

        return back()->with('successMsg','Article Deleted!');
    }
}
