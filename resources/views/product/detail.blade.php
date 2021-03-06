<x-guest-layout>
    <!-- Header -->
    <div class="w-full bg-gray-100 shadow-sm">
        <div class="container max-w-6xl mx-auto">
            <div class="h-36 flex">
                <div class="flex items-center h-full px-5 md:px-2">
                    <a href="/" class="eva eva-arrow-ios-forward-outline text-4xl mx-3 text-green-600"></a>
                    <h1 class="text-2xl text-gray-600">{{ $product->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-6xl mx-auto py-5">
        <div class="block md:flex gap-x-5 px-4 md:px-2">
            <div class="md:w-2/3">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($product->images as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset($image->path) }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper py-2">
                    <div class="swiper-wrapper">
                        @foreach ($product->images as $image)
                            <div class="swiper-slide cursor-pointer">
                                <img src="{{ asset($image->path) }}" class="transform brightness-50" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="block pt-7 parsedown">
                    {!! $product->parseDetails() !!}
                </div>
            </div>
            <div class="cards md:w-1/3">
                <div class="h-48 bg-white shadow border px-7 py-4">
                    <div class="flex justify-between">
                        <h1 class="text-2xl text-gray-600 font-bold">{{ __('Price') }}</h1>
                        <h1 class="text-3xl text-gray-600 font-bold">{{ $product->price }} <span class="text-xl">
                                {{ __('YER') }}</span></h1>
                    </div>
                    <div class="text-xs text-gray-500 py-3">
                        <h6> <span class="eva eva-checkmark-circle-2 text-gray-600 text-sm"></span> {{ __('High Quality') }}</h6>
                        <h6> <span class="eva eva-checkmark-circle-2 text-gray-600 text-sm"></span> {{ __('Support by website') }}</h6>
                        <h6> <span class="eva eva-checkmark-circle-2 text-gray-600 text-sm"></span> {{ __('Future Update') }}</h6>
                    </div>
                    <x-a color="dark" rounded href="{{ $product->sending() }}" class="w-full text-center shadow-lg">{{ __('Order') }}</x-a>
                </div>
                <div class="h-auto bg-gradient-to-t pb-5 to-purple-400 from-purple-500 shadow-lg my-3 text-white px-7 py-4">
                    <h3 class="bg-gray-900 bg-opacity-25 font-bold py-0.5 w-1/2 mx-auto text-center rounded-full select-none">??????????</h3>
                    <div class="py-5 w-full h-40">
                        <img src="{{ asset('img/undraw_dev_productivity_umsq.svg') }}" class="w-full h-full ">
                    </div>
                    <h1 class="text-center text-sm px-5">
                        ???????? ???????? ?????????? ???? ?????????? ?????? ??????????
                    </h1>
                <x-a href="#" color="purple" rounded class="border w-full text-center shadow-none mt-2">{{ __('Submit') }}</x-a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
            pagination: {
                el: ".swiper-pagination"
            }
        });
    </script>

</x-guest-layout>
