<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class creneau extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the creneau
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the salle that owns the creneau
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salle(): BelongsTo
    {
        return $this->belongsTo(salle::class);
    }

    /**
     * Get the matiere that owns the creneau
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function matiere(): BelongsTo
    {
        return $this->belongsTo(matiere::class);
    }

    /**
     * Get the classe that owns the creneau
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classe(): BelongsTo
    {
        return $this->belongsTo(classe::class);
    }

    /**
     * Get the emplois_du_temps that owns the creneau
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emplois_du_temps(): BelongsTo
    {
        return $this->belongsTo(emplois_du_temps::class);
    }

    /**
     * Get the type_intervention that owns the creneau
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type_intervention(): BelongsTo
    {
        return $this->belongsTo(type_intervention::class, 'foreign_key', 'other_key');
    }
}
