<?php

namespace App\Http\Livewire;

use App\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartsTable extends Component
{
    use WithPagination;

    public $data, $quantity, $name, $link, $selected_id;
    public $updateMode = false;
    public $perPage = 20;
    public $search = '';

    public function render()
    {
        return view('livewire.parts-table', [
            'parts' => Part::search($this->search)->paginate($this->perPage),
        ]);
    }

    private function resetInput()
    {
        $this->quantity = null;
        $this->name = null;
        $this->link = null;
    }

    public function store()
    {
        Part::create([
            'quantity' => $this->quantity,
            'name' => $this->name,
            'link' => $this->link
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $part = Part::findOrFail($id);

        $this->selected_id = $id;
        $this->quantity = $part->quantity;
        $this->name = $part->name;
        $this->link = $part->link;

        $this->updateMode = true;
    }

    public function update()
    {
        if ($this->selected_id) {
            $part = Part::find($this->selected_id);
            $part->update([
                'quantity' => $this->quantity,
                'name' => $this->name,
                'link' => $this->link
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $part = Part::where('id', $id);
            $part->delete();
        }
    }
}
