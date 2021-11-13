@props(['cardTitle', 'src'])
<label {{ $attributes->merge([ 'class' => "relative my-1 px-1 w-full  sm:my-1 sm:px-1 sm:w-full md:my-3 md:px-3
    md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 xl:my-4 xl:px-4 xl:w-1/3" ]) }}>
    <input type="checkbox" class="peer hidden">
    <div
    class="relative peer-checked:border-2 peer-checked:border-indigo-500 w-full md:w-72 justify-center items-center bg-white shadow-md flex flex-col">
        <img src="{{ $src }}" alt="img" title="img" class="w-full h-auto object-cover card-image">
        <div class="w-full pt-5 px-2 justify-start flex flex-col">
            <h4 class="text-xl card-title" data-title="{{ $cardTitle }}">{{ $cardTitle }}</h4>
        </div>
    </div>
</label>
