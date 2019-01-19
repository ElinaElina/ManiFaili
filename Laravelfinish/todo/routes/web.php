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


// Route::get('/', function () {
//     return view('posts.firstpage');
// });
    
// Route::get('/post/{id}', 'PagesController@getPost');

// Route::get('/posts', 'PagesController@firstpage');

Route::get('/firstpage', 'PagesController@index');
Route::get('/carusel', 'PagesController@carusel');
Route::get('/chatbox', 'PagesController@chatbox');
Route::get('/video', 'PagesController@video');
Route::get('/registerbox', 'PagesController@registerbox');
Route::get('/blog', 'PagesController@blog');




//Route::get('/users/{id}/{name}', function ($id,$name) {
//     return view'This is user'.$name.'with an id of'.$id;
// });


 Route::resource('posts' , 'PostsController');

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
?>

