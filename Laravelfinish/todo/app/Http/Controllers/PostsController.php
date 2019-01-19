<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
// use DB;

class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //this is for creating posts first must login, cant create post whihtout login 
        $this->middleware('auth', ['except' => ['index', 'show']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //listing for all the posts
    {
        //
         $posts = Post::orderBy('created_at','desc')->paginate(10);//with desc last post comes as first

        //  $posts = Post::all();
         return view('posts.blog')->with('posts', $posts);

        // return Post::where('title','Post Two')->get();
        // $posts = DB::select('SELECT * FROM `posts`');
        //  
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function createProvider($provider)
    // {
    //     return new $provider($this->app);
    // }
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // all things which need validate
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',

            // apload jpg,png etc images, max is size and it is 2MG
            'cover_image'=>'image|nullable|max:1999' 
        ]);

        //Handle file upload, click select file and choosing something
        if($request->hasFile('cover_image')){

            //get filename with the extension(myimage.jpg, sunrise.png, etc.)
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //but if someone upload image with same name, then baaad, so saparate it filename and ext
            //file name
            $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME);

            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // upload the image, path works it goes->storage->app->public, thats why need make link to storage
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);

            

        }else{
            // this if file not image
            $fileNameToStore = 'noimage.jpg';
        }

        // return 123;
        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param   int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {   
        //Edit button works here
        $post = Post::find($id);

        //check for correct user, with this you can edit posts only with your login
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');  
        }
        return view('posts.edit')->with('post', $post);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Edit button if you need update your post
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        // return 123;
        // find Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        //Delete button works here
        $post = Post::find($id);

        //check for correct user, with this you can delete posts only with your login
        //cant delete other user posts
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');  
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post removed');

    }
}
