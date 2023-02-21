<?php

namespace App\Models;

use App\Models\classe;
use App\Models\departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class filiere extends Model
{
    use HasFactory;
    public function departement()
    {
        return $this->BelongsTo(departement::class)->constrained();
    }
    public function classe()
    {
        return $this->HasMany(classe::class)->constrained();
    }
}