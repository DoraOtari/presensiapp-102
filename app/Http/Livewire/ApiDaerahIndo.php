<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ApiDaerahIndo extends Component
{
    function list_provinsi() {
        return Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json")->collect();
    }

    public function render()
    {
        return view('livewire.api-daerah-indo',
        [
            'list_provinsi' => $this->list_provinsi(), 
        ]
    );
    }
}
