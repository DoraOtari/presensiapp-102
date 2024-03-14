<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ApiDaerahIndo extends Component
{
    public $provinsi, $kota;

    function mount($karyawan = null) {
        if ($karyawan != null) {
            $this->provinsi = $karyawan->provinsi;
            $this->kota = $karyawan->kota;
        }
    }

    function list_kota() {
        $id= explode('/',$this->provinsi)[0];
        return Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/$id.json")->collect();
    }

    function list_provinsi() {
        return Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json")->collect();
    }

    public function render()
    {
        return view('livewire.api-daerah-indo', 
        [
            'list_provinsi' => $this->list_provinsi(),
            'list_kota' => $this->list_kota(), 
        ]
    );
    }
}
