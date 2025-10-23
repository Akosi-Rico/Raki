<!doctype html>
<html>
<head>
    <title>ID Verification | Raki</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/css/tailwind.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <div class="min-h-100vh flex justify-center grow bg-slate-50 dark:bg-navy-900" x-cloak>
        
        <!-- Sidebar and navigation -->
        <x-sidemenu/>
        <x-navigation/>

        <!-- Main content -->
        <main class="flex-1 mt-10 px-[var(--margin-x)] pb-8">

            <!-- Header with QR -->
            <div class="mt-10 text-center">
                <div class="avatar size-16 mx-auto">
                    <div class="is-initial rounded-full bg-gradient-to-br from-sky-500 to-blue-500 text-white">
                        <i class="fa-solid fa-id-card-clip text-2xl"></i>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-lg inline-block mt-4">
                    {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate($qrData) !!}
                </div>

                <h3 class="mt-3 text-xl font-semibold text-slate-700 dark:text-navy-100">
                    ID Verification Portal
                </h3>
                <p class="mt-1 text-base text-slate-500 dark:text-navy-200">
                    Verify your identity using Microsoft Authenticator.
                </p>
            </div>

            <!-- Verification Form -->
            <div class="mx-auto mt-10 w-full max-w-md card p-6 sm:p-8 text-center">
                <div class="mb-6">
                    <i class="fa-solid fa-qrcode text-4xl text-primary"></i>
                    <h4 class="mt-3 text-lg font-semibold text-slate-700 dark:text-navy-100">
                        Scan the QR at the Gate
                    </h4>
                    <p class="text-sm text-slate-500">
                        Use your phone to scan and open this page.
                    </p>
                </div>

                <form wire:submit.prevent="verify" class="space-y-4">
                    <div>
                        <label for="authCode" class="block text-sm font-medium text-slate-600 dark:text-navy-100">
                            Enter 6-Digit Microsoft Authenticator Code
                        </label>
                        <input
                            type="text"
                            wire:model="authCode"
                            maxlength="6"
                            placeholder="••••••"
                            class="input mt-2 w-full text-center text-xl tracking-[0.5em] font-semibold border border-slate-300 dark:border-slate-700 focus:border-primary focus:ring focus:ring-primary/30"
                            required
                        />
                    </div>

                    <button
                        type="submit"
                        class="btn mt-4 w-full bg-primary text-white font-medium hover:bg-primary/90"
                    >
                        Verify Student
                    </button>
                </form>

                @if ($status === 'success')
                    <div class="mt-6 rounded-lg border border-slate-200 dark:border-slate-700 p-4 text-success">
                        <i class="fa-solid fa-circle-check text-3xl mb-2"></i>
                        <h4 class="text-lg font-semibold">Verification Successful</h4>
                        <p class="text-base mt-1">{{ $student['name'] }} – {{ $student['course'] }}</p>
                        <p class="text-sm text-slate-500">Student verified via Raki system.</p>
                    </div>
                @elseif ($status === 'error')
                <div class="mt-6 rounded-lg border border-slate-200 dark:border-slate-700 p-4 text-error">
                        <i class="fa-solid fa-circle-xmark text-3xl mb-2"></i>
                        <h4 class="text-lg font-semibold">Verification Failed</h4>
                        <p class="text-sm text-slate-500">Invalid or expired code. Please try again.</p>
                    </div>
                @endif
            </div>

            <div class="mx-auto mt-8 w-full max-w-md text-center text-xs text-slate-400">
                <p>Your identity is protected by Microsoft Authenticator and Raki’s secure verification API.</p>
            </div>

        </main>
    </div>

    @livewireScripts
</body>
</html>