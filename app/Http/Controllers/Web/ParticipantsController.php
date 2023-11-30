<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Participant;

class ParticipantsController extends Controller {
    public function index() {
        return view('listeners', [
            'title' => 'Participantes',
            'listeners' => Participant::where('role', 'listener')->orderBy('name')->get(),
        ]);
    }
}
