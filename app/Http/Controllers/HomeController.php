<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Skills;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $profile = Profile::get()->last();
        $experience = Experience::get()->sortByDesc('tgl_mulai');
        $education = Education::get();
        $setting = Setting::get()->first();
        $project = Project::get();
        $skills = Skills::get();
        return view('home/index', compact('profile', 'experience', 'education', 'setting', 'project', 'skills'));
    }

    public function contact()
    {
        return view('home.contact');
    }
}
