<?php

namespace App\Http\Controllers;

use App\Models\ListServices;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $listServices = DB::table('services')
        ->join('categories', 'categories.id', '=', 'services.id_category')
        ->select('services.id', 'services.name', 'services.price', 'services.description', 'categories.name as category', 'categories.url as url')
        ->get();

        $findCategory = DB::table('categories')
        ->select('categories.id','categories.name')
        ->get();

        $findProductsCategories = DB::table('productsCategories')
        ->select('productsCategories.id', 'productsCategories.name')
        ->get();

        return view('services', compact('listServices', 'findCategory', 'findProductsCategories'));
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
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }

    public function showHair($id){
        $findCategory = DB::table('services')
        ->select('services.id', 'services.name', 'services.description')
        ->where('services.id_category', '=', $id)
        ->get();

        $nameHead = DB::table('categories')
        ->select('categories.name')
        ->where('categories.id', '=', $id)
        ->get();

        $findCategoryMenu = DB::table('categories')
        ->select('categories.id','categories.name')
        ->get();

        $findCategoryProducts = DB::table('productsCategories')
        ->select('productsCategories.id', 'productsCategories.name')
        ->get();
        
        return view('listServices', compact('findCategory', 'nameHead', 'findCategoryMenu', 'findCategoryProducts'));
    }
}
