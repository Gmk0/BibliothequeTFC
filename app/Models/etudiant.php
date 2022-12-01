<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        "matricule",
        "name",
        "lastname",
        "faculte",
        "email",
        "password",
    ];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {

            $query->orWhere('name', 'like', $term);
            $query->orWhere('lastname', 'like', $term);
        });
    }
}
