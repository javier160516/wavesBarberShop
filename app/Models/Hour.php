<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    protected $table = 'hour';

    protected $primaryKey = 'id';

    protected $fillable = [
        'hour',
        'updated_at',
        'created_at',
        'status'
    ];
}
