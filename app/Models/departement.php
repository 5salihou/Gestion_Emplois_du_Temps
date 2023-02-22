<?php

namespace App\Models;

use App\Models\classe;
use App\Models\filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class departement extends Model
{
    use HasFactory;
    public function filiere(){
        return $this->HasMany(filiere::class);
    }
    public function classe(){
        return $this->HasManyThrough(classe::class,filiere::class);
    }
}