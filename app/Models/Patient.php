<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    // Modèle Patient

    /**
     * 
     * Relation entre patients et rendez-vous
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * relation entre patients et consultations
     */
    public function consultations(): BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }
    

}
