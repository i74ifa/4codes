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
                    <h1 class="text-2xl text-center py-3">{{ __('All Categories') }}</h1>
                    <div class="flex gap-2 flex-wrap">
                        <x-card-event :href="route('dashboard.category.createShow')" :titleCard="__('add Category')" class="border">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-plus w-10" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                  </svg>
                            </x-slot>
                        </x-card-event>
                        @foreach ($categories as $category)
                            <x-card-event :title-card="$category->name" class="border" :href="route('dashboard.category.byId', $category->id)">
                                <x-slot name="icon">
                                    {{ $category->products->count() . 'items'}}
                                </x-slot>
                            </x-card-event>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
