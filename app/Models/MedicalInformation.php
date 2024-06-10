<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'blood_group',
        'facteur_rhesus',
        'allergies',
        'other_informations',
        'patient_id',
        'medecin_id'
    ];
}
