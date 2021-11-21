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
    <x-modal>
        <div class="modal-content mx-auto md:w-96 py-6 px-4 w-full fade-in-fwd bg-white rounded-md" @click.away="open = false">
            <h3 class="text-center text-red-500">{{ __('messages.are sure delete') }}</h3>
            <div class="inline-flex justify-center w-full pt-5 pb-2">
                <input type="number" id="modal-product-id" hidden>
                <x-button class="product_delete_confirm rounded-l-none mx-0" @click="open = false">{{ __('Confirm') }}</x-button>
                <x-button class="rounded-r-none mx-0" @click="open = false">{{ __('Cancel') }}</x-button>
            </div>
        </div>
    </x-modal>
    <div id="notify-area"></div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" dir="rtl">
                    <form action="" class="flex justify-center">
                        <x-input type="text" name="title" class="md:w-1/2 w-full rounded-l-none" autofocus  :placeholder="__('Enter name Source Code')"/>
                        <x-button class="rounded-r-none">{{ __('Search') }}</x-button>
                        {{-- <input type="text" value="" name="category_id" hidden> --}}
                    </form>
                    <h1 class="text-2xl text-center py-3">{{ __('All Products') }}</h1>
                    <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-3 lg:-mx-4 xl:-mx-4">
                        @foreach ($products as $product)
                        <div id="product-{{ $product->id }}" class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-3 md:px-3 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 xl:my-4 xl:px-4 xl:w-1/3">
                            <div class="border w-full md:w-72 justify-center items-center bg-white shadow-md rounded-lg flex flex-col">
                                <img src="{{ asset($product->image->path) }}" alt="img" title="img" class="w-full h-auto object-cover rounded-t-lg">
                                <div class="w-full pt-5 px-2 justify-start flex flex-col">
                                    <h4 class="text-xl">{{ $product->title }}</h4>
                                    <hr>
                                    <div class="flex justify-between">
                                        <a href="#" value="button" class="my-4 px-2 py-0.5 text-dark hover:bg-gray-100 rounded-none bg-gray-50 border shadow">{{ $product->price . __("YER") }}</a>
                                        <button value="button" class="my-4 px-2 py-0.5 text-dark">{{ $product->category->name }}</button>
                                    </div>
                                </div>
                                <div class="flex w-full" x-data="{ id: 1 }">
                                    <x-button data-product-id="{{ $product->id }}" rounded="rounded-none" class="product_delete flex-1 justify-center"
                                    @click="$dispatch('open-model', {id})"
                                    ><i class="text-lg eva eva-trash-2"></i></x-button>
                                    <x-a :href="route('dashboard.products.edit', $product->id)" rounded="rounded-none" class="flex-1 text-center justify-center"><i class="text-lg eva eva-edit"></i></x-a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex justify-center py-5">
                        {{ $products->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function () {
            $('.product_delete').on('click', function() {
            let productId = $(this).data('productId');
            let modalProductInput = $('#modal-product-id').val(productId);
        })

        $('.product_delete_confirm').on('click', function() {
            let modalProductInput = $('#modal-product-id').val();
            axios.post('{{ route('dashboard.products.delete') }}/' + modalProductInput)
            .then((response) => {
                console.log(response);
                $('#product-' + modalProductInput).remove();
                let notify = `<x-notify>${response.data.status}</x-notify>`;
                $('#notify-area').html(notify);
                setTimeout(() => {
                    $('#notify-area').html('');
                }, 3000);
            });
        });
        }
    </script>

</x-app-layout>
