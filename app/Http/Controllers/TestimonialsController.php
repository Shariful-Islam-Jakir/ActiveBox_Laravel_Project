<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonials(){
        return view('pages.Testimonials');
    }
}
