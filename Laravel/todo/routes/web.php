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
//     return view('todo');



// Route::get('/firstpage', 'PagesController@firstpage');

// Route::get('/carusel', 'PagesController@carusel');
// Route::get('/chatbox', 'PagesController@chatbox');
// Route::get('/video', 'PagesController@video');
// Route::get('/registerbox', 'PagesController@registerbox');

Route::get('/firstpage', function () {
    return view('firstpage');
});
Route::get('/carusel', function () {
    return view('carusel');
});
Route::get('/chatbox', function () {
    return view('chatbox');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/registerbox', function () {
    return view('registerbox');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::resource('posts' , 'PostsController');

?>