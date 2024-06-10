<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $data = Profile::get()->first();
        return view('dashboard.index', compact('title', 'data'));
    }
}
