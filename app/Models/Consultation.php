<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'weight',
        'pulse',
        'temperature',
        'stestetoscopy',
        'observation'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * relations entre consultations et patients de la table Patient
     */

    public function patients(): BelongsTo
    {
        return $this->BelongsTo(Patient::class, 'patient_id');
    }

    // Lecture:
    // Dans la table du model Actuel [Consultation]
    // On verifier le champs avec la cle passe directement apres class, ici ['patient_id]
    // donc dans la table consultations on verifie le champs 'patient_id' on se referer au model entre avec class, ici [Patient]

    /**
     * Relations entre consultations et Medecins de la table User
     */
    public function medecins(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'medecin_id');
    }
}
