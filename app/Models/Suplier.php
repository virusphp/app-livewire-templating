<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'ap_suplier';
    protected $primaryKey = 'kdsuplier';

    protected $fillable = [
        'kdsuplier','nmsuplier','alamat','telpon'
    ];
}
