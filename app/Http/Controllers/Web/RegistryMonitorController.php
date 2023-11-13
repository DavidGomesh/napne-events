<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class RegistryMonitorController extends Controller {
    public function index() {
        return view('registry/monitor', [
            'title' => 'Monitor',
        ]);
    }
}
