@props(['cardTitle', 'cardCategory', 'src', 'cardSending', 'cardPrice', "cardDetail"])
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
                    class="my-4 px-2 py-0.5 text-dark hover:bg-gray-100 rounded-none bg-gray-50 border shadow">
                    {{ $cardPrice . __('YER') }}</a>
                <button value="button" class="my-4 px-2 py-0.5 text-dark">{{ $cardCategory }}</button>
            </div>
            <div class="w-full flex md:gap-x-5 gap-x-3">
                <x-a rounded color="green" class="flex-1 text-center flex justify-center" href="{{ $cardSending }}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </x-a>
                <x-a rounded color="gray" class="flex-1 text-center" href="{{ $cardDetail }}">
                    {{ __('Details') }}</x-a>
            </div>
        </div>
    </div>
</div>
