<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('dashboard.products.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 bg-white border-b border-gray-200" dir="rtl">
                        <h1 class="text-2xl text-center border-b">{{ __('Add Product') }}</h1>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-red-400">{{ $error }}</p>
                        @endforeach
                        @endif
                        <div class="py-2">
                            <x-label for="title" :value="__('Title')" />
                            <div class="@error('title') is-invalid relative @enderror">
                                <x-input type="text" id="title" name="title" class="w-full bg-gray-50" autofocus />
                            </div>
                        </div>

                        <div class="py-2">
                            <x-label for="details" :value="__('Details')" />
                            <div class="@error('title') is-invalid relative @enderror">
                            <x-textarea type="text" name="details" id="details" class="w-full bg-gray-50"
                                :placeholder="__('like:') . ' ' . __('messages.content source code and about source code...')">
                            </x-textarea>
                            </div>
                        </div>

                        <div class=" py-2">
                            <x-label for="price" :value="__('Price')" />
                            <div class="@error('price') is-invalid relative @enderror">
                                <x-input type="number" name="price" class="w-full bg-gray-50" />
                            </div>
                        </div>

                        <div class="py-2">
                            <x-label for="price" :value="__('Price')" />
                            <div class="@error('title') is-invalid relative @enderror">
                                <select name="category_id" id="category_id"
                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                                    <option value="" selected disabled>{{ __('Select Category ...') }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="py-2">
                            <x-label for="image" :value="__('Image Product')"></x-label>
                            <label
                                class="
                        w-full
                        flex flex-col
                        items-center
                        px-4
                        py-6
                        bg-white
                        rounded-md
                        shadow-md
                        tracking-wide
                        uppercase
                        border border-blue
                        cursor-pointer
                        hover:bg-indigo-600 hover:text-white
                        text-indigo-600
                        ease-linear
                        transition-all
                        duration-150
                                    ">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z" />
                                    </svg>
                                </i>
                                <span class="mt-2 text-base leading-normal">{{ __('Image Product') }}</span>
                                <input type="file" class="hidden" name="image" id="image" />
                            </label>
                        </div>
                        <x-button rounded class=" shadow w-full">{{ __('Save') }}</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
