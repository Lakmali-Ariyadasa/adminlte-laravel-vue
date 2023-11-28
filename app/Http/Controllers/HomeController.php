<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('profile');
    }
    public function reports()
    {
        return view('reports');
    }
    public function about()
    {
        return view('without');
    }
    public function form()
    {
        return view('response_form');
    }
    public function approvals()
    {
        return view('approvals');
    }
    public function feedback()
    {
        return view('feedback');
    }
    public function users()
    {
        return view('users');
    }
    public function color_detection()
    {
        return view('color_detection');
    }
    
    
}
