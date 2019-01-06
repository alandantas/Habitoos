<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        return view('client.settings');

    }
    public function updateProfile(Request $request)
    {
        //
    }
}
