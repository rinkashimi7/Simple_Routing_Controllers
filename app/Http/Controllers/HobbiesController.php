<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobby() {

        $data = 'Playing Mobile Games';

        return view('Hobbies', ['hobby' => $data]);
    }
}
