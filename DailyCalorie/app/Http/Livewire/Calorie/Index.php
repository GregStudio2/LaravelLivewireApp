<?php

namespace App\Http\Livewire\Calorie;

use App\Models\Calorie;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.calorie.index', [
            'calories' => Calorie::latest()->paginate(5)
        ]);
    }
}
