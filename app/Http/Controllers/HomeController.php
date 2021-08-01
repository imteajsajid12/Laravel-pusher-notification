<?php

namespace App\Http\Controllers;

use App\Events\Notify;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

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

        return view('home');
    }
    public function send()
    {
        event(new Notify('hey how are You'));
        return back();
    }
    public function index1()
    {
        // event(new Notify('hey how are You'));
        return view('home2');
    }
}