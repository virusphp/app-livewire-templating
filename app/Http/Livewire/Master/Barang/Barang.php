<?php

namespace App\Http\Livewire\Master\Barang;

use App\Repositories\Master\Barang as BarangFarmasi;
use Livewire\Component;
use Livewire\WithPagination;

class Barang extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $limit = 10;
    public $search;
    public $status = 1;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render(BarangFarmasi $barangFarmasi)
    {
        $barangFarmasi = $barangFarmasi->getBarangFarmasi($this->search, $this->status, $this->limit);
        return view('livewire.master.barang.barang', compact('barangFarmasi'));
    }
}
