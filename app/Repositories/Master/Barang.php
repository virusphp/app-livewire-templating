<?php

namespace App\Repositories\Master;

use DB;

class Barang
{
	public function getBarangFarmasi($term, $status, $page)
    {
        return DB::connection('sqlsrv')
            ->table('barang_farmasi')
            ->select('kd_barang','nama_barang','kd_satuan_besar','kd_satuan_kecil','harga_satuan_besar',
                    'harga_satuan_netto','isi_satuan_besar','dosis')
            ->where('stsaktif', $status)
            ->where(function($query) use ($term) {
               if (!is_null($term)) {
                   $keywords = "%". $term . "%";
                   $query->orWhere('nama_barang', 'like', $keywords);
               }
            })
            ->orderBy('nama_barang', 'asc')
            ->paginate($page);
    }
}