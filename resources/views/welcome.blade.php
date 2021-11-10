<x-guest-layout>

    <div class="relative md:h-96 h-auto md:overflow-hidden my-2">
        <img src="{{ asset('img/banner.jpg') }}" class="object-cover z-0 h-80 md:h-auto">
        <div class="absolute transform translate-y-1/2 -translate-x-1/2 left-1/2 top-1/2 w-11/12 md:w-1/2">
            <div class="mt-1 relative rounded-md shadow-lg min-w-full">
                <input type="text" name="price" id="price" class="focus:ring-indigo-500 py-4 focus:border-indigo-500 block w-full pl-7 pr-20 sm:text-sm border-gray-300 rounded-md" placeholder="ابحث عن كود">
                <div class="absolute inset-y-0 right-0 flex items-center">
                <label for="category" class="sr-only">category</label>
                <select id="category" name="category" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                    <option>ايفون</option>
                    <option>اندرويد</option>
                    <option>ممم</option>
                </select>
                </div>
            </div>
        </div>
    </div>
    <section id="codes">
        <div class="flex justify-center">
            <div class="w-full md:w-72 justify-center items-center bg-white shadow-md rounded-lg flex flex-col">
            <img src="https://res.cloudinary.com/moodgiver/image/upload/v1633344243/adventure_woman_rujic1.webp" alt="img" title="img" class="w-full h-auto object-cover rounded-t-lg">
                <div class="w-full pt-5 px-2 justify-start flex flex-col">
                    <h4 class="text-xl">اسم السورس كود هنا</h4>
                    <hr>
                    <div class="flex justify-between">
                        <a href="#" value="button" class="my-4 px-2 py-0.5 text-dark hover:bg-gray-100 rounded-none bg-gray-50 border shadow">50ر.ي</a>
                        <button value="button" class="my-4 px-2 py-0.5 text-dark">PHP Code</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
