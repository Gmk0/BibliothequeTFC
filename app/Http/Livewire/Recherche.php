<?php

namespace App\Http\Livewire;

use App\Models\travail;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;

class Recherche extends Component
{
    use WithPagination;
    public $searchs;
    public $categorie;
    public $order = "asc";
    public $sort = 10;
    public $name = "sujet";
    public $sujet;

    protected $paginationTheme = "bootstrap";
    protected $queryString = [
        'searchs' => ['expect' => ''],
        'categorie' => ['expect' => ''],
        'categorie' => ['expect' => '']
    ];

    public function viewCount($id)
    {


        return Redirect()->route("viewWorks", $id);
    }
    public function searchiTem($item)
    {

        $this->sujet = $item;
    }

    public function render()
    {

        return view(
            'livewire.recherche',
            [
                "works" => travail::when($this->categorie, function ($q) {
                    $q->where("faculte", 'LIKE', "%{$this->categorie}%");
                })->orWhere("categorie", 'LIKE', "%{$this->sujet}%")
                    ->orderBy($this->name, $this->order)
                    ->search(trim($this->searchs))
                    ->paginate($this->sort),
            ]
        )->extends('layouts.user')
            ->section('content');
    }
}
