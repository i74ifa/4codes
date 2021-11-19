@props(['open' => 'false', 'title', 'evaIcon'])
<div x-data="{ open: {{ $open }} }">
    <div class="
        relative
        py-2
        px-3
        block
        h-full
        text-purple-700 text-sm
        hover:bg-purple-700 hover:text-white
        rounded-lg
        cursor-pointer
        select-none
        " @click="open = ! open">
        <i class="eva {{ $evaIcon }} text-lg align-middle"></i>
        <span class="align-middle">{{ $title }}</span>
        <span class="absolute left-4">
            <i class="eva eva-arrow-ios-downward text-lg"></i>
        </span>
    </div>
    <div class="text-gray-200 duration-300 overflow-hidden" :class="open ?  'max-h-60 ease-in' : 'max-h-0 ease-out'">
        {{ $slot }}
    </div>
</div>
