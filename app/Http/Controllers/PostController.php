<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    private $posts=[
    ["title"=>"Post1 tilte","decription"=>"post1 description"],
    ["title"=>"Post2 tilte","decription"=>"post2 description"],
    ["title"=>"Post3 tilte","decription"=>"post3 description"],
    ["title"=>"Post4 tilte","decription"=>"post4 description"],
    ];
    function postsIndex(){
//        $posts=$this->posts;
        $posts= Post::all();
//        dd($posts);
        return view("posts.index",compact("posts"));
    }
    function showPost ($id){
//        $post=Post::find($id);
        $post=Post::findOrFail($id);  // if object not found --> render 404,notfound
//        $post=$this->posts[$post];
       return view("posts.show",compact("post"));
    }
    function create(){
        // return the view for the creation
//        return "welcome create";
        return view("posts.create");
    }

    function store(){
//        dump($_POST);
        // check if the data are received to the server
        $req=request();  // request object
        $reqParam=request()->all(); // array
//        dump($reqParam);
        $title=request("title");
//        dump($title);

        $post= new Post;
        $post->title=request("title");
        $post->description=request("description");
        $post->save();


        return redirect("/posts");


    }
}
