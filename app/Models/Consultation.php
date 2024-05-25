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
        return $this->BelongsTo(Patient::class, 'id');
    }

    /**
     * Relations entre consultations et Medecins de la table User
     */
    public function medecins(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id');
    }
}
