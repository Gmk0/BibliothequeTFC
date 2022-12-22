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
    public $faculte;
    public $order = "asc";
    public $sort = 10;
    public $name = "sujet";
    public $sujet;


    protected $paginationTheme = "bootstrap";
    protected $queryString = [
        'searchs' => ['expect' => ''],
        'categorie' => ['expect' => ''],
        'faculte'=>['expect'=>'']
      
    ];

        
    public function clearFiltre(){

       $this->searchs="";
       $this->categorie =null;
       $this->faculte=null;
    }
    public function viewCount($id)
    {


        return Redirect()->route("viewWorks", $id);
    }
    public function searchiTem()
    {

        return $this->searchs;
    }
    
    public function updating($name, $val)
    {
        if ($name == 'searchs')  {
            $this->resetPage();
        }
    }

    public function render()
    {

        return view(
            'livewire.Student.recherche',
            [
                "works" => travail::when($this->faculte, function ($q) {
                    $q->where("faculte", 'LIKE', "%{$this->faculte}%");
                    
                })->when($this->categorie, function($query){
                    $query->where("categorie",$this->categorie);
                }) ->Where('status', 1)
                    ->orderBy($this->name, $this->order)
                    ->search(trim($this->searchs))
                    ->paginate($this->sort),

                "count"=> travail::when($this->categorie, function ($q) {
                    $q->where("faculte", 'LIKE', "%{$this->categorie}%");
                    $q->where("status", 1);
                })->orWhere("categorie", 'LIKE', "%{$this->sujet}%")
                    ->Where('status', 1)
                    ->orderBy($this->name, $this->order)
                    ->search(trim($this->searchiTem()))
                    ->get(),
            ]
        )->extends('layouts.user')
            ->section('content');
    }
}
