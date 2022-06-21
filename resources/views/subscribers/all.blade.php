<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="mb-6 text-2xl font-bold text-gray-600 underline">
                        Subscribers
                    </p>

                    @if ($subscribers->isEmpty())
                        <div class="flex w-full p-5 rounded-lg bg-red-50">
                            <p class="text-red-500">
                                No subscribers found.
                            </p>
                        </div>
                    @else
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">
                                        Email
                                    </th>
                                    <th class="px-4 py-2 border">
                                        Created At
                                    </th>
                                    <th class="px-4 py-2 border">
                                        Actions
                                    </th>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td class="px-4 py-2 border">
                                            {{ $subscriber->email }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $subscriber->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{-- <a href="{{ route('subscribers.edit', $subscriber->id) }}"
                                                class="text-blue-500 hover:underline"> --}}
                                            Edit
                                            {{-- </a> --}}
                                            {{-- <form action="{{ route('subscribers.destroy', $subscriber->id) }}"
                                                method="POST" class="inline-block"> --}}
                                            {{-- @csrf --}}
                                            {{-- @method('DELETE') --}}
                                            <button type="submit" class="text-red-500 hover:underline">
                                                Delete
                                            </button>
                                            {{-- </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
