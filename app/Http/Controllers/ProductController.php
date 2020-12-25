<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\Product as ProductResource;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return new Response(new ProductCollection(Product::all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): Response
    {
        return new Response(new ProductResource(Product::query()->findOrFail($id)));
    }
}
