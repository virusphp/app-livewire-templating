<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = "ap_bagian";

    protected $primaryKey = "kdbagian";

    protected $fillable = [
        'kdbagian','nmbagian',
    ];
}