<?php

namespace App\Http\Livewire\Master\Unit;

use Livewire\Component;
use App\Repositories\Master\Unit;

class ModalUnit extends Component
{
    public $kodeBagian;
    public $namaBagian;
    public $show;
    public $modeUpdate;

    public $listeners = ['showModal' => 'showModal'];

    protected $rules = [
        'namaBagian' => 'required|min:5',
    ];

    public function mount()
    {
        $this->show = false;
        $this->modeUpdate = false;
    }

    public function showModal($data, Unit $unit)
    {
         if ($data) {
            $unit = $unit->editUnit($data);
            $this->modeUpdate = true;
            $this->edit($unit);
        }
        $this->doShow();
    }

    public function doShow()
    {
        $this->show = true;
    }

    public function doClose()
    {
        $this->show = false;
    }

    public function edit($unit)
    {
        $this->kodeBagian = trim($unit->kdbagian);
        $this->namaBagian = $unit->nmbagian;

        $this->doShow();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(Unit $unit)
    {
        $this->validate();

        $data = $this->mapData($this->namaBagian, $this->getAutomatedCode());

        $unit = $unit->postUnit($data);

        $this->resetField();

        $this->emit('unitStore', $data); // Refresh 

        $this->doClose();
    }

    public function update(Unit $unit)
    {
        $this->validate();

        $data = $this->mapData($this->namaBagian, $this->kodeBagian);

        $unit = $unit->updateUnit($data);

        $this->resetField();

        $this->emit('unitUpdate', $data); // Refresh 

        $this->doClose();

        $this->modeUpdate = false;

    }

    private function getAutomatedCode()
    {
        $unit = new Unit;
        $prefix = "U";
        $maxNumber = trim($unit->getNumberAuto());
        if(!$maxNumber) {
            $start = 1;
            $noUrut = $prefix . sprintf("%04s", $start);

            return $noUrut;
        }

        $noUrut = (int) substr($maxNumber, -4);
        $noUrut++;
        $newNoUrut = $prefix. sprintf("%04s", $noUrut);
        return $newNoUrut;
    }
    
    private function mapData($namaBagian, $kodeBagian)
    {
        return [
            'kdbagian' => $kodeBagian,
            'nmbagian' => $namaBagian
        ];
    }

    private function resetField()
    {
        $this->namaBagian = '';
    }

    public function render()
    {
        return view('livewire.master.unit.modal-unit');
    }

}