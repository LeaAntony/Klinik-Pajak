<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardYController extends Controller
{
    function index() {
        return view('dashboardy');
    }
}
