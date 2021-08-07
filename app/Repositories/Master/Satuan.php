<?php

namespace App\Repositories\Master;

use App\Models\Satuan as AppSatuan;
use DB;

class Satuan
{
	public function getSatuan($term, $page)
    {
        return DB::connection('sqlsrv')
            ->table('ap_satuan')
            ->select('idsatuan','nmsatuan')
            ->where(function($query) use ($term) {
               if (!is_null($term)) {
                   $keywords = "%". $term . "%";
                   $query->orWhere('nmsatuan', 'like', $keywords);
               }
            })
            ->orderBy('idsatuan', 'desc')
            ->paginate($page);
    }

    public function postSatuan($data)
    {
        return AppSatuan::create($data);
    }

    public function editUnit($kodeUnit)
    {
        return DB::connection('sqlsrv')
            ->table('ap_satuan')
            ->select('idsatuan','nmsatuan')
            ->where('idsatuan', $kodeUnit)
            ->first();
    }

    public function updateUnit($data)
    {
        $dataBagian = AppSatuan::find($data['idsatuan']);
        unset($data['idsatuan']);
        return $dataBagian->update($data);
    }

    public function getNumberAuto()
    {
        $prefix = "S";
        return DB::connection('sqlsrv')
            ->table('ap_satuan')
            ->where('idsatuan', 'like', $prefix . '%')
            ->max('idsatuan');
    }
}