<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
//        if(!Auth::guest()){
            $comment = new Comment;
            $comment->user_id = Auth::id();
            $comment->post_id = $post->id;
            $comment->content = request('comment');
            $comment->parent = 0;
            $comment->save();
            return redirect(Redirect::back()->getTargetUrl());
//        };
//        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$comment_id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post,$comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->content = request('comment');
        $comment->parent = 0;
        $comment->update();
        return redirect(Redirect::back()->getTargetUrl());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,$comment_id)
    {
        $comment = Comment::find($comment_id);
        $comment->delete();
        return redirect(Redirect::back()->getTargetUrl());
    }
}
