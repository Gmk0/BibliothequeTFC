<?php

namespace App\Imports;

use App\Models\etudiant;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EtudiantsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new etudiant([
            "matricule" => $row['matricule'],
            "name" => $row['nom'],
            "lastname" => $row['prenom'],
            "faculte" => $row["faculte"],
            "email" => $row["email"],
            "password" => Hash::make('password'),
        ]);
    }
}
