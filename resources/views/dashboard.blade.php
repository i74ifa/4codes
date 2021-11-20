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
                        <x-admin.summary-card color="green" class="lg:w-2/6 md:w-1/2 w-full" :card-title="$summary['users']" :card-detail="__('Total Users')" />
                        <x-admin.summary-card color="purple" class="lg:w-2/6 md:w-1/2 w-full" :card-title="$summary['items']" :card-detail="__('Items added')" />
                        <x-admin.summary-card color="indigo" class="lg:w-2/6 md:w-1/2 w-full" :card-title="$summary['categories']" :card-detail="__('Categories')" />
                    </div>
                </div>
                <div class="py-2 px-3 md:px-6">
                    <div class="py-2">
                        <h1 class="text-xl font-bold border-b pb-2 border-gray-200">{{ __('Latest users joined') }}</h1>
                        <div>
                            <table class="table-stipe min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="table-col">
                                            {{ __('Name') }}
                                        </th>
                                        <th class="table-col">
                                            {{ __('Username') }}
                                        </th>
                                        <th class="table-col">
                                            {{ __('Email') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" id="section-tbody">
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="col" class="table-col">
                                            {{ $user->name }}
                                        </th>
                                        <th scope="col" class="table-col">
                                            {{ $user->username }}
                                        </th>
                                        <th scope="col" class="table-col">
                                            {{ $user->email }}
                                        </th>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="flex justify-center py-5">
                                {{ $users->appends(request()->input()) }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
