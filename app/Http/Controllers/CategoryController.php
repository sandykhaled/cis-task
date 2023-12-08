<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request->validated();
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request,$id)
    {
        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $category->destroy($id);
        return redirect('categories');
    }
}
