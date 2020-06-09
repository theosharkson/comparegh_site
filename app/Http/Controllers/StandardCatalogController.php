<?php

namespace App\Http\Controllers;

use Exception;
use App\StandardCatalog;
use Illuminate\Http\Request;

class StandardCatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function linkedItems()
    {
        $sc = StandardCatalog::has('products', '>=', 2)->get();
        dd($sc->toArray());
        return $sc->toArray();
    }



    public function allProducts()
    {
        $products = StandardCatalog::has('products', '>=', 2)->paginate(20);
        // dd($sc->toArray());
        // return $sc->toArray();

        return view('site.all_products',compact('products'));
    }



    public function productDetails(StandardCatalog $product)
    {
        return view('site.product_details',compact('product'));
    }

    

    



    public function index()
    {
        $sc = StandardCatalog::all();
        // dd($sc);
        return $sc->toJson();
    }


    
    public function onlyNames()
    {
        $sc = StandardCatalog::pluck('name');
        // dd($sc);
        return $sc;
    }



    public function getId(Request $request)
    {
        $params = $request->all();

        $sc_item = StandardCatalog::where('name',$params['name'])->first();

        if(empty($sc_item)){
            return "";
        }
        // dd($sc);
        return $sc_item->id;
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

        try {
            $data = StandardCatalog::create($params);
        } catch (Exception $e) {
            return response()->json([
                'status' => 0,
                'message' => 'Sorry, Unable to Add SC item',
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
     * @param  \App\StandardCatalog  $standardCatalog
     * @return \Illuminate\Http\Response
     */
    public function show(StandardCatalog $standardCatalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StandardCatalog  $standardCatalog
     * @return \Illuminate\Http\Response
     */
    public function edit(StandardCatalog $standardCatalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StandardCatalog  $standardCatalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StandardCatalog $standardCatalog)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StandardCatalog  $standardCatalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(StandardCatalog $standardCatalog)
    {
        //
    }
}
