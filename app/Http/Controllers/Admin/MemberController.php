<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;


class MemberController extends Controller
{

    public function index()
    {
        $members = Member::latest()->paginate(5);
        return view('admin.users.index', compact('members'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'birth_year' => 'required'
        ]);

        Member::create($request->all());

        return redirect()->route('admin.users.index')

            ->with('success', 'Member added successfully.');
    }
}
