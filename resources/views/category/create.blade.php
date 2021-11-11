<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session()->has('status'))
        <div>
            {{ session()->get('status') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl md:w-auto mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" dir="rtl">
                    <h1 class="text-2xl text-center py-3">{{ __('add Category') }}</h1>
                    <form action="{{ route('dashboard.category.create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-y-3 justify-center">
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input name="name" id="name" type="text" :placeholder="__('like') . ': PHP Code'" class="w-full" />
                            </div>
                            <label
                                class="
                                w-64
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z" />
                                    </svg>
                                </i>
                                <span class="mt-2 text-base leading-normal">{{  __('Image Product') }}</span>
                                <input type="file" class="hidden" name="logo" />
                            </label>
                            <x-button class="w-full">{{ __('Save') }}</x-button>
                        </div>
                        <div class="flex justify-center pt-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
