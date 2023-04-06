<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $table = 'quote';

    protected $primaryKey = 'id';

    protected $fillable = [
        
        'updated_at',
        'created_at',
        'status'
    ];
}
