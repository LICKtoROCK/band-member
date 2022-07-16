<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    
    public function index()
    {
        $data=[];
        if(\Auth::check()){
            $user=\Auth::user();
            $posts=$user->posts()->orderBy('created_at','desc')->paginate(10);
            $data=[
                'user'=>$user,
                'posts'=>$posts
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
    

}