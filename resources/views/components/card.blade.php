@props(['cardTitle', 'cardCategory', 'src', 'cardSending', 'cardPrice'])
<div
    class="my-1 px-1 w-full sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4">
    <div class="w-full justify-center items-center bg-white shadow hover:shadow-md duration-500 flex flex-col border">
        <img src="{{ $src }}" alt="img" title="img" class="w-full h-auto object-cover">
        <div class="w-full pt-5 px-2 py-3 justify-start flex flex-col">
            <div class="overflow-hidden">
                <h4 class="py-4">{{ $cardTitle }}</h4>
            </div>
            <hr>
            <div class="flex justify-between">
                <a href="#" value="button"
                    class="my-4 px-2 py-0.5 text-dark hover:bg-gray-100 rounded-none bg-gray-50 border shadow">{{
                    $cardPrice . __('YER') }}</a>
                <button value="button" class="my-4 px-2 py-0.5 text-dark">{{ $cardCategory }}</button>
            </div>
            <div class="w-full flex">
                <x-a rounded color="indigo" class="flex-1 text-center" href="{{ $cardSending }}" target="_blank">
                    {{ __('Buy') }}</x-a>
            </div>
        </div>
    </div>
</div>
