<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    
    public function index()
    {
        $data=[];
        if(\Auth::check()){
            $user = \Auth::user();
            $posts = $user->posts()->orderBy('created_at','desc')->paginate(10);
            
            $userId = $user->id;
            $commentedPosts = Post::whereHas('comments', function($query) use($userId) {
                $query->where('user_id','=',$userId);
            })->paginate(10);

            $data = [
                'user'=>$user,
                'posts'=>$posts,
                'comments'=>$commentedPosts
            ];
        }

        return view('welcome',$data);
    }
    
    public function create()
    {
        $post=new Post;
        
        return view('posts.create',[
            'post'=>$post,
        ]);
    }

    public function store(Request $request)
    {
        $request->user()->posts()->create([
            'prefectures'=>$request->prefectures,
            'vocal'=>$request->boolean('vocal'),
            'guiter'=>$request->boolean('guiter'),
            'guiter_vocal'=>$request->boolean('guiter_vocal'),
            'bass'=>$request->boolean('bass'),
            'drums'=>$request->boolean('drums'),
            'keyboard'=>$request->boolean('keyboard'),
            'brass'=>$request->boolean('brass'),
            'strings'=>$request->boolean('strings'),
            'dj'=>$request->boolean('dj'),
            'etc'=>$request->boolean('etc'),
            'pr'=>$request->pr,
        ]);
        
        return redirect('/');
    }
   
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        
        return view('posts.edit',[
            'post'=>$post,
        ]);
    }
   
    public function update(Request $request,$id)
    {
        $post=Post::findOrFail($id);

        $request->user()->posts()->update([
            'prefectures'=>$request->prefectures,
            'vocal'=>$request->boolean('vocal'),
            'guiter'=>$request->boolean('guiter'),
            'guiter_vocal'=>$request->boolean('guiter_vocal'),
            'bass'=>$request->boolean('bass'),
            'drums'=>$request->boolean('drums'),
            'keyboard'=>$request->boolean('keyboard'),
            'brass'=>$request->boolean('brass'),
            'strings'=>$request->boolean('strings'),
            'dj'=>$request->boolean('dj'),
            'etc'=>$request->boolean('etc'),
            'pr'=>$request->pr,
        ]);
        
        return redirect('/');
    }
  
    public function destroy($id)
    {
        $post=\App\Post::findOrFail($id);
        
        if(\Auth::id()===$post->user_id){
            $post->delete();
        }
        
        return redirect('/');
    }
    
    public function seek($id)
    {
        $post=Post::findOrFail($id);
        
        return view('posts.search',[
            'post'=>$post,
        ]);
    }
    
    public function search(Request $request)
    {
        $data=[];
        
            $params=$request->all();

            $posts=Post::search($params)->paginate(10);

            $data=[
                'posts'=>$posts,
                'params'=>$params,
            ];
        return view('posts.search',$data);
    }
    
    public function show($id)
    {
        $posts=Post::findOrFail($id);
        $comments = $posts->comments()->orderBy('created_at', 'desc')->paginate(10);
        
        return view('posts.show',[
            'post'=>$posts,
            'comments'=>$comments,
        ]);
      
    }
}