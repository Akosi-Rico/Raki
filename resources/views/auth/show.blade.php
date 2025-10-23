<section class="main-content w-full px-[var(--margin-x)] pb-8">
    
    <div class="mx-auto mt-8 grid w-full max-w-4xl grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
      
        <div class="card-body">

            <!-- QR Code Display -->
            <div class="text-center">
                <img src="{{ $qrCodeUrl }}" alt="QR Code" class="img-fluid" style="max-width: 250px;">
            </div>

            <form method="POST" action="{{ route('auth.verify') }}">
                @csrf

                <!-- Input for 2FA Code -->
                <div class="form-group">
                    <label for="2fa_code">{{ __('Enter the 2FA code from your Microsoft Authenticator app') }}</label>
                    <input type="text" id="2fa_code" name="2fa_code" class="form-control" required autofocus>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">{{ __('Verify') }}</button>
                </div>
            </form>

            <!-- Error Message Display -->
            @if ($errors->has('2fa_code'))
                <div class="alert alert-danger mt-3">
                    <strong>{{ $errors->first('2fa_code') }}</strong>
                </div>
            @endif
        </div>        
    </div>
</section>