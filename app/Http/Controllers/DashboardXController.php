<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardXController extends Controller
{
    public function index()
    {
        return view('dashboardx');
    }
}