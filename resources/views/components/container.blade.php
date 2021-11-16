@props(['maxWidth' => 'max-w-5xl'])
<div class="py-12">
    <div class="{{ $maxWidth }} mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
