<x-guest-layout>

    <div class="relative md:h-96 h-80 md:overflow-hidden mb-2 bg-gradient-to-l from-purple-400 to-purple-500 md:bg-left flex flex-col items-center justify-center">
        <div class="py-5 text-2xl transform text-white md:translate-y-2/3 text-center absolute top-0">
            ابحث عن اكواد PHP واكواد تطبيقات جوال وحتى اضافات
        </div>
        <div class="w-full px-5 md:w-1/2">
            <div class="shadow-lg">
                <form action="">
                    <div class="w-full flex justify-center">
                        <div class="inline-flex relative bg-gray-200 dark:bg-gray-900 dark:text-white">
                            <div>
                                <select name="category_id"
                                    class="bg-gray-200 dark:bg-gray-900 py-3 focus:ring-indigo-500 focus:border-indigo-500 h-full pl-2 pr-7 border-transparent bg-transparent text-gray-500 dark:text-gray-100 sm:text-sm">
                                    <option value="">{{ __('All Categories') }}</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="text" name="title" placeholder="{{ __('messages.like: squid game') }}"
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
    </div>
    <section id="categories" class="container mx-auto">
        <div class="w-full">
            <div class="-mx-1 sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                <div class="flex flex-wrap justify-center gap-y-3">
                    <a href="/"
                        class="bg-white border shadow-md px-5 py-3 select-none hover:shadow-lg hover:bg-gray-100 cursor-pointer">
                    {{ __('All Products') }}</a>
                    @foreach ($categories as $category)
                    <a href="?category_id={{ $category->id }}&category_name={{ $category->name }}"
                        class="bg-white border shadow-md px-5 py-3 select-none hover:shadow-lg hover:bg-gray-100 cursor-pointer">
                        {{ $category->name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="categories-cards" class="hidden">
        <div class="container max-w-7xl mx-auto py-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 px-5 lg:px-2 gap-x-6">
                @for ($i = 0; $i < 3; $i++)

                <x-card-category>
                </x-card-category>
                @endfor
            </div>
        </div>
    </section>

    <section id="codes" class="container mx-auto px-3">
        <div class="w-full flex justify-center">
            <div class="lg:w-4/5 px-3">
                <h1 class="text-xl py-3 font-bold text-gray-500">
                    @if (request()->has('category_name'))
                    {{ request()->get('category_name') }}
                    @else
                        <i class="eva eva-file text-green-400 align-middle"></i>
                        {{ __('All Products') }}
                    @endif
                </h1>
                <div class="flex flex-wrap -mx-1 sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                    @foreach ($products as $product)
                    <x-card
                        :src="asset($product->image->path ?? '')"
                        :card-title="$product->title"
                        :card-price="$product->price"
                        :card-category="$product->category->name"
                        :card-sending="route('product.order', $product->id)"
                        :card-detail="route('product.details', $product->id)"
                    ></x-card>
                    @endforeach
                </div>
                @if (! $products->count())
                    <h1 class="text-center py-2 text-red-600 text-lg font-bold">{{ __('no items') }} !!</h1>
                @endif
                <div class="flex justify-center py-5">
                    {{ $products->appends(request()->input())->links() }}
                </div>
                @if ($popular->count())
                <h1 class="text-2xl font-bold text-gray-500 inline-flex pt-7 pb-3">
                    <svg class="w-6 h-6 mt-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                            clip-rule="evenodd"></path>
                    </svg>
                    موصى به
                </h1>
                <div class="flex flex-wrap -mx-1 sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">
                    @foreach ($popular as $p)
                    <x-card
                        :src="$product->image->path ?? ''"
                        :card-title="$p->title"
                        :card-price="$p->price"
                        :card-category="$p->category->name"
                        :card-sending="route('product.order', $p->id)"
                        :card-detail="route('product.details', $p->id)"
                    ></x-card>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>

</x-guest-layout>
