<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EtudiantsImport;
use App\Exports\EtudiantsExport;
use App\Models\etudiant;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithFileUploads;
    use withPagination;


    public $faculte;
    public $file;
    public $name;
    public $sort = 25;
    public $searchs = "";
    public $check;
    protected $paginationTheme = "bootstrap";

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importFile()
    {
        $fileNames = 'liste' . time() . $this->file->getClientOriginalName();
        $upload_image = $this->file->storeAs('temp', $fileNames);
        Excel::import(new EtudiantsImport, $upload_image);
        return back();
    }

    
    public function render()
    {
        return view(
            'livewire.admin.student-list',
            [
                'etudiants' => etudiant::when($this->faculte, function ($q) {
                    $q->where("faculte", 'LIKE', "%{$this->faculte}%");
                })
                    ->orderBy("name", 'asc')
                    ->search(trim($this->searchs))
                    ->paginate($this->sort),
            ]
        );
    }
}
