<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    /**
     * Display dashboard based on user
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('dashboard.admin');
    }

}
