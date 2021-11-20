<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden">
                <div class="px-3 md:px-6 py-6 border-gray-200" dir="rtl">
                    <h1 class="text-3xl font-bold border-b pb-2 border-gray-200">{{ __('Summary') }}</h1>
                    <div class="md:flex gap-x-5">
                        <x-admin.summary-card color="green" class="lg:w-2/6 md:w-1/2 w-full" :card-title="$summary['users']" :card-detail="__('new Users')" />
                        <x-admin.summary-card color="purple" class="lg:w-2/6 md:w-1/2 w-full" :card-title="$summary['items']" :card-detail="__('Items added')" />
                        <x-admin.summary-card color="indigo" class="lg:w-2/6 md:w-1/2 w-full" :card-title="$summary['categories']" :card-detail="__('Categories')" />
                    </div>
                </div>
                <div class="py-2 px-3 md:px-6">
                    <div class="py-2">
                        <h1 class="text-xl font-bold border-b pb-2 border-gray-200">{{ __('Latest users joined') }}</h1>
                        <div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
