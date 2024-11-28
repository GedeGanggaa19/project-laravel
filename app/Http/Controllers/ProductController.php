<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = new Product;

        if ($keyword) {
            $products = $products->where('name', 'like', "%{$keyword}%");
        }

        $products = $products->orderBy('name', 'desc')->paginate(3);

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'category.required' => 'Nama category wajib diisi.',
            'brand.required' => 'Nama brand wajib diisi.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'stock.required' => 'Stok produk wajib diisi.',
            'stock.integer' => 'Stok harus berupa bilangan bulat.',
        ]);

        $products = Product::create($validatedData);
        return response()->json([
            'message' => 'Produk berhasil ditambahkan',
            'product' => $products
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->update($request->all());
        return response()->json(['message' => 'Produk berhasil diupdate'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return response()->json(['message' => 'Produk berhasil dihapus'], 200);
    }
}
