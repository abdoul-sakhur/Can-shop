<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Http\Requests\SearchProductAdminSide;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SearchProductAdminSide $request)
    {
        $query= new Product();
        if($request->validated('title')){
            $query= $query->where('title','like',"%{$request->validated('title')}%");
        }
        return view('admin.product', ['products' => $query->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        $product = new Product();

        return view('admin.productForm', [
            'product' => $product,
            'categories'=>Category::pluck('title','id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        
        $product = Product::create($request->validated());
        $product->categories()->sync($request->validated('listCategory'));

        if($image=$request->validated('image')){
            $imagePath=$image->store('UploadedImage','public');
             $product->image=$imagePath;
             $product->save();
        }
        return to_route('admin.product.index')->with('success', 'le produit a bien ete ajouter');
    }

    /**
     * Display the specified resource.
     * //  */
    // public function show(string $id)
    // {
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.productForm', [
            'product' => $product,
            'categories'=>Category::pluck('title','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->categories()->sync($request->validated('listCategory'));
        $product->update($request->validated());
        if($product->image){
            Storage::disk('public')->delete($product->image);
        }
        if($image=$request->validated('image')){
            $imagePath=$image->store('UploadedImage','public');
             $product->image=$imagePath;
             $product->save();
        }
      
     
        return to_route('admin.product.index')->with('success', 'le produit a bien ete modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('admin.product.index')->with('success', 'le produit a bien ete supprime');
    }
}
