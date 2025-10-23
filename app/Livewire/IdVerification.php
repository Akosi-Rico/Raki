<?php

namespace App\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PragmaRX\Google2FA\Google2FA;

class IdVerification extends Component
{
    public $qrData = 'https://example.com/verify?id=123';
    public $authCode;
    public $status;
    public $student = [];

    public function verify()
    {
        // Example verification logic
        if ($this->authCode === '123456') {
            $this->status = 'success';
            $this->student = ['name' => 'John Doe', 'course' => 'BSCS'];
        } else {
            $this->status = 'error';
        }
    }

    public function render()
    {
        return view('livewire.id-verification');
    }
}