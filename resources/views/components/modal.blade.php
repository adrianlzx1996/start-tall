@props(['trigger'])

<div class="fixed top-0 flex items-center w-full h-full bg-gray-900 bg-opacity-60" x-show="{{ $trigger }}"
    @click.self="{{ $trigger }} = false" @keydown.escape.window="{{ $trigger }} = false" x-transition>
    <div {{ $attributes->merge(['class' => 'p-8 m-auto shadow-2xl rounded-xl']) }}>
        {{ $slot }}
    </div>
</div>
