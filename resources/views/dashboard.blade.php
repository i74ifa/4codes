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
                    <div class="md:flex gap-x-5">
                        <div class="lg:w-2/6 md:w-1/2 w-full px-3">
                            <div class="relative bg-white shadow h-24 my-5 rounded-2xl overflow-hidden group">
                                <div class="absolute inset-y-0 right-0 bg-green-600 w-4 duration-200 ease-linear group-hover:w-6"></div>
                                <div class="flex justify-center items-center h-full">
                                    <div class="text-center text-green-600">
                                        <h1 class="text-4xl">2020</h1>
                                        <h1 class="text-lg">اجمالي الطلبات</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-2/6 md:w-1/2 w-full px-3">
                            <div class="relative bg-white shadow h-24 my-5 rounded-2xl overflow-hidden group">
                                <div class="absolute inset-y-0 right-0 bg-green-600 w-4 duration-300 ease-in-out group-hover:w-1/2 px-2 group-hover:bg-green-300 group-hover:drop-shadow-2xl">
                                    <a href="#" class="opacity-0 group-hover:opacity-100 duration-500 flex h-full justify-center items-center text-gray-900 break-all">اسم المنتج هنا</a>
                                </div>
                                <div class="flex justify-center items-center h-full">
                                    <div class="text-center text-green-600">
                                        <h1 class="text-4xl">200</h1>
                                        <h1 class="text-lg">اعلى منتج تفاعلا</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-2/6 md:w-1/2 w-full px-3">
                            <div class="relative bg-white shadow h-24 my-5 rounded-2xl overflow-hidden group">
                                <div class="absolute inset-y-0 right-0 bg-green-600 w-2 duration-300 ease-in-out group-hover:w-1/2 px-2 group-hover:bg-green-300 group-hover:drop-shadow-2xl">
                                    <a href="#" class="opacity-0 group-hover:opacity-100 duration-500 flex h-full justify-center items-center text-gray-900 break-all">اسم المنتج هنا</a>
                                </div>
                                <div class="flex justify-center items-center h-full">
                                    <div class="text-center text-green-600">
                                        <h1 class="text-4xl">200</h1>
                                        <h1 class="text-lg">اعلى منتج تفاعلا</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 px-3 md:px-6">
                    <div class="py-2">
                        <h1 class="text-xl font-bold border-b pb-2 border-gray-200">{{ __('Latest users joined') }}</h1>
                        <div>
                            <table class="table-stipe min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="table-col">
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
