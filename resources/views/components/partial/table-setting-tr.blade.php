@props(['src', 'itemTitle'])
<tr id="item-{{ $itemId }}">
    <input type="text" name="items[]" value="{{ $itemId }}" hidden>
    <td {{ $attributes->merge(['class' => "px-6 py-4 whitespace-nowrap "]) }}>
        <div class="flex items-center">
            <div class="flex-shrink-0 h-10 w-10">
                <img class="h-10 w-10 rounded-full" src="{{ $src }}" alt="">
            </div>
            <div class="ml-4">
                <div class="text-sm px-1 font-medium text-gray-900">
                    {{ $itemTitle }}
                </div>
            </div>
        </div>
    </td>
    <td class=" py-4 whitespace-nowrap text-right text-sm font-medium">
        <input type="checkbox" value="{{ $itemId }}" id="item-label-{{ $itemId }}" class="product-label">
    </td>
</tr>
