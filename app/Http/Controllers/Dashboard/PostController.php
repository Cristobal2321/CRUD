<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use views\dashboard\post\create;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return route("post.create");
        // return redirect("/post/create");
        // return redirect()->route("post.create");
        // return to_route("post.create");

        

        $posts = Post::paginate(5);
        return view('dashboard.post.index',compact('posts'));
    }


    
     public function create()
    {
        $categories= Category::pluck('id','title');
        $post = new Post();

        // dd($categories);
    
       echo view ('dashboard.post.create', compact('categories', 'post'));

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // echo($request("title");
        // echo $request->input('slug');  
        
        //request->validate(StoreRequest::myRules());
        // $validated = Validator::make($request->all(),StoreRequest::myRules());
        
        // dd($validated->errors());
        // dd($validated->fails());
    
        
        // $data = array_merge($request->all(),['image'=>'']);

        // Post::create($request->all());

        //dd($data);

        // $data = $request->validated();
        // $data['slug']= Str::slug($data['title']);
        
        // dd($data);


        Post::create($request->validated());
        return to_route("post.index")->with('status',"Registro Creado");

    }   

    public function show(Post $post)
    {
        return view("dashboard.post.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories= Category::pluck('id','title');

        // dd($categories);
    
       echo view ('dashboard.post.edit', compact('categories','post'));   
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {

        $data=$request->validated();
        if(isset($data["image"])){
            $data["image"]= $filename=time().".".$data["image"]->extension();

            $request->image->move(public_path("image/otro"),$filename);
        
        }


        $post->update($data);
    //    $request->session()->flash('status',"Registro Actualizado");
       return to_route("post.index")->with('status',"Registro Actualizado");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        // return to_route("post.index");
        return to_route("post.index")->with('status',"Archivo eliminado");

    }
}
