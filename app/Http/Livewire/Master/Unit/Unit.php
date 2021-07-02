<?php

namespace App\Http\Livewire\Master\Unit;

use Livewire\Component;

class Unit extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'unitStore' => 'handleStore',
        'uniUpdate' => 'handleUpdate'
    ];

    public $limit = 10;
    public $search;

    public function render()
    {
        $units = $unit->getUnit($this->search, $this->limit);
        return view('livewire.master.unit.unit', compact('units'));
    }
}
