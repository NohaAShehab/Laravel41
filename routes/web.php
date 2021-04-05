<?php
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// higher order function --> function accept or return with function
Route::get('/', function () {
    return view('welcome');  // view must return with .blade.php
});

Route::get("/iti",function (){
//   return view("welcome");
//    return "ITI";
    $names=["Ahmed","Lina","Ghada","Eman","Aya","Hatem"];
    return $names[0];
});

// required parameter
Route::get("/iti/{index}",function ($index){
    return $index;
});

Route::get("/allposts",function (){
    $posts= [
        "post1"=>"post1jkhkjhkjhjk",
        "post2"=>"post1jkhkjhkjhjk",
    ];

    return $posts;
});

Route::get("/allposts/{post}",function ($post){
    $posts= [
        "post1"=>"post1jkhkjhkjhjk",
        "post2"=>"post2 ",
    ];

    return $posts[$post];
});

Route::get("/request",function (){
    $reqParam=request("email");  // request
    dump($reqParam);
    return "welcome";
});

// create view
Route::get("/blog",function (){
    $posts= [
        "post1"=>"post1 content",
        "post2"=>"post2 content",
        "post3"=>10
    ];

//    $posts=[];
    return view("home",["posts"=>$posts]);
});



Route::get("/posts",[App\Http\Controllers\PostController::class,"postsIndex"]);
Route::get("/posts/create",[App\Http\Controllers\PostController::class,"create"]);
Route::post("/posts/submit",[App\Http\Controllers\PostController::class,"store"]);
Route::get("/posts/show/{post}",[App\Http\Controllers\PostController::class,"showPost"]);


