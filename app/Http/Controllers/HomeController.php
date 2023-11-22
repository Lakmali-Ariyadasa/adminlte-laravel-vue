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
}
