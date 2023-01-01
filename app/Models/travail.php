<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class travail extends Model
{
    use HasFactory;
    protected $fillable = [
        "sujet",
        "categorie",
        "faculte",
        "etudiant",
        "annnee_etudes",
        "nbrs_pages",
        "path_document",
        "status",
        "viewCounter"
    ];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('sujet', 'like', $term);
            $query->orWhere('etudiant', 'like', $term);
            $query->orWhere('categorie', 'like', $term);
        });
    }

    public function domaine():BelongsTo
    {
        return $this->belongsTo(domaineExpertise::class);
    }
}
