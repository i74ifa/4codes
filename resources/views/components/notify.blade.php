@props(['color' => 'bg-green-400'])

<div class="py-3 {{ $color }} text-white text-center font-bold text-xl">
    {{ $slot }}
</div>
