<?php

namespace App\Http\Livewire\Admin;

use App\Models\domaineExpertise;
use Livewire\Component;

class DomaineEpxertise extends Component
{
    public  $domaines;






    public function registerDomaines()
    {
        $this->validate([
            'domaines' => 'required|unique:domaine_expertises,intitule'
        ]);
        domaineExpertise::create([
            'intitule' => $this->domaines,
            'status' => 0,
        ]);
        $this->domaines = "";
        $this->dispatchBrowserEvent("hideModal", [
            "messages" => "Dommaine bien inserer"
        ]);
    }
    public function render()
    {
        return view('livewire.admin.domaine-epxertise', [
            'domaineList' => domaineExpertise::all()
        ])->extends('layouts.admin')
            ->section('content');
    }
}
