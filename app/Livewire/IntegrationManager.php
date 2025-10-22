<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Institution\Intergration as Integration;
class IntegrationManager extends Component
{
   public $site_name;
    public $domain;

    public function createIntegration()
    {
        $this->validate([
            'site_name' => 'required|string|max:255',
            'domain' => 'nullable|url',
        ]);

        $integration = Integration::create([
            'site_name' => $this->site_name,
            'domain' => $this->domain,
        ]);

        session()->flash('message', 'Integration created! API Key: ' . $integration->api_key);

        $this->reset(['site_name', 'domain']);
    }

    public function render()
    {
        return view('livewire.integration-manager', [
            'integrations' => Integration::latest()->get(),
        ]);
    }
}
