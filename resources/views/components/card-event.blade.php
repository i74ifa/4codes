@props(['titleCard', 'icon' => '', 'content' => '', 'href' => '#'])
<a  href="{{ $href }}" {{ $attributes->merge(['class' => 'rounded-lg bg-white shadow hover:shadow-xl duration-200 relative select-none']) }}>
    <div class="w-full flex justify-center py-4">
        {{ $icon }}
    </div>
    <div class="px-24 text-center">
        <h1 class="font-bold text-xl py-3">{{ $titleCard }}</h1>
        <p class="text-gray-500 text-xs">{{ $content }}</p>
    </div>
</a>
