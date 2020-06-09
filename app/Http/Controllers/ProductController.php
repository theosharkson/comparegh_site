<?php

namespace App\Http\Controllers;

use Exception;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        // dd($params);

        // Check if the product alredy exist. if so just update it
        $product = Product::where('name',$params['name'])->where('url',$params['url'])->first();

        if(!empty($product)){
            try {
                $product->update($params);
            } catch (Exception $e) {
                return response()->json([
                    'status' => 0,
                    'message' => 'Sorry, Unable to Update Product',
                ], 400);
            }

            return response()->json([
                'status' => 1,
                'message' => 'Updated Successfully',
            ], 200);
        }

        //Else Save product if not found
        try {
            $data = Product::create($params);
        } catch (Exception $e) {
            return response()->json([
                'status' => 0,
                'message' => 'Sorry, Unable to Add Product',
            ], 400);
        }

        return response()->json([
            'status' => 1,
            'message' => 'Saved Successfully',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
