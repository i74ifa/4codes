<div class="h-screen bg-gray-800 py-2 px-4 fixed transform translate-x-full duration-300 lg:translate-x-0 inset-y-0 right-0 lg:sticky w-72"
    dir="{{ $dir }}">
    <div class="text-3xl font-bold my-2 mb-6 text-gray-200 new-font">
        {{ config('app.name') }}
    </div>
    <ul dir="{{ $dir }}">
        <li class="mb-6">
            <div class="relative text-teal-700 focus-within:text-black-700">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                        <i class=" eva eva-search text-lg align-middle"></i>
                    </button>
                </span>
                <input type="search" name="dashboard-search" class="
                w-full
                rounded
                shadow
                py-2
                px-3
                pl-12
                outline-none
                focus:shadow-outline focus:bg-black-200
                bg-gray-300
                placeholder-gray-600
              " placeholder="بحث..." autocomplete="off" />
            </div>
        </li>
        <li class="rounded mb-1">
            <a href="{{ route('dashboard.dashboard') }}" class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-white text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm
              ">
                <i class=" eva eva-home text-lg align-middle"></i>
                <span class="align-middle">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li class="mb-1" x-data="{ collapse: false }">
            <div class="
                relative
                py-2
                px-3
                inline-block
                w-full
                h-full
                text-gray-300 text-sm
                hover:bg-gray-700 hover:text-white
                rounded-sm
                cursor-pointer
                select-none
                " @click="collapse = ! collapse">
                <i class="eva eva-bookmark text-lg align-middle"></i>
                <span class="align-middle">{{ __('Categories') }}</span>
                <span class="absolute left-4">
                    <i class="eva eva-arrow-ios-downward text-lg"></i>
                </span>
            </div>
            <div class="text-gray-200 duration-300 overflow-hidden"
                :class="collapse ?  'max-h-60 ease-in' : 'max-h-0 ease-out'">
                <x-a-link-side :href="route('dashboard.category.create')" class="py-1 px-6">
                    <i class=" eva eva-plus text-lg align-middle"></i>
                    <span class="align-middle">{{ __('add Category') }}</span>
                </x-a-link-side>
                <x-a-link-side :href="route('dashboard.category.all')" class="py-1 px-6">
                    <i class=" eva eva-grid text-lg align-middle"></i>
                    <span class="align-middle">{{ __('All Categories') }}</span>
                </x-a-link-side>
            </div>
        </li>
        <li class="mb-1" x-data="{ collapse: false }">
            <div class="
            relative
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-gray-300 text-sm
              select-none
              cursor-pointer
              hover:bg-gray-700 hover:text-white
              rounded-sm"
            @click="collapse = ! collapse">
              <i class=" eva eva-code text-lg align-middle"></i>
                <span class="align-middle">{{ __('Source Code') }}</span>
                <span class="absolute left-4">
                    <i class="eva eva-arrow-ios-downward text-lg"></i>
                </span>
            </div>
            <div class="text-gray-200 duration-300 overflow-hidden"
                :class="collapse ?  'max-h-60 ease-in' : 'max-h-0 ease-out'">
                <x-a-link-side :href="route('dashboard.products.createShow')" class="py-1 px-6">
                    <i class=" eva eva-plus text-lg align-middle"></i>
                    <span class="align-middle">{{ __('new') }}</span>
                </x-a-link-side>
                <x-a-link-side :href="route('dashboard.category.all')" class="py-1 px-6">
                    <i class=" eva eva-grid text-lg align-middle"></i>
                    <span class="align-middle">{{ __('All Categories') }}</span>
                </x-a-link-side>
            </div>
        </li>
        <li class="mb-1">
            <a href="{{ route('dashboard.settings') }}" class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-gray-300 text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm

            ">
                <i class=" eva eva-settings-outline text-lg align-middle"></i>
                <span class="align-middle">{{ __('Settings') }}</span>
            </a>
        </li>
    </ul>
</div>
