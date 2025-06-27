<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;

class AdminProfileController extends Controller
{
    public function index()
    {
        $profiles = AdminProfile::all();

        return view('guides', compact('profiles'));
    }
}
