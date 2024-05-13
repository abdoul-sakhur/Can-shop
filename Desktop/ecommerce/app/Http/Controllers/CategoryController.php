<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category', ['categories' => Category::orderBy('created_at', 'desc')->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
    {
        $category = new Category();
  
        return view('admin.categoryForm', [
            'category' => $category,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->Validated());

      

        return to_route('admin.category.index')->with('success', 'la categorie a ete cree');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categoryForm', [
            'category' => $category,
            // 'categories'=>Product::pluck('title','id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return to_route('admin.category.index')->with('success', 'la categorie a ete modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return to_route('admin.category.index')->with('success', 'La categorie a ete supprimer avec success');
    }
}
