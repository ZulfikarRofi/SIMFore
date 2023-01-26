<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(10);
        return view('pages.productdata', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Product();
        return view('pages.createproduct', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'med_name' => 'required|string|min:3',
            'med_id' => 'required|integer|min:1',
            'image' => 'string',
            'farmation' => 'required|string',
            'class' => 'required|string',
            'sell_price' => 'required|numeric|min:3',
            'buy_price' => 'required|numeric|min:3',
        ]);
        $model = new Product();
        $model->med_name = $request->med_name;
        $model->med_id = $request->med_id;
        $model->image = $request->image;
        $model->unit = $request->unit;
        $model->farmation = $request->farmation;
        $model->class = $request->class;
        $model->sell_price = $request->sell_price;
        $model->buy_price = $request->buy_price;
        $model->save();

        return redirect('/productdata')->with('success', 'New Product Has Been Added to Database');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
