<?php

namespace App\Http\Controllers;

use App\Models\BandMembers;
use Illuminate\Http\Request;
use App\Models\Setting;

class PagesController extends Controller
{
    public function index()
    {
        return view('index')->with('setting', Setting::first())->with('members', BandMembers::all());
    }
}