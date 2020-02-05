<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        // SESSIONS
        // $request->session()->put(['edwin'=>'master instructor']);

        // return $request->session()->all();
        
        // return view('home');

        // GLOBAL SESSION

        session(['peter'=>'student']);

        // return $request->session()->all();
        return session('peter');
    }
}
