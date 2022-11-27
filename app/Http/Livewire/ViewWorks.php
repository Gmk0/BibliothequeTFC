<?php

namespace App\Http\Livewire;

use App\Models\TravailfinCycle;
use Livewire\Component;

class ViewWorks extends Component
{
    public $travail;
    public function mount($id)
    {
        $this->travail = TravailfinCycle::find($id);
        $value = TravailfinCycle::find($id);
        $value->viewCounter = $value->viewCounter + 1;
        $value->update();
    }
    public function render()
    {
        return view('livewire.view-works')
            ->extends('layouts.user')
            ->section('content');
    }
}
