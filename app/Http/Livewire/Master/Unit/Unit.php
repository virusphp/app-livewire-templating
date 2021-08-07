<?php

namespace App\Http\Livewire\Master\Unit;

use App\Models\Unit as AppModelsUnit;
use App\Repositories\Master\Unit as AppUnit;
use Livewire\Component;
use Livewire\WithPagination;

class Unit extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'unitStore' => 'handleStore',
        'unitUpdate' => 'handleUpdate'
    ];

    public $limit = 10;
    public $search;

    public function render(AppUnit $unit)
    {
        $units = $unit->getUnit($this->search, $this->limit);
        return view('livewire.master.unit.unit', compact('units'));
    }

    public function handleStore($unit)
    {
        session()->flash('message', $unit['nmbagian'].' Created Successfully.');

        $this->emit('alert_remove');
    }

    public function handleUpdate($unit)
    {
        session()->flash('message', $unit['nmbagian'].' Updated Successfully.');

        $this->emit('alert_remove');
    }

    public function delete($kodeBagian)
    {
        $unit = AppModelsUnit::find($kodeBagian);

        $unit->delete();

        session()->flash('message', $unit->nmbagian. ' Deleted Successfully');

        $this->emit('alert_remove');
    }

}
