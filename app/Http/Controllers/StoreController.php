<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $findCategory = DB::table('categories')
        ->select('categories.id','categories.name')
        ->get();

        $findProductsCategories = DB::table('productsCategories')
        ->select('productsCategories.id', 'productsCategories.name')
        ->get();

        return view('store', compact('findCategory', 'findProductsCategories'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }

    public function showCategories($name){
        $findProductsCategories = DB::table('productsCategories')
        ->select('productsCategories.id', 'productsCategories.name')
        ->where('productsCategories.name', '=', $name)
        ->get();

        $findCategoryservices = DB::table('categories')
        ->select('categories.id','categories.name')
        ->get();

        $findProducts = DB::table('productsCategories')
        ->select('productsCategories.id', 'productsCategories.name')
        ->get();

        return view('listProducts', compact('findProductsCategories', 'findProducts' ,'findCategoryservices'));
    }
}
