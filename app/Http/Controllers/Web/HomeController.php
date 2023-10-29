<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    function index() {
        return view('home', [
            'title' => 'II SEI'
        ]);
    }
}