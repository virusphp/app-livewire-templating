<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Master\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    protected $paging = 10;

    public function getSatuan(Request $r, Satuan $satuan)
    {
        $satuan = $satuan->getSatuan($r->term, $this->paging);
        return response()->jsonApi(200, "OK", $satuan);
    }
}
