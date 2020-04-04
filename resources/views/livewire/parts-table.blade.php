<div>
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
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th></th>
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
                    </td>
                    <td>
                        <a href="{{ $part->link }}" class="btn btn-outline-secondary btn-sm" target="_blank">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $parts->links() }}
</div>
