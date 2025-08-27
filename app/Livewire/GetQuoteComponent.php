<?php

namespace App\Livewire;

use Livewire\Component;

class GetQuoteComponent extends Component
{
    public function render()
    {
        return view('livewire.get-quote-component')->layout('components.layouts.base');
    }
}
