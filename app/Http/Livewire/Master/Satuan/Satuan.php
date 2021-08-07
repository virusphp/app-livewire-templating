<?php

namespace App\Http\Livewire\Master\Satuan;

use App\Repositories\Master\Satuan as AppSatuan;
use Livewire\Component;
use Livewire\WithPagination;

class Satuan extends Component
{
     use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'unitStore' => 'handleStore',
        'unitUpdate' => 'handleUpdate'
    ];

    public $limit = 10;
    public $search;
    
    public function render(AppSatuan $satuan)
    {
        $satuans = $satuan->getSatuan($this->search, $this->limit);
        return view('livewire.master.satuan.satuan', compact('satuans'));
    }
}
