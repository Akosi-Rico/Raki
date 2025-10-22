<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Institution\Intergration as Integration;

class AttendanceWidget extends Component
{
    public $api_key;
    public $integration;

    public function mount()
    {
        $this->integration = Integration::where('api_key', request('api_key'))
            ->where('active_flag', true)
            ->firstOrFail();
    }

    public function markAttendance()
    {
        // Example only — later you can add real attendance logic
        session()->flash('message', 'Attendance marked for ' . $this->integration->site_name);
    }

    public function render()
    {
        return view('livewire.attendance-widget');
    }
}
