<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('account/index');
    }

    public function appearance(Request $request) {
        return Inertia::render('account/appearance')->withViewData(['meta' => 'meta']);
    }

    public function settings(Request $request)
    {
        return Inertia::render('settings/index');
    }

    public function feedback(Request $request)
    {
        return Inertia::render('account/feedback');
    }

    public function show_profile(Request $request) 
    {
        return Inertia::render('account/flynn');
    }
}
