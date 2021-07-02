<?php

namespace App\Repositories\Master;

use App\Models\Suplier as AppSuplier;
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

    public function editSuplier($kodeSuplier)
    {
        return DB::connection('sqlsrv')
            ->table('ap_suplier')
            ->select('kdsuplier','nmsuplier','alamat','telpon')
            ->where('kdsuplier', $kodeSuplier)
            ->first();
    }

    public function postSuplier($data)
    {
        // return DB::connection('sqlsrv')
        //     ->table('ap_suplier')
        //     ->insert([
        //         'kdsuplier' => $kodeSuplier,
        //         'nmsuplier' => $nama,
        //         'alamat' => $alamat,
        //         'telpon' => $telepon
        //     ]);
        return AppSuplier::create($data);
    }

    public function updateSuplier($data)
    {
        $dataSuplier = AppSuplier::find($data['kdsuplier']);
        unset($data['kdsuplier']);
        return $dataSuplier->update($data);
    
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