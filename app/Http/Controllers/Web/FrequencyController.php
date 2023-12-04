<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;

class FrequencyController extends Controller {
    public function index($activityId) {
        return view('frequency', [
            'title' => 'Frequência',
            'activity' => Activity::findOrFail($activityId),
        ]);
    }
}
