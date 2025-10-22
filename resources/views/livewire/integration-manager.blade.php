<div class="max-w-3xl mx-auto p-6 space-y-6">
    <h1 class="text-xl font-bold">Integration Manager</h1>

    @if (session('message'))
        <div class="p-3 bg-green-100 text-green-700 rounded">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="createIntegration" class="space-y-4">
        <div>
            <label class="block font-semibold">Site Name</label>
            <input type="text" wire:model="site_name" class="w-full border rounded p-2">
            @error('site_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-semibold">Domain (optional)</label>
            <input type="text" wire:model="domain" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Generate API Key</button>
    </form>

    <hr class="my-6">

    <h2 class="font-bold text-lg">Existing Integrations</h2>
    <table class="w-full text-sm border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 text-left">Site</th>
                <th class="p-2 text-left">Domain</th>
                <th class="p-2 text-left">API Key</th>
                <th class="p-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($integrations as $integration)
                <tr class="border-t">
                    <td class="p-2">{{ $integration->site_name }}</td>
                    <td class="p-2">{{ $integration->domain }}</td>
                    <td class="p-2 font-mono">{{ $integration->api_key }}</td>
                    <td class="p-2 text-center">
                        <span class="px-2 py-1 rounded {{ $integration->active_flag ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                            {{ $integration->active_flag ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
