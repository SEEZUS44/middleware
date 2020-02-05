<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //applying the middleware

    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    //     /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */

    public function index(){
        return "you are an admin because you are seeing this page";
    }
}

