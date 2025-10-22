<?php

namespace App\Livewire\Institution;

use Livewire\Component;

class LandingPageComponent extends Component
{
    public function render()
    {
        return view('livewire.institution.landing-page-component')->layout('layouts.app');
    }
}
