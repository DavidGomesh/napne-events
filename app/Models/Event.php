<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_id';

    public $incrementing = false;

    protected $fillable = [
        'event_id',
        'name'
    ];
}
