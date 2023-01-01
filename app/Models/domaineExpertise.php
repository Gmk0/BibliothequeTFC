<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class domaineExpertise extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'status',
        'description',
        'image'
    ];

    public function travails():HasMany
    {
        return $this->hasMany(travail::class);
    }
}
