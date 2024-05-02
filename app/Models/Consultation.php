<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'weight',
        'pulse',
        'temperature',
        'drugs',
        'pace',
        'observation'
    ];
}
