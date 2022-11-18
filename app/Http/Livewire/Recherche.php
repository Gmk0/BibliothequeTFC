<?php

namespace App\Http\Livewire;

use App\Models\TravailfinCycle;
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

    protected $paginationTheme = "bootstrap";

    public function mount()
    {
    }

    public function render()
    {

        return view(
            'livewire.recherche',
            [
                "works" => TravailfinCycle::when($this->categorie, function ($q) {
                    $q->where("faculte", 'LIKE', "%{$this->categorie}%");
                })
                    ->orderBy($this->name, $this->order)
                    ->search(trim($this->searchs))
                    ->paginate($this->sort),
            ]
        );
    }
}
