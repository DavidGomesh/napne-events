<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Event;
use Illuminate\Support\Facades\Http;

class RegistryParticipantController extends Controller {
    public function index() {
        $host = 'https://napne-events-api.000webhostapp.com';

        $event = Http::get($host . '/api/events/unique')->object();
        $workshops = Http::get($host . '/api/activities/workshops')->object();

        return view('registry/listener', [
            'title' => 'Inscrever-se',
            'event' => $event,
            'workshops' => $workshops,
        ]);
    }
}
