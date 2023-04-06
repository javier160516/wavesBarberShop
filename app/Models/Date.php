<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    //Sirve para que el controlador sepa que usaremos
    //la tabla "date"
    protected $table = 'date';
    //Sirve para saber que la llave primaria es "id"
    protected $primaryKey = 'id';
    //Sirve para saber que esos campos de la tabla
    //"date" se van a ocupar
    protected $fillable = [
        'quoteType',
        'date',
        'hour',
        'nameUser' ,
        'service' ,
        'surnames' ,
        'address',
        'phone' ,
        'paymentType',
        'id_users' ,
        'updated_at',
        'created_at',
        'status'
    ];
}
