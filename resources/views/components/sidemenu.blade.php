<div class="sidebar print:hidden">
  <div class="main-sidebar">
    <div class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">

      @php
        use Illuminate\Support\Facades\Route;
        $currentRoute = Route::currentRouteName();
      @endphp

      <!-- Logo -->
      <div class="flex pt-2">
        <a href="{{ route('landing-page') }}">
          <img class="size-11 bg-transparent rounded-full" src="images/icon/sample2.png" alt="logo"/>
        </a>
      </div>

      <!-- Sidebar Buttons -->
      <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">

        <!-- Dashboard -->
        <a href="{{ route('landing-page') }}"
           class="flex size-11 items-center justify-center rounded-lg
                  outline-hidden transition-colors duration-200
                  hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25
                  dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25
                  {{ Route::currentRouteName() === 'landing-page' ? 'bg-primary/20 text-primary dark:bg-navy-600 dark:text-accent-light' : '' }}"
           x-tooltip.placement.right="'Dashboard'">
          <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor" fill-opacity=".3" d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z"/>
            <path fill="currentColor" d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z"/>
            <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"/>
            <path fill="currentColor" d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"/>
          </svg>
        </a>

        <!-- Document Verification -->
        <a href="{{ route('document.verification') }}"
           class="flex size-11 items-center justify-center rounded-lg
                  outline-hidden transition-colors duration-200
                  hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25
                  dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25
                  {{ Route::currentRouteName() === 'document.verification' ? 'bg-primary/20 text-primary dark:bg-navy-600 dark:text-accent-light' : '' }}"
           x-tooltip.placement.right="'Document Verification'">
          <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 8H19V16C19 17.8856 19 18.8284 18.4142 19.4142C17.8284 20 16.8856 20 15 20H9C7.11438 20 6.17157 20 5.58579 19.4142C5 18.8284 5 17.8856 5 16V8Z" fill="currentColor" fill-opacity="0.3"/>
            <path d="M12 8L11.7608 5.84709C11.6123 4.51089 10.4672 3.5 9.12282 3.5V3.5C7.68381 3.5 6.5 4.66655 6.5 6.10555V6.10555C6.5 6.97673 6.93539 7.79026 7.66025 8.2735L9.5 9.5" stroke="currentColor" stroke-linecap="round"/>
            <path d="M12 8L12.2392 5.84709C12.3877 4.51089 13.5328 3.5 14.8772 3.5V3.5C16.3162 3.5 17.5 4.66655 17.5 6.10555V6.10555C17.5 6.97673 17.0646 7.79026 16.3397 8.2735L14.5 9.5" stroke="currentColor" stroke-linecap="round"/>
            <rect x="4" y="8" width="16" height="3" rx="1" fill="currentColor"/>
            <path d="M12 11V15" stroke="currentColor" stroke-linecap="round"/>
          </svg>
        </a>
        <!-- ID Verification -->
        <a href="{{ route('id.verification') }}"
           class="flex size-11 items-center justify-center rounded-lg
                  outline-hidden transition-colors duration-200
                  hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25
                  dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25
                  {{ Route::currentRouteName() === 'id.verification' ? 'bg-primary/20 text-primary dark:bg-navy-600 dark:text-accent-light' : '' }}"
           x-tooltip.placement.right="'ID Verification'">
          <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>
        </a>

      </div>
    </div>
  </div>
</div>