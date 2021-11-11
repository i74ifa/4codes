<x-guest-layout>

    <div class="relative md:h-96 h-80 md:overflow-hidden my-2 bg-banner bg-no-repeat bg-right md:bg-left">
        {{-- <img src="{{ asset('img/banner.jpg') }}" class="object-cover z-0 h-80 md:h-auto"> --}}
        <div class="absolute transform translate-y-1/2 -translate-x-1/2 left-1/2 top-1/2 w-11/12 md:w-1/2">
        <div class="mt-1 relative rounded-md shadow-lg min-w-full">
            <form action="">
                <input type="text" name="title" id="title" class="focus:ring-indigo-500 py-4 focus:border-indigo-500 block w-full pl-7 pr-20 sm:text-sm border-gray-300 rounded-md" placeholder="ابحث عن كود">
                <div class="absolute inset-y-0 right-0 flex items-center">
                <label for="category" class="sr-only">category</label>
                <select id="category" name="category_id" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
            </form>
            </div>
        </div>
    </div>
    <section id="codes" class="container w-full mx-auto">
        <div class="w-full flex justify-center">
            <div class="lg:w-4/5 flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-3 lg:-mx-4 xl:-mx-4">
            @foreach ($products as $product)
            <div class="my-1 px-1 w-full sm:my-1 sm:px-1 sm:w-full md:my-3 md:px-3 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 xl:my-4 xl:px-4 xl:w-1/3">
                <div class="w-full justify-center items-center bg-white shadow-lg hover:shadow-md duration-500 rounded-lg flex flex-col">
                <img src="{{ asset('img/1.png') }}" alt="img" title="img" class="w-full h-auto object-cover rounded-t-lg">
                    <div class="w-full pt-5 px-2 py-3 justify-start flex flex-col">
                        <h4 class="py-4">{{ $product->title }}</h4>
                        <hr>
                        <div class="flex justify-between">
                            <a href="#" value="button" class="my-4 px-2 py-0.5 text-dark hover:bg-gray-100 rounded-none bg-gray-50 border shadow">{{ $product->price . __('YER') }}</a>
                            <button value="button" class="my-4 px-2 py-0.5 text-dark">{{ $product->category->name }}</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <div class="flex justify-center py-5">
            {{ $products->appends(request()->input())->links() }}
        </div>
    </section>

</x-guest-layout>
