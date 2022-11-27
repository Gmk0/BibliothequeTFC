<?php

namespace App\Http\Livewire;

use App\Models\consultation;
use App\Models\consultation_travaux;
use App\Models\travail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewWorks extends Component
{
    public $travail;
    public function mount($id)
    {
        $this->travail = travail::find($id);
        $value = travail::find($id);
        $value->viewCounter = $value->viewCounter + 1;
        $value->update();
        consultation::create([
            'users_id' => Auth::user()->id,
            'travails_id' => $id,
        ]);
    }
    public function render()
    {
        return view('livewire.view-works')
            ->extends('layouts.user')
            ->section('content');
    }
}
