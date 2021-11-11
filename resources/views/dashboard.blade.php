<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" dir="rtl">
                    <div class="md:flex gap-x-5">
                        <x-card-event :href="route('dashboard.category.all')" :titleCard="__('All Categories')" class="border">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmarks-fill w-10" viewBox="0 0 16 16">
                                    <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                                    <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
                                  </svg>
                            </x-slot>
                        </x-card-event>
                        <x-card-event :href="route('dashboard.category.createShow')" :titleCard="__('add Category')" class="border">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmark-plus w-10" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                  </svg>
                            </x-slot>
                        </x-card-event>
                        <x-card-event :href="route('login')" :titleCard="__('Source Code')" class="border">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-code w-10" viewBox="0 0 16 16">
                                    <path d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z"/>
                                  </svg>
                            </x-slot>
                        </x-card-event>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
