<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route pointant vers le controller
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/handleContact', 'ContactController@handleContactForm')->name('contact.post');

Route::get('/testModel', function (){

    //Insertion de post
    //$post = new \App\Post();
    //$post->title = "Titre 1";
    //$post->content = "bszblsqnwklqnw";
    //$post->user_id = auth()->user()->id;
    //$post->save();

    //Modification de post
    //$post = \App\Post::find(1);
   // $post->title = "Un nouveau titre";
   //$post->save();

   // $post = \App\Post::all();
    //dd($post);

    $post = \App\Post::find(1);
    dd($post);

    //Delete post
   // $post = \App\Post::find(1);
   // $post->delet();

    //$posts = \App\Post::where('title', 'Un titre')
                   // ->where('une', 'autre condition')
                   // ->where('created_at', '<', date(1))
                   // ->where('id', '<', 10)
                   //     ->orderBy('DESC')
                    //->get();
    //dd($posts);
});


Route::resource('/posts', 'PostController');
