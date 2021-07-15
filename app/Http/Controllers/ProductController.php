<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(16);
        return view('products.index', compact('products'));
    }

    public function manindex()
    {
        $products = Product::paginate(16);
        return view('productsmanage.index', compact('products'));
    }

    public function create()
    {
        return view('productsmanage.create');
    }

    public function store(ProductCreateRequest $request)
    {
        $product = Product::create($request->only('title', 'descripcion', 'price')+ [
        'image' => 'products/product-01.jpg']);
        return redirect()->route('productsmanage.show', $product->id)->with('success', 'Usuario creado correctamente');
    }

    public function show(Product $product)
    {
        return view('productsmanage.show', compact('product'));
    }
}
