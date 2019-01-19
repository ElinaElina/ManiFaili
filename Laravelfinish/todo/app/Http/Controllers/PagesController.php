<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ 
        
        return view('posts.firstpage');
         // return view('posts.firstpage')->with('posts', $posts);
        // public function users(){
        //     $users = Admin::all();
        //     return view('admin.user', compact('users'));
        
    }
    public function carusel(){
        return view('carusel');
    }
    public function chatbox(){
        return view('chatbox');
    }
    public function video(){
        return view('video');
    }
    public function registerbox(){
        return view('registerbox');
    }
    public function blog(){
        // $title = 'Welcome';
        return view('blog');
        // ->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web designe','SEO', 'Developers' ]
        );
        return view('services')->with($data);
    }
    
    // public function index(){
    //     return 'INDEX';
    // }

  
        }
?>
