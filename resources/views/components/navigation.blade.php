<nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
    <div class="header-container relative flex w-full print:hidden">
        <div class="flex w-full items-center justify-between">
        <div class="size-7">
            <button
            class="menu-toggle cursor-pointer ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-hidden focus:outline-hidden dark:text-accent-light/80"
            :class="$store.global.isSidebarExpanded && 'active'"
            @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
            <span></span>
            <span></span>
            <span></span>
            </button>
        </div>
        </div>
    </div>
</nav>