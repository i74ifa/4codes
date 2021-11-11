@props(['bg' => 'bg-gray-500', 'data' => 'false'])
<div  x-data="{ open: {{ $data }} }" {{ $attributes->merge(['class' => "fixed inset-0 w-full h-full $bg bg-opacity-40 z-40"]) }} x-show="open" @open-model.window="if ($event.detail.id == 1) open = true">
    <div class="h-full flex justify-center items-center">
        {{ $slot }}
    </div>
</div>
