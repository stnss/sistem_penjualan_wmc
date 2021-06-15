<?php

namespace App\Http\Livewire\Barang;

use Livewire\Component;

class CreateBarang extends Component
{
    public $barangDetails = [];

    public function mount()
    {
        $this->barangDetails = [
            ['satuan' => 'qty', 'harga' => 0]
        ];
    }

    public function addDetail()
    {
        array_push($this->barangDetails, ['satuan' => 'qty', 'harga' => 0]);
    }

    public function removeDetail($index)
    {
        unset($this->barangDetails[$index]);
        array_values($this->barangDetails);
    }

    public function render()
    {
        return view('livewire.barang.create-barang');
    }
}
