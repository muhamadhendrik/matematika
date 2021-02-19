<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\{Materi,Soal};

class StudentController extends Controller
{
    public function index(){
        return view('students.index');
    }

    public function materi(Materi $materi){
        return view('students.materi', compact('materi'));
    }

    public function soal(){
        return view('students.soal');
    }
}
