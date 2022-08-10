<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    
    public function create($id)
    {
        $posts=Post::findOrFail($id);
        $comment=new Comment;
        
        return view('comments.create',[
            'post'=>$posts,
            'comment'=>$comment,
        ]);
    }
    
    public function store(Request $request,$post)
    {
        $request->user()->comments()->create([
            'comment'=>$request->comment,
            'post_id'=>$post,
            'user_id'=>\Auth::user()->id,
        ]);

        return redirect(route('posts.show',$post));
    }
 

    public function destroy(Request $request,$id)
    {
        $comment=Comment::findOrFail($id);
        $post_id=$comment->post_id;
        
        if(\Auth::id()===$comment->user_id){
            $comment->delete();
        }
        return redirect(route('posts.show',$post_id));
    }

}
