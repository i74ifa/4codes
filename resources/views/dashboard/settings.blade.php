<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>

    </x-slot>
    @if (session()->has('status'))
    <div>
        {{ session()->get('status') }}
    </div>
    @endif
    <x-container max-width="max-w-5xl">
        <form action="{{ route('dashboard.changeLogo') }}" id="form-change-logo" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="flex justify-between items-center">
                <label for="logo" class="hover:bg-gray-200 hover:shadow cursor-pointer py-2 px-4 relative">
                    <h3 class="text-lg flex space-x-6">
                        <span>{{ __('Logo Project') }}</span>
                        <span class="eva eva-cloud-upload-outline text-2xl"></span>
                    </h3>
                    <input type="file" id="logo" name="logo" hidden>
                </label>
                <x-application-logo class="w-20"></x-application-logo>
                {{-- <img src="{{ ass }}" class="w-28"> --}}
            </div>
        </form>
        <div class="px-2 py-2">
            <h3 class="text-lg">{{ __('product Popular') }}</h3>
            <small class="text-xs text-gray-600">{{ __('messages.product that appear in the popular section') }}</small>
            <form action="" class="flex justify-center" id="product-search">
                <x-input type="text" name="title" class="md:w-1/2 w-full rounded-l-none" autofocus
                    :placeholder="__('Enter name Source Code')" />
                <x-button class="rounded-r-none">{{ __('Search') }}</x-button>
            </form>
            <div class="py-5">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                title
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only eva eva-trash"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200" id="section-tbody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex" id="section-product">
            </div>
        </div>
        <div class="flex justify-end pb-2 pt-5">
            <x-button type="button" id="save-product-popular">{{ __('Save') }}</x-button>
        </div>
    </x-container>
</x-app-layout>

<script>
    const list = [{{ $items }}];
    window.onload = function() {
        $('#product-search').submit(function(e) {
        e.preventDefault();
        let title = $(this).children('input[name="title"]').val();
        axios.get('{{ route("dashboard.products.search") }}?title=' + title)
            .then((response) => {
                let section = $('#section-tbody')
                section.html('');
                response.data.forEach((el) => {
                    let tr = `<x-partial.table-setting-tr :src="asset('${el.image.path}')" item-title="${el.title}" data-product-id="${el.id}" item-id="${el.id}"></x-partial.table-setting-tr>`
                    section.append(tr);
                })
                checkCard();
            })

        });
        function checkCard() {
            let checkboxes = $('.product-label');
            checkboxes.each((key, el) => {
                if (list.indexOf(parseInt($(el).val())) !== -1) {
                    $(el).prop("checked", true)
                }
            })

        }
        // add an remove list
        $(document).on('click', '.product-label', function() {
            let item = parseInt($(this).val());
            if ($(this).is(':checked')) {
                list.indexOf(item) === -1 ? list.push(item) : '';
            }else {
                let ar  = list.indexOf(item)
                list.splice(ar, 1);
            }
        })

        $('#logo').on('change', function() {
            $('#form-change-logo').submit();
        })


        // submit save-product-popular

        $('#save-product-popular').click(() => {
            axios.post('{{ route('dashboard.popularProduct') }}', { data: list })
            .then((response) => {
                window.location.reload()
            })
        })
    }
</script>
