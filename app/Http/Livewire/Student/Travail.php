<?php

namespace App\Http\Livewire\Student;

use App\Models\travail as ModelsTravail;
use Livewire\Component;

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
            "path_document" => $fileName,
            "status"=>0,
            "viewCounter"=>0
        ];
        ModelsTravail::create($data);
        $this->travail = [];
        $this->file = "";
        $this->dispatchBrowserEvent("showSuccessMessage", [
            "messages" => "les document a ete bien envoyer"
        ]);
    }
    
}
