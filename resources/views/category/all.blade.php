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
                    <div class="flex gap-x-2">
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
