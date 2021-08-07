<?php

namespace App\Http\Livewire\Master\Satuan;

use App\Repositories\Master\Satuan;
use Livewire\Component;

class ModalSatuan extends Component
{
    public $kodeSatuan;
    public $namaSatuan;
    public $show;
    public $modeUpdate;

    public $listeners = ['showModal' => 'showModal'];

    protected $rules = [
        'namaSatuan' => 'required|min:5',
    ];

    public function render()
    {
        return view('livewire.master.satuan.modal-satuan');
    }

    public function mount()
    {
        $this->show = false;
        $this->modeUpdate = false;
    }

    public function showModal($data, Satuan $satuan)
    {
        //  if ($data) {
        //     $satuan = $satuan->editSatuan($data);
        //     $this->modeUpdate = true;
        //     $this->edit($unit);
        // }
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

    private function resetField()
    {
        $this->namaSatuan = '';
    }


     public function store(Satuan $satuan)
    {
        $this->validate();

        $data = $this->mapData($this->namaSatuan, $this->getAutomatedCode());

        $unit = $satuan->postSatuan($data);

        $this->resetField();

        $this->emit('satuanStore', $data); // Refresh 

        $this->doClose();
    }
}
