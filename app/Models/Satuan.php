<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = "ap_satuan";

    protected $primaryKey = "idsatuan";

    protected $fillable = [
        'idsatuan','nmsatuan',
    ];
}