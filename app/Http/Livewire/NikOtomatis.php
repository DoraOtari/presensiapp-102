<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class NikOtomatis extends Component
{
    public function render()
    {
        return view('livewire.nik-otomatis', ['users' => User::all()]);
    }
}
