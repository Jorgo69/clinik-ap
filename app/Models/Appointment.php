<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;

    // Modèle Appointment le second parametre qu'on passe celui qui
    // represente la cle etrangere dans la table du model Actuel
    // Ici le cas de la table [appointments] donc on est dans la model [Appointment]
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function medecin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }
    

}
