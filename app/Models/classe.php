<?php

namespace App\Models;

use App\Models\filiere;
use App\Models\departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classe extends Model
{
    use HasFactory;
    public function filere(){
        return $this->BelongsTo(filiere::class);
    }
    public function departement(){
        return $this->BelongsTo(departement::class);
    }
}