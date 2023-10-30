<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $primaryKey = 'participant_id';

    protected $fillable = [
        'participant_id',
        'name',
        'email',
        'profession',
        'role',
        'has_disability',
        'assistance_needed',
        'accredited',
    ];
}
