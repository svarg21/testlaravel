<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostsController extends Controller
{
    function index(){
        $posts = Post::all();
        return view('index',compact('posts'));
    }
    function show(Post $post) {
//        $post = Post::find($id);
        return view('post',compact('post'));
    }
    function create(){
        return view('post-create');
    }
    function edit(Post $post){
        if(Auth::id()==$post->user_id){
            return view('post-edit',compact('post'));
        };
        return redirect('/admin');
    }
    function store(){
        $post = new Post;
        $post->title = request('title');
        $post->description = request('description');
        $post->alias = request('alias');
        $post->content = request('content');
        $post->user_id = Auth::id();
        if (empty(request('public'))){
            $post->public = 'false';
        }
        else{
            $post->public = 'true';
        }
        $this->validate(request(),[
            'title'=>'required',
            'description'=>'required',
            'alias'=>'required',
            'content'=>'required',
        ]);
        $post->save();

        return redirect('/admin');
    }
    function update(Post $post){
        if(Auth::id()==$post->user_id) {
            $this->validate(request(), [
                'title' => 'required',
                'description' => 'required',
                'alias' => 'required',
                'content' => 'required',
            ]);
//        $post = Post::find($id);
            $post->title = request('title');
            $post->description = request('description');
            $post->alias = request('alias');
            $post->content = request('content');
            if (empty(request('public'))) {
                $post->public = 'false';
            } else {
                $post->public = 'true';
            }
            $post->update();
            return redirect('/admin');
        }
        return redirect('/admin');
    }
    public function destroy(Post $post)
    {
        if(Auth::id()==$post->user_id) {
            $post->delete();
            return redirect('/admin');
        }
        return redirect('/admin');
    }
}
