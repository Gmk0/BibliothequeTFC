<?php

namespace App\Exports;

use App\Models\etudiant;
use Maatwebsite\Excel\Concerns\FromCollection;

class EtudiantsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return etudiant::all();
    }
}
