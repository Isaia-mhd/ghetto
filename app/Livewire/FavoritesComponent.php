<?php

namespace App\Livewire;

use Livewire\Component;

class FavoritesComponent extends Component
{
    public $favorites;
    public function mount()
    {
        $this->favorites = auth()->user()->favorites;
    }
    public function render()
    {
        return view('livewire.favorites-component');
    }
}
