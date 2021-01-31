<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentalRecordController extends Controller
{
    public function showMain() {
        return view ('main');
    }
}
