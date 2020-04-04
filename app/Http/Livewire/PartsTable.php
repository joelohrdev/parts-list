<?php

namespace App\Http\Livewire;

use App\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartsTable extends Component
{
    use WithPagination;

    public $perPage = 20;
    public $search = '';

    public function render()
    {
        return view('livewire.parts-table', [
            'parts' => Part::search($this->search)->paginate($this->perPage),
        ]);
    }
}
