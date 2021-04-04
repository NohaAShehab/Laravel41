<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function postsIndex(){
        $posts=[
            ["title"=>"Post1 tilte","decription"=>"post1 description"],
            ["title"=>"Post2 tilte","decription"=>"post2 description"],
            ["title"=>"Post3 tilte","decription"=>"post3 description"],
            ["title"=>"Post4 tilte","decription"=>"post4 description"],
        ];
        //    $data=compact("posts");
        //    dd($data);  // associative array with key->variable name
        //    "posts"=>$posts; $name="Ahmed";
        //    $compactposts=compact("posts");
        //    dd($compactposts); // "name"=>"Ahmed"
        //    return view("posts",["posts"=>$posts]);
        return view("posts",compact("posts"));
    }

    function showPost ($post){
        $posts=[
            ["title"=>"Post1 tilte","decription"=>"post1 description"],
            ["title"=>"Post2 tilte","decription"=>"post2 description"],
            ["title"=>"Post3 tilte","decription"=>"post3 description"],
            ["title"=>"Post4 tilte","decription"=>"post4 description"],
        ];

        return $posts[$post];
    }
}
