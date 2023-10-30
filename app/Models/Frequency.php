<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    use HasFactory;

    protected $primaryKey = 'frequency_id';

    public $incrementing = false;

    protected $fillable = [
        'frequency_id',
        'activity_fk',
        'participant_fk',
    ];
}
