<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $findCategory = DB::table('categories')
        // ->select('categories.id','categories.name')
        // ->get();

        // $findProductsCategories = DB::table('productsCategories')
        // ->select('productsCategories.id', 'productsCategories.name')
        // ->get();

        // return view('index', compact('findCategory', 'findProductsCategories'));
        return view('index');
    }
}
