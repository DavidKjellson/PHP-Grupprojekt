<?php

namespace App\Http\Controllers;

// lägg här nåt kanske
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Activity;

class activityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return View('activities.index')->with('activities', $activities);
    }

    // LÄGG TILL NYTT AKTIVITET FEATURE

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required'
        ]);

        Activity::create($request->all());

        return redirect()->route('activities.index')

            ->with('success', 'Activity added successfully.');
    }
}
