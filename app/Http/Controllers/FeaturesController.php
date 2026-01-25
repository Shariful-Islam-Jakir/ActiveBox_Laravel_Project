<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function features(){
        return view('pages.Features');
    }
}
