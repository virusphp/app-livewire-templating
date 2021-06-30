<?php

namespace App\Http\Livewire\Master\Suplier;

use App\Repositories\Master\Suplier as AppSuplier;
use Livewire\Component;
use Livewire\WithPagination;

class Suplier extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'suplierStore' => 'handleStore'
    ];

    public $limit = 10;
    public $search;
  
    public function render(AppSuplier $suplier)
    {
        $suplier = $suplier->getSuplier($this->search, $this->limit);
        return view('livewire.master.suplier.suplier', compact('suplier'));
    }

    public function handleStore($suplier)
    {
        session()->flash('message',' Created Successfully.');

        $this->emit('alert_remove');
    }

}