<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function index(){
//        $posts = DB::table('posts')->get();
        $posts = Post::all();
        return view('index', compact('posts'));
    }

//    public function show($id){
//        $post = Post::find($id);
//        return view('posts.show', compact('post'));
//    }
//старая версия по id


//новая версия по alias
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $this->validate(request(),[
            'title' => 'required|min:2',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);
        Post::create(
            request(array('title', 'alias', 'intro', 'body'))
        );


//        Post::create(
//        [
//            'title' => request('title'),
//            'alias' => request('alias'),
//            'intro' => request('intro'),
//            'body' => request('body'),
//        ]
//        );

//        $post = new Post;
//        $post->title = request('title');
//        $post->alias = request('alias');
//        $post->intro = request('intro');
//        $post->body = request('body');
//        $post->save();
        return redirect('/');
    }

    public function edit(Post $post){
        return view('posts.edit')->with(compact('post'));
    }

    public function update(Post $post){
        $this->validate(request(),[
            'title' => 'required|min:2',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);

        $post->update(request(['title', 'alias', 'intro', 'body']));
        return redirect('/');

    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }


}
