<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Activity;

class startpageController extends Controller
{
    public function startpage() {
        $teams = team::all();
        $activities = activity::all();         
        return view('startpage', [
            'activities' => $activities, 
            'teams' => $teams
        ]);
    }
}
