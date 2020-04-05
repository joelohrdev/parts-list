<div>

    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif

    <div class="container mx-auto grid grid-cols-3 bg-white px-8 py-6 rounded-lg shadow-lg mt-5">
        <div class="col-span-1">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Per Page:
            </label>
            <select wire:model="perPage" class="appearance-none w-full bg-gray-200 border text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>10</option>
                <option>20</option>
                <option>25</option>
                <option>50</option>
            </select>
        </div>
        <div class="col-span-1">
        </div>
        <div class="col-span-1 self-end">
            <input type="text" wire:model="search" placeholder="Search Parts..." class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
        </div>

        <table class="col-span-3 min-w-full my-10">
            <thead>
            <tr>
                <th
                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-teal-500 uppercase tracking-wider">
                    Name
                </th>
                <th
                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-teal-500 uppercase tracking-wider">
                    Quantity
                </th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($parts as $part)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">{{ $part->name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">{{ $part->quantity }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 flex justify-end">
                        <a href="{{ $part->link }}" class="flex-shrink-0 mr-5 bg-blue-500 hover:bg-blue-700 border-blue-500 hover:border-blue-700 text-sm border-4 text-white py-1 px-2 rounded" target="_blank">Buy More</a>
                        <a wire:click="edit({{ $part->id }})" class="flex-shrink-0 mx-1 bg-orange-500 hover:bg-orange-700 border-orange-500 hover:border-orange-700 text-sm border-4 text-white py-1 px-2 rounded">Edit</a>
                        <a wire:click="destroy({{ $part->id }})" class="flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-4 text-white py-1 px-2 rounded">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $parts->links() }}

</div>
