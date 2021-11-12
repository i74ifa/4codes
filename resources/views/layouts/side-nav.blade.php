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
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </span>
                <input type="search" name="q"
                    class="
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
              "
                    placeholder="بحث..." autocomplete="off" />
            </div>
        </li>
        <li class="bg-gray-700 rounded shadow mb-2">
            <a href="#"
                class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-white text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm

            ">
                <svg class="inline h-5 w-5 -mt-1 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                الرئيسية
            </a>
        </li>
        <li class="mb-2">
            <a href="#"
                class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-gray-300 text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm

            ">
                <svg class="inline h-5 w-5 -mt-1 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                اوبشن 1
            </a>
        </li>
        <li class="mb-2">
            <a href="#"
                class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-gray-300 text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm

            ">
                <svg class="inline h-5 w-5 -mt-1 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                تحميل
            </a>
        </li>
        <li class="mb-2">
            <a href="#"
                class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-gray-300 text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm

            ">
                <svg class="inline h-5 w-5 -mt-1 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
                دعم
            </a>
        </li>
        <li class="mb-2">
            <a href="#"
                class="
              py-2
              px-3
              inline-block
              w-full
              h-full
              text-gray-300 text-sm
              hover:bg-gray-700 hover:text-white
              rounded-sm

            ">
                <svg class="inline h-5 w-5 -mt-1 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                الاعدادات
            </a>
        </li>
    </ul>
</div>
