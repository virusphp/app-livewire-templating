<?php

namespace App\Repositories\Master;

use DB;

class Suplier
{
	public function getSuplier($term, $page)
    {
        return DB::connection('sqlsrv')
            ->table('ap_suplier')
            ->select('kdsuplier','nmsuplier','alamat','telpon')
            ->where(function($query) use ($term) {
               if (!is_null($term)) {
                   $keywords = "%". $term . "%";
                   $query->orWhere('nmsuplier', 'like', $keywords);
               }
            })
            ->orderBy('kdsuplier', 'desc')
            ->paginate($page);
    }

    public function postSuplier($nama, $alamat, $telepon, $kodeSuplier)
    {
        // dd($nama, $alamat, $telepon, $kodeSuplier);
        return DB::connection('sqlsrv')
            ->table('ap_suplier')
            ->insert([
                'kdsuplier' => $kodeSuplier,
                'nmsuplier' => $nama,
                'alamat' => $alamat,
                'telpon' => $telepon
            ]);
    }

    public function getNumberAuto()
    {
        $prefix = "SPR";
        return DB::connection('sqlsrv')
            ->table('ap_suplier')
            ->where('kdsuplier', 'like', $prefix . '%')
            ->max('kdsuplier');
    }
}