<?php

namespace App\Http\Livewire\Master\Suplier;

use Livewire\Component;
use App\Repositories\Master\Suplier as AppSuplier;

class CreateSuplier extends Component
{

    public $namaSuplier, $alamat, $telpon;
    public $kodeSuplier;
    public $show;

    public $listeners = ['showModal' => 'showModal'];

    protected $rules = [
        'namaSuplier' => 'required|max:10',
        'alamat' => 'required|min:6',
        'telpon' => 'required|min:10'
    ];

    public function mount()
    {
        $this->show = false;
    }

    public function showModal()
    {
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
   
    public function store(AppSuplier $suplier)
    {
        $this->validate();

        $suplier = $suplier->postSuplier($this->namaSuplier, $this->alamat, $this->telpon, $this->getAutomatedCode());

        $this->resetField();

        $this->emit('suplierStore', $suplier); // Refresh 

        $this->doClose();
    }

    private function resetField()
    {
        $this->namaSuplier = '';
        $this->alamat = '';
        $this->telpon = '';
    }

    private function getAutomatedCode()
    {
        $suplier = new AppSuplier;
        $prefix = "SPR";
        $maxNumber = trim($suplier->getNumberAuto());
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

    public function render()
    {
        return view('livewire.master.suplier.create-suplier');
    }
}
