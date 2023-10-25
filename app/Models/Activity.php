<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'starts_at',
        'ends_at',
        'hours',
        'vacancies',
        'amount_subscriptions',
        'type',
        'event_fk',
    ];
}
