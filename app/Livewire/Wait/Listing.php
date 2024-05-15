<?php

namespace App\Livewire\Wait;
use App\Models\Listw;
use Livewire\Component;

class Listing extends Component
{
    public function render()
    {
        return view('livewire.wait.listing', [
            'posts' => Listw::all()
        ]);
    }
}
