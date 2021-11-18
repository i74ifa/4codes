@props(['color', 'cardTitle', 'cardDetail'])

@php
switch ($color):
    case 'green':
        $color = 'to-green-300 from-green-400';
        break;
    case 'indigo':
        $color = 'to-indigo-300 from-indigo-400';
        break;
    case 'red':
        $color = 'to-red-300 from-red-400';
        break;
    case 'purple':
        $color = 'to-purple-300 from-purple-400';
        break;
endswitch;
@endphp
<div {{ $attributes->merge(['class' => 'p-2']) }}>
    <div class="relative overflow-hidden h-auto w-full select-none bg-gradient-to-t {{ $color }} rounded-2xl shadow-lg my-3 text-white px-7 py-4">
        <div class="py-5 w-full h-32 relative flex justify-center items-center pl-3">
            <div class="text-5xl align-middle">
                {{ $cardTitle }}
            </div>
            <div class="absolute bottom-0">{{ $cardDetail }}</div>
        </div>
        <div class="progress inline-flex gap-x-4 opacity-60">
            <div>
                <div class="absolute w-1.5 h-2/5 bg-black bottom-0 rounded-lg"></div>
            </div>
            <div>
                <div class="absolute w-1.5 h-2/6 bg-black bottom-0 rounded-lg"></div>
            </div>
            <div>
                <div class="absolute w-1.5 h-1/2 bg-black bottom-0 rounded-lg"></div>
            </div>
            <div>
                <div class="absolute w-1.5 h-2/5 bg-black bottom-0 rounded-lg"></div>
            </div>
            <div>
                <div class="absolute w-1.5 h-1/3 bg-black bottom-0 rounded-lg"></div>
            </div>
        </div>
    </div>
</div>
