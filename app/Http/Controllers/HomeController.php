<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\{User,Materi,Soal};
use Auth;

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

    private function greeting()
    {
        date_default_timezone_set('Asia/Jakarta');
        $jam = date('H');
        $name = Auth::user()->name;
        if ($jam >= 18) {
            $greeting = "Selamat Malam ". $name;
        }elseif($jam >= 15){
            $greeting = "Selamat Sore ". $name;
        }
         elseif ($jam >= 12) {
            $greeting = "Selamat Siang ". $name;
        } elseif ($jam < 12) {
            $greeting = "Selamat Pagi ". $name;
        }
        return $greeting;
    }

    public function index()
    {
        return view('admin.dashboard', [
            'user' => User::count(),
            'materi' => Materi::count(),
            'soal' => Soal::count(),
            'greeting' => $this->greeting(),
        ]);
    }

    public function dashboard()
    {
        $greeting = $this->greeting();

        return view('dashboard', compact('greeting'));
    }
}