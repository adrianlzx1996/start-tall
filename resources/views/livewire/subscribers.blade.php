<div class="p-6 bg-white border-b border-gray-200">
    <p class="mb-6 text-2xl font-bold text-gray-600 underline">
        Subscribers
    </p>

    <div class="px-8">

        <x-input type="search" class="float-right w-1/3 pl-8 mb-4 border border-gray-300 rounded-lg" placeholder="Search"
            wire:model.debounce='search' />

        @if ($subscribers->isEmpty())
            <div class="flex w-full p-5 rounded-lg bg-red-50">
                <p class="text-red-500">
                    No subscribers found.
                </p>
            </div>
        @else
            <table class="w-full">
                <thead class="text-indigo-600 border-b-2 border-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-left">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left">
                            Verified
                        </th>
                        <th class="px-6 py-3">
                            Actions
                        </th>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr class="text-sm text-indigo-900 border-b">
                            <td class="px-6 py-4">
                                {{ $subscriber->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never' }}
                            </td>
                            <td class="px-6 py-4">
                                <x-button class="text-red-500 border border-red-500 bg-red-50 hover:bg-red-100"
                                    wire:click='delete({{ $subscriber->id }})'>
                                    Delete
                                </x-button>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
    </div>
</div>
