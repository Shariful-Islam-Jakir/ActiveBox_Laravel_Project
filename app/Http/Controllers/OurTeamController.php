<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function ourteam(){
        return view('pages.OurTeam');
    }
}
