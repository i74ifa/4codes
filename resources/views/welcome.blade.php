<x-guest-layout>

    <div class="relative md:h-96 h-80 md:overflow-hidden mb-2 bg-banner bg-no-repeat bg-right md:bg-left">
        <div class="absolute transform translate-y-1/2 -translate-x-1/2 left-1/2 top-1/2 w-11/12 md:w-1/2">
            <form action="">
                <div class="w-full flex justify-center">
                    <div class="inline-flex relative">
                        <div>
                            <select name="category_id"
                                class="bg-gray-200 py-3 focus:ring-indigo-500 focus:border-indigo-500 h-full pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="text" name="title" placeholder="بحث..."
                        class="w-full py-2 shadow-sm border-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <button type="submit" class="bg-gray-200 px-2 md:px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <section id="categories" class="container mx-auto">
        <div class="w-full">
            <div class="-mx-1 sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                <div class="flex flex-wrap justify-center gap-y-3">
                    @foreach ($categories as $category)

                        <a href="?category_id={{ $category->id }}"
                            class="bg-white border shadow-md px-5 py-3 select-none hover:shadow-lg hover:bg-gray-100 cursor-pointer">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="codes" class="container mx-auto">
        <div class="w-full flex justify-center">
            <div class="lg:w-4/5">
                <h1 class="text-2xl font-bold text-gray-500">
                    <i class="eva eva-file text-green-400 align-middle"></i>
                    جديدنا
                </h1>
                <div class="flex flex-wrap -mx-1 sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                    @foreach ($products as $product)
                        <div
                            class="my-1 px-1 w-full sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4">
                            <div
                                class="w-full justify-center items-center bg-white shadow hover:shadow-md duration-500 flex flex-col border">
                                <img src="{{ asset($product->image) }}" alt="img" title="img"
                                    class="w-full h-auto object-cover">
                                <div class="w-full pt-5 px-2 py-3 justify-start flex flex-col">
                                    <div class="h-20 overflow-hidden">
                                        <h4 class="py-4">{{ $product->title }}</h4>
                                    </div>
                                    <hr>
                                    <div class="flex justify-between">
                                        <a href="#" value="button"
                                            class="my-4 px-2 py-0.5 text-dark hover:bg-gray-100 rounded-none bg-gray-50 border shadow">{{ $product->price . __('YER') }}</a>
                                        <button value="button"
                                            class="my-4 px-2 py-0.5 text-dark">{{ $product->category->name }}</button>
                                    </div>
                                    <div class="w-full flex">
                                        <x-a rounded color="indigo" class="flex-1 text-center"
                                            href="{{ $product->sending() }}" target="_blank">{{ __('Buy') }}</x-a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h1 class="text-2xl font-bold text-gray-500 inline-flex">
                    <svg class="w-6 h-6 mt-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                            clip-rule="evenodd"></path>
                    </svg>
                    رائج
                </h1>
                <div>

                </div>
            </div>
        </div>
        <div class="flex justify-center py-5">
            {{ $products->appends(request()->input())->links() }}
        </div>
    </section>

</x-guest-layout>
