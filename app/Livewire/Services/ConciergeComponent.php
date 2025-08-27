<?php

namespace App\Livewire\Services;

use Livewire\Component;

class ConciergeComponent extends Component
{
    public function render()
    {
        return view('livewire.services.concierge-component')->layout('components.layouts.base');
    }
}
