<?php

namespace App\Http\Livewire\Master\Suplier;

use App\Models\Suplier as AppModelsSuplier;
use App\Repositories\Master\Suplier as AppSuplier;
use Livewire\Component;
use Livewire\WithPagination;

class Suplier extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'suplierStore' => 'handleStore',
        'suplierUpdate' => 'handleUpdate'
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
        session()->flash('message', $suplier['nmsuplier'].' Created Successfully.');

        $this->emit('alert_remove');
    }

    public function handleUpdate($suplier)
    {
        session()->flash('message', $suplier['nmsuplier'].' Updated Successfully.');

        $this->emit('alert_remove');
    }

    public function delete($kodeSuplier)
    {
        $suplier = AppModelsSuplier::find($kodeSuplier);

        $suplier->delete();

        session()->flash('message', $suplier->nmsuplier. ' Deleted Successfully');

        $this->emit('alert_remove');
    }

}