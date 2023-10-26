<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;

class RegistryParticipantController extends Controller {
    
    public function index() {
        return view('registry/listener', [
            'workshops' => Activity::where('type', 'workshop')->get()
        ]);
    }
}
