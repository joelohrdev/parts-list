<div class="container mx-auto grid grid-cols-5 gap-4 bg-white px-8 py-6 rounded-lg shadow-lg">
    <div class="col-span-1 self-center text-left">
        <h3 class="font-semibold text-lg">Update Part</h3>
    </div>
    <div class="col-span-4">
        <form class="grid grid-cols-4 gap-4">
            <input type="hidden" wire:model="select_id">
            <div class="col-span-1">
                <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="name" placeholder="Name" required>
            </div>
            <div class="col-span-1">
                <input type="number" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="quantity" placeholder="Quantity" required>
            </div>
            <div class="col-span-1">
                <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="link" placeholder="Link">
            </div>
            <div class="col-span-1">
                <button type="submit" wire:click="update()"  class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 border-4 text-white py-3 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>
