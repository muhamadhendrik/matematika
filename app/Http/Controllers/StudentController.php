<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('students.index');
    }

    public function materi(){
        return view('students.materi');
    }

    public function soal(){
        return view('students.soal');
    }
}