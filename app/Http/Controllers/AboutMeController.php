<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() {
        $data = array (
            'name' => "Marc Joesan Gamboa",
            'age' => "21"
        );
        return view('AboutMe', ['data' => $data]);
    }
}
