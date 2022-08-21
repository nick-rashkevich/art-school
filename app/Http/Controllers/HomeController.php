<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index()
    {
//        $posts = Post::all();
        return view('pages.index');
    }

//    public function posts()
//    {
////        dd(Auth::user());
//        $posts = Post::all();
//        return view('pages.blog', [
//            'posts' => $posts,
//        ]);
//    }
//
//
//    public function show($slug)
//    {
//        $post = Post::where('slug', $slug)->with('tags')->first();
//
//        return view('pages.show', ['post' => $post]);
//
//    }
//
//    public function tag($slug)
//    {
//        $tag = Tag::where('slug', $slug)->firstOrFail();
//        $posts = $tag->posts()->paginate(2);
//
//        return view('pages.list', ['posts' => $posts]);
//    }
//
//    public function category($slug)
//    {
//        $category = Category::where('slug', $slug)->firstOrFail();
//        $posts = $category->post()->paginate(2);
//
//        return view('pages.list', ['posts' => $posts]);
//
//    }


}
