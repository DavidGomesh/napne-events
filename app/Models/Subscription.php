<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $primaryKey = 'subscription_id';

    public $incrementing = false;

    protected $fillable = [
        'subscription_id',
        'activity_fk',
        'participant_fk',
    ];
}
