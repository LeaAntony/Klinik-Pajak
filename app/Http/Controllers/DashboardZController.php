<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardZController extends Controller
{
    function index() {
        return view('dashboardz');
    }
}