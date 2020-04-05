<div>

    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif

    <div class="row mb-5">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>20</option>
                <option>25</option>
                <option>50</option>
            </select>
        </div>
        <div class="col">
            <input type="text" wire:model="search" placeholder="Search Parts..." class="form-control">
        </div>
        <div class="col">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                New Part
            </button>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($parts as $part)
                <tr>
                    <td>{{ $part->name }}</td>
                    <td>{{ $part->quantity }}</td>
                    <td>
                        <a href="{{ $part->link }}" class="btn btn-outline-primary btn-sm" target="_blank">Buy More</a>
                        <a wire:click="edit({{ $part->id }})" class="btn btn-outline-secondary btn-sm">Edit</a>
                        <a wire:click="destroy({{ $part->id }})" class="btn btn-outline-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $parts->links() }}

</div>
