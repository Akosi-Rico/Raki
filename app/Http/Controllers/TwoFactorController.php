<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController  extends Controller
{
    public function show()
    {
        $google2fa = new Google2FA();

        Auth::loginUsingId(1);

        $user = auth()->user();

        // Generate a secret key for the user if not already set
        if (!$user->google2fa_secret) {
            $user->google2fa_secret = $google2fa->generateSecretKey();
            $user->save();
        }

        $otpauthUrl = $google2fa->getQRCodeUrl(
            config('app.name'),
            $user->email,
            $user->google2fa_secret
        );

        $qrCode = new QrCode($otpauthUrl);
        $writer = new PngWriter();
        $image = $writer->write($qrCode);

        // Save the image to the storage folder
        $imagePath = storage_path('app/public/2fa-qr-code.png');
        file_put_contents($imagePath, $image->getString());

        return view('auth.show', ['qrCodeUrl' => asset('storage/2fa-qr-code.png')]);
    }

    public function verify(Request $request)
    {
        $google2fa = new Google2FA();
        $user = auth()->user();

        if ($google2fa->verifyKey($user->google2fa_secret, $request->input('2fa_code'))) {
            // Authentication successful, proceed to user dashboard or other logic
            return redirect()->intended('/home');
        }

        return redirect()->route('auth.show')->withErrors(['2fa_code' => 'Invalid code.']);
    }
}
