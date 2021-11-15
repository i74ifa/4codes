<x-guest-layout>
    <!-- Header -->
    <div class="w-full bg-gray-100 shadow-sm">
        <div class="container max-w-6xl mx-auto">
            <div class="h-36 flex">
                <div class="flex items-center h-full">
                    <h1 class="text-2xl text-gray-600">{{ __('Lorem') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-6xl mx-auto py-5">
        <div class="flex gap-x-5">
            <div class="w-2/3">
                <img src="{{ asset('img/test/2.png') }}">
                <div class="block pt-7">
                    This is details
                </div>
            </div>
            <div class="cards w-1/3">
                <div class="h-48 bg-white shadow border px-7 py-4">
                    <div class="flex justify-between">
                        <h1 class="text-2xl text-gray-600 font-bold">السعر</h1>
                        <h1 class="text-3xl text-gray-600 font-bold">5000</h1>
                    </div>
                    <div class="text-xs text-gray-500 py-3">
                        <h6> <span class="eva eva-checkmark-circle-2 text-green-600 text-sm"></span> {{ __('High Quality') }}</h6>
                        <h6> <span class="eva eva-checkmark-circle-2 text-green-600 text-sm"></span> {{ __('Support by website') }}</h6>
                        <h6> <span class="eva eva-checkmark-circle-2 text-green-600 text-sm"></span> {{ __('Future Update') }}</h6>
                    </div>
                    <x-a color="green" rounded href="#" class="w-full text-center shadow-lg">{{ __('Order') }}</x-a>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
