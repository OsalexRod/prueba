<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function index(): View
    {
        return view('user.index');
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        User::
    }
}
