<?php

namespace App\Http\Livewire\Admin;

use App\Models\travail;
use Livewire\Component;
use Livewire\WithPagination;

class WorksList extends Component
{
    use withPagination;

    protected $paginationTheme = "bootstrap";
    public  $search = "";
    public $check;
    public $sort = 25;
    public  $selection = [];

    protected $queryString = [
        'search' => ['expect' => ''],
    ];


    public function deleteTravaux(array $id)
    {

        travail::destroy($id);
        $this->selection = [];
        $this->check = "";
    }


    public function activeMultiples(array $id)
    {
        travail::whereIn('id', $id)->update([
            'status' => 1,
        ]);
        $this->selection = [];
        $this->check = "";
    }

    public function desactiveMultiple(array $id)
    {

        travail::whereIn('id', $id)->update([
            'status' => 0,
        ]);
        $this->selection = [];
        $this->check = "";
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.works-list', [
            'travaux' => travail::search(trim($this->search))
                ->paginate($this->sort),
        ])
            ->extends('layouts.admin')
            ->section('content');
    }
}
