<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;

        if (Auth::user()->role == "ADMIN") {
            return view('admin.index', compact('role'));
        } elseif (Auth::user()->role == "OPERATOR") {
            return view('operator.index', compact('role'));
        } elseif (Auth::user()->role == "PELANGGAN") {
            return view('pelanggan.index', compact('role'));
        }
    }
}
