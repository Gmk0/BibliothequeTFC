<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\TravailfinCycle;
use Livewire\WithFileUploads;


class Travail extends Component
{
    use WithFileUploads;

    public $travail = [];
    public $file;

    public function render()
    {
        return view('livewire.student.travail');
    }

    public function store()
    {

        $this->validate(
            [

                'travail.sujet' => 'required',
                "travail.categorie" => "required",
            ]
        );

        $fileName = 'travail' . time() . $this->file->getClientOriginalName();
        $upload_file = $this->file->storeAs('public/students_travail', $fileName);

        $data = [
            "sujet" => $this->travail['sujet'],
            "categorie" => $this->travail['categorie'],
            "faculte" => $this->travail['promotion'],
            "etudiant" => $this->travail['etudiant'],
            "annnee_etudes" => $this->travail['annee'],
            "nbrs_pages" => $this->travail['pages'],
            "path_document" => $fileName
        ];
        TravailfinCycle::create($data);
        $this->travail = [];
        $this->file = "";
    }
}
