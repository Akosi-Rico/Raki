<section class="main-content w-full px-[var(--margin-x)] pb-8">
  <!-- Dashboard Header -->
  <div class="mt-12 text-center">
    <div class="avatar size-16">
      <div class="is-initial rounded-full bg-gradient-to-br from-blue-500 to-indigo-500 text-white">
        <i class="fa-solid fa-chart-line text-2xl"></i>
      </div>
    </div>
    <h3 class="mt-3 text-xl font-semibold text-slate-700 dark:text-navy-100">
      Verification Dashboard
    </h3>
    <p class="mt-0.5 text-base text-slate-500 dark:text-navy-200">
      Overview of document and ID verification status powered by Raki
    </p>
  </div>

  <!-- Summary Cards -->
  <div class="mx-auto mt-10 grid w-full max-w-5xl grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 sm:gap-5 lg:gap-6">

    <!-- Documents: Verified -->
    <div class="card flex flex-col items-center p-5">
      <div class="avatar size-12">
        <div class="is-initial rounded-full bg-success text-white">
          <i class="fa-solid fa-file-circle-check text-xl"></i>
        </div>
      </div>
      <p class="mt-3 text-base font-medium text-slate-600 dark:text-navy-100">
        Documents Verified
      </p>
      <h2 class="text-3xl font-bold text-success mt-1">128</h2>
      <p class="text-xs text-slate-400 mt-1">Verified via Raki</p>
    </div>

    <!-- Documents: Pending -->
    <div class="card flex flex-col items-center p-5">
      <div class="avatar size-12">
        <div class="is-initial rounded-full bg-warning text-white">
          <i class="fa-solid fa-file-circle-question text-xl"></i>
        </div>
      </div>
      <p class="mt-3 text-base font-medium text-slate-600 dark:text-navy-100">
        Pending Documents
      </p>
      <h2 class="text-3xl font-bold text-warning mt-1">24</h2>
      <p class="text-xs text-slate-400 mt-1">Awaiting approval</p>
    </div>

    <!-- IDs: Verified -->
    <div class="card flex flex-col items-center p-5">
      <div class="avatar size-12">
        <div class="is-initial rounded-full bg-info text-white">
          <i class="fa-solid fa-id-card-clip text-xl"></i>
        </div>
      </div>
      <p class="mt-3 text-base font-medium text-slate-600 dark:text-navy-100">
        IDs Verified
      </p>
      <h2 class="text-3xl font-bold text-info mt-1">89</h2>
      <p class="text-xs text-slate-400 mt-1">Validated via Raki</p>
    </div>

    <!-- IDs: Pending -->
    <div class="card flex flex-col items-center p-5">
      <div class="avatar size-12">
        <div class="is-initial rounded-full bg-error text-white">
          <i class="fa-solid fa-id-card text-xl"></i>
        </div>
      </div>
      <p class="mt-3 text-base font-medium text-slate-600 dark:text-navy-100">
        Pending ID Verification
      </p>
      <h2 class="text-3xl font-bold text-error mt-1">15</h2>
      <p class="text-xs text-slate-400 mt-1">For manual review</p>
    </div>

  </div>

  <!-- Optional: Section link buttons -->
  <div class="mt-10 flex justify-center gap-4">
    <a
      href="docs-requirements.html"
      class="btn bg-success/10 text-success hover:bg-success/20"
    >
      View Documents
    </a>
    <a
      href="ids-requirements.html"
      class="btn bg-info/10 text-info hover:bg-info/20"
    >
      View IDs
    </a>
  </div>
</section>