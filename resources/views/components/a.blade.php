@props(['color' => 'bg-indigo-500 hover:bg-indigo-600 focus:bg-indigo-400', 'rounded' => 'rounded-lg'])

@php
switch ($color) {
    case 'blue':
        $color = 'bg-blue-500 hover:bg-blue-600 focus:bg-blue-400';
        break;
    case 'red':
        $color = 'bg-red-500 hover:bg-red-600 focus:bg-red-400';
        break;
    case 'purple':
        $color = 'bg-purple-500 hover:bg-purple-600 focus:bg-purple-400';
        break;
    case 'yellow':
        $color = 'bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-400';
        break;
    case 'indigo':
        $color = 'bg-indigo-500 hover:bg-indigo-600 focus:bg-indigo-400';
        break;
    case 'gray':
        $color = 'bg-gray-500 hover:bg-gray-600 focus:bg-gray-400';
        break;
    case 'dark':
        $color = 'bg-gray-900 hover:bg-gray-800 focus:bg-gray-700';
        break;
    case 'basic':
            $color = 'bg-basic-400 hover:opacity-110';
        break;

}
@endphp
<a {{ $attributes->merge(['type' => 'submit', 'class' => "py-1 px-4 text-white shadow-md $rounded focus:outline-none focus:ring-2  focus:ring-opacity-75 $color"]) }}>
    {{ $slot }}
</a>
