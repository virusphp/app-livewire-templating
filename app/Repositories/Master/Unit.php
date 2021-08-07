<?php

namespace App\Repositories\Master;

use App\Models\Unit as AppUnit;
use DB;

class Unit
{
	public function getUnit($term, $page)
    {
        return DB::connection('sqlsrv')
            ->table('ap_bagian')
            ->select('kdbagian','nmbagian')
            ->where(function($query) use ($term) {
               if (!is_null($term)) {
                   $keywords = "%". $term . "%";
                   $query->orWhere('nmbagian', 'like', $keywords);
               }
            })
            ->orderBy('kdbagian', 'desc')
            ->paginate($page);
    }

    public function postUnit($data)
    {
        return AppUnit::create($data);
    }

    public function editUnit($kodeUnit)
    {
        return DB::connection('sqlsrv')
            ->table('ap_bagian')
            ->select('kdbagian','nmbagian')
            ->where('kdbagian', $kodeUnit)
            ->first();
    }

    public function updateUnit($data)
    {
        $dataBagian = AppUnit::find($data['kdbagian']);
        unset($data['kdbagian']);
        return $dataBagian->update($data);
    }

    public function getNumberAuto()
    {
        $prefix = "U";
        return DB::connection('sqlsrv')
            ->table('ap_bagian')
            ->where('kdbagian', 'like', $prefix . '%')
            ->max('kdbagian');
    }
}