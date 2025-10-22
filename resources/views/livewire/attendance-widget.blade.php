<div class="p-4 bg-white rounded-lg shadow-md text-center space-y-3">
    <h2 class="font-bold text-lg">Attendance Widget</h2>

    <p class="text-sm text-gray-600">
        For: {{ $integration->site_name }}
    </p>

    @if (session('message'))
        <div class="text-green-600 font-semibold">{{ session('message') }}</div>
    @endif

    <button wire:click="markAttendance" class="bg-blue-600 text-white px-4 py-2 rounded">
        Mark Attendance
    </button>
</div>
