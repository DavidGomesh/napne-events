<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Event;

class RegistryParticipantController extends Controller {
    public function index() {
        return view('registry/listener', [
            'title' => 'Inscrever-se',
            'workshops' => Activity::where('type', 'workshop')->get(),
            'event' => Event::whereNotNull('event_id')->first(),
        ]);
    }
}
