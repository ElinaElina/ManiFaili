<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function firstpage(){
        return 'firstpage';
    }
    public function carusel(){
        return 'carusel';
    }
    public function chatbox(){
        return 'chatbox';
    }
    public function video(){
        return 'video';
    }
    public function registerbox(){
        return 'registerbox';
    }
    public function blog(){
        return 'blog';
    }
    // public function index(){
    //     return 'INDEX';
    // }

    // Route::get('/firstpage', function () {
        //     return view('firstpage');
        // });
        // Route::get('/carusel', function () {
        //     return view('carusel');
        // });
        // Route::get('/chatbox', function () {
        //     return view('chatbox');
        // });
        // Route::get('/video', function () {
        //     return view('video');
        // });
        // Route::get('/registerbox', function () {
        //     return view('registerbox');
        // });
        
        
}
?>
