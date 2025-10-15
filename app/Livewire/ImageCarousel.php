<?php

namespace App\Livewire;

use Livewire\Component;

class ImageCarousel extends Component
{
     public $images = [];
    public $currentIndex = 0;

    public function mount($images)
    {
        $this->images = json_decode($images, true) ?? [];
    }

    public function next()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
    }

    public function previous()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
    }

    public function goTo($index)
    {
        $this->currentIndex = $index;
    }
    public function render()
    {
        return view('livewire.image-carousel');
    }
}
