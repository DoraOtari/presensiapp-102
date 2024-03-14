<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class NikOtomatis extends Component
{
    public $tgl_lahir, $user_id;

    function mount($karyawan = null) {
        if ($karyawan != null) {
           $this->tgl_lahir = $karyawan->tanggal_lahir;
           $this->user_id = $karyawan->user_id;
        }
    }

    function buatNik() {
       return str_replace('-','',$this->tgl_lahir).$this->user_id;
    }

    public function render()
    {
        return view('livewire.nik-otomatis', [
            'users' => User::all(),
            'nik'   => $this->buatNik(),
        ]);
    }
}
