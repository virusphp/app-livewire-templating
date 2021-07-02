<?php

namespace App\Http\Livewire\Master\Suplier;

use Livewire\Component;
use App\Repositories\Master\Suplier as AppSuplier;

class ModalSuplier extends Component
{
    public $namaSuplier, $alamat, $telpon;
    public $kodeSuplier;
    public $show;
    public $modeUpdate;

    public $listeners = ['showModal' => 'showModal'];

    protected $rules = [
        'namaSuplier' => 'required',
        'alamat' => 'required|min:6',
        'telpon' => 'required|min:10'
    ];

    public function mount()
    {
        $this->show = false;
        $this->modeUpdate = false;
    }

    public function showModal($data, AppSuplier $suplier)
    {
        if ($data) {
            $suplier = $suplier->editSuplier($data);
            $this->modeUpdate = true;
            $this->edit($suplier);
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit($suplier)
    {
        $this->kodeSuplier = $suplier->kdsuplier;
        $this->namaSuplier = $suplier->nmsuplier;
        $this->alamat = $suplier->alamat;
        $this->telpon = $suplier->telpon;

        $this->doShow();
    }

    public function update(AppSuplier $suplier)
    {
        $this->validate();

        $data = $this->mapData($this->namaSuplier, $this->alamat, $this->telpon, $this->kodeSuplier);

        $suplier = $suplier->updateSuplier($data);

        $this->resetField();

        $this->emit('suplierUpdate', $data); // Refresh 

        $this->doClose();

        $this->modeUpdate = false;

    }
   
    public function store(AppSuplier $suplier)
    {
        $this->validate();

        $data = $this->mapData($this->namaSuplier, $this->alamat, $this->telpon, $this->getAutomatedCode());

        $suplier = $suplier->postSuplier($data);

        $this->resetField();

        $this->emit('suplierStore', $data); // Refresh 

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

    private function mapData($namaSuplier, $alamat, $telpon, $kodeSuplier)
    {
        return [
            'kdsuplier' => $kodeSuplier,
            'nmsuplier' => $namaSuplier,
            'alamat' => $alamat,
            'telpon' => $telpon
        ];
    }

    public function render()
    {
        return view('livewire.master.suplier.modal-suplier');
    }
}
