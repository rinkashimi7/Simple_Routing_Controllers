<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skills() {
        $data = 'Cook';

        return view('Skills', ['skills' => $data]);
    }
}
