<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return route("category.create");
        // return redirect("/category/create");
        // return redirect()->route("category.create");
        // return to_route("category.create");

        

        $categories = Category::paginate(5);
        return view('dashboard.category.index',compact('categories'));
    }


    
     public function create()
    {
        $category = new Category();    
       echo view ('dashboard.category.create', compact('category'));

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
    
        Category::create($request->validated());
        return to_route("category.index")->with('status',"Registro Creado");

    }   

    public function show(Category $category)
    {
        return view("dashboard.category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {    
       echo view ('dashboard.category.edit', compact('category'));   
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {

      
        $category->update($request->validated());
       return to_route("category.index")->with('status',"Registro Actualizado");

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("category.index")->with('status',"Archivo eliminado");

    }
}
