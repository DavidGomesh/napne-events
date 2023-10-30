<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $primaryKey = 'activity_id';

    public $incrementing = false;

    protected $fillable = [
        'activity_id',
        'description',
        'starts_at',
        'ends_at',
        'hours',
        'vacancies',
        'amount_subscriptions',
        'type',
        'event_fk',
    ];

    public function hasVacancies() {
        return $this->vacancies > $this->amount_subscriptions;
    }
}
