<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\BackendController;

class SatuanController extends BackendController
{
    public function index()
    {
        $bcrum = $this->bcrum('Pendaftaran Pasien Baru');
        return view('master.satuan.index', compact('bcrum'));
    }
}
