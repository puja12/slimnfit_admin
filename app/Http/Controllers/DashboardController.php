<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $client_cnt= Client::count();
        return view('dashboard.dashboard',['client_cnt'=> $client_cnt]);
    }
}
