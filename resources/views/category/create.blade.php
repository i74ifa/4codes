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
        <div class="max-w-7xl md:w-1/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" dir="rtl">
                    <h1 class="text-2xl text-center py-3">{{ __('add Category') }}</h1>
                    <form action="{{ route('dashboard.category.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="md:flex gap-x-5">
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input name="name" id="name" type="text" />
                            </div>
                            <div>
                                <x-label for="logo" :value="__('Logo')" />
                                <x-input name="logo" id="logo" type="file" />
                            </div>
                        </div>
                        <div class="flex justify-center pt-3">
                            <x-button>{{ __('Save') }}</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
