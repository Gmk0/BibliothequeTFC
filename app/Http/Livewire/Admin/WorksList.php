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
    public  $selection = [];



    public function deleteTravaux(array $id)
    {

        travail::destroy($id);
        $this->selection = [];
    }

    public function activeMultiple(array $id)
    {
        travail::whereIn('id', $id)->update([
            'status' => 0,
        ]);
        $this->selection = [];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.works-list', [
            'travaux' => travail::search(trim($this->search))
                ->paginate(15),
        ])
            ->extends('layouts.admin')
            ->section('content');
    }
}
