<?php

namespace App\Http\Livewire\Calorie;

use App\Models\Calorie;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $calorie;
    
    public function store()
    {
        $this->validate([
            'name'   => 'required',
            'calorie' => 'required',
        ]);

        $calorie = Calorie::create([
            'name'     => $this->name,
            'calorie'   => $this->calorie
        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('calorie.index');
    }

    public function render()
    {
        return view('livewire.calorie.create');
    }
}