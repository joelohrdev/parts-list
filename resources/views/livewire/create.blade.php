<div class="panel panel-default my-5 p-4 bg-white">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">New Part</h3>
        </div>
        <div class="panel-body">
            <form class="form-inline">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2" wire:model="name" placeholder="Name">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Quantity</label>
                        <input type="number" class="form-control mb-2" wire:model="quantity" placeholder="Quantity">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Link</label>
                        <input type="text" class="form-control mb-2" wire:model="link" placeholder="Link">
                    </div>
                    <div class="col-auto">
                        <button type="submit" wire:click="store()" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
