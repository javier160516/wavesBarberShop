<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Hour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use PayPalCheckoutSdk\Core\PaypalHttpClient;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Sirve para proteger la vista sin antes estar logeado o registrado
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Esta funcion lo que hace es un join con la tabla categorias y la tabla servicios para poder
    //listar los tipos de servicios segun sus categorías.
    public function index(Request $request)
    {
        $hours = Hour::where('status', 1)
            ->get();

        $listServices = DB::table('services')
            ->join('categories', 'categories.id', '=', 'services.id_category')
            ->select('services.id', 'services.name', 'services.price', 'services.description', 'categories.name as category', 'categories.url as url')
            // ->select('services.id', 'services.name', 'services.price', 'services.description', 'services.category')
            ->get();
        
        $listPayments = DB::table('payment_type')
            ->select('payment_type.id', 'payment_type.name')
            ->get();

        $listQuoteType = DB::table('quote_type')
        ->select('quote_type.id', 'quote_type.name')
        ->get();     
        return view(
            'date',
            [
                'listServices' => $listServices,
                'listPayments' => $listPayments,
                'listQuoteType' => $listQuoteType,
                'hours' => $hours,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Esta funcion sirve para poder insertar los datos de la cita dependiendo
    //los datos enviados mediante la petición ajax
    public function create(Request $request)
    {
        $requestDate = request()->except('_token');
        $today = date('YYYY-mm-dd');

        if($request->isMethod('post')){
            Date::insert([
                'quoteType' => $requestDate['quoteType'],
                'date' => $requestDate['date'],
                'hour' => $requestDate['hour'],
                'nameUser' => $requestDate['nameUser'],
                'service' =>implode ($requestDate['service']),
                'surnames' => $requestDate['surnames'],
                'address' => $requestDate['address'],
                'phone' => $requestDate['phone'],
                'paymentType' => $requestDate['paymentType'],
                'id_users' => Auth::user()->id,
                // 'updated_at' => $today,
                // 'created_at' => $today,
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Date $date)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit(Date $date)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Date $date)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Date $date)
    {
        //
    }
}
