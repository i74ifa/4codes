<div class="h-screen drop-shadow-xl bg-gray-50 py-2 px-4 fixed text-gray-700 transform translate-x-full duration-300 lg:translate-x-0 inset-y-0 right-0 lg:sticky w-72"
    dir="{{ $dir }}" x-data="{ open: false }"
    :class="open == true ? 'translate-x-0' : 'translate-x-full' " @open-side-bar.window="if ($event.detail.id == 1) open = true">
    <div class="text-3xl font-bold my-2 mb-6 text-gray-700 new-font flex justify-between">
        <span>{{ config('app.name') }}</span>
        <button class="eva eva-arrow-ios-forward-outline lg:hidden" @click="open = false"></button>
    </div>
    <ul dir="{{ $dir }}">
        <li class="mb-6">
            <div class="relative text-teal-700 focus-within:text-black-700" x-data="{ open: false }">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                        <i class=" eva eva-search text-lg align-middle "></i>
                    </button>
                </span>
                <input type="search" name="dashboard-search" class="
                w-full
                rounded-xl
                focus:rounded-b-none
                py-2
                px-3
                pl-12
                outline-none
                border-0
                bg-purple-300
                placeholder-gray-700
                placeholder-right
              " placeholder="بحث" dir="auto" autocomplete="off" @focus="open = true" @focusout="open = false" />
              <div class="absolute w-full py-2 bg-gray-200 z-20 origin-right rounded-b-xl inset-x-0" x-show="open">
              </div>
            </div>
        </li>
        <li class="rounded mb-1">
            <x-admin.side-bar-link eva-icon="eva-home" :link="route('dashboard.dashboard')">
                {{ __('Dashboard') }}
            </x-admin.side-bar-link>
        </li>
        <li class="mb-1" >
            <x-admin.side-bar-dropdown :title="__('Categories')" eva-icon="eva-bookmark">
                <x-a-link-side :href="route('dashboard.category.create')" class="py-1 px-6">
                    <i class=" eva eva-plus text-lg align-middle"></i>
                    <span class="align-middle">{{ __('add Category') }}</span>
                </x-a-link-side>
                <x-a-link-side :href="route('dashboard.category.all')" class="py-1 px-6">
                    <i class=" eva eva-grid text-lg align-middle"></i>
                    <span class="align-middle">{{ __('All Categories') }}</span>
                </x-a-link-side>
            </x-admin.side-bar-dropdown>
        </li>
        <li class="mb-1">
            <x-admin.side-bar-dropdown :title="__('Source Code')" eva-icon="eva-code">
                <x-a-link-side :href="route('dashboard.products.createShow')" class="py-1 px-6">
                    <i class=" eva eva-plus text-lg align-middle"></i>
                    <span class="align-middle">{{ __('new') }}</span>
                </x-a-link-side>
                <x-a-link-side :href="route('dashboard.products.all')" class="py-1 px-6">
                    <i class=" eva eva-grid text-lg align-middle"></i>
                    <span class="align-middle">{{ __('All Products') }}</span>
                </x-a-link-side>
            </x-admin.side-bar-dropdown>
        </li>
        <li class="mb-1">
            <x-admin.side-bar-link eva-icon="eva-settings-outline" :link="route('dashboard.settings')">{{ __('Settings') }}
            </x-admin.side-bar-link>
        </li>
        <li class="mb-1">
            <x-admin.side-bar-dropdown :title="Auth::user()->username" eva-icon="eva-person-outline" open="true">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-a-link-side :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();" class="py-1 px-6">
                        <i class=" eva eva-log-out text-lg align-middle"></i>
                        <span class="align-middle">{{ __('Log Out') }}</span>
                    </x-a-link-side>


                </form>
            </x-admin.side-bar-dropdown>
        </li>
    </ul>
</div>
