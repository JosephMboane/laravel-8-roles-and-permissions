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
    public function index()
    {
//        if ((Auth::user()->password_change_at == null)) {
//            return redirect(route('change-password'));
//        }
//        else{
//
//            return view('home');
//        }

        return view('home');
    }
}
