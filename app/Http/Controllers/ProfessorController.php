<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(){
        $registros = Professor::all();
        return view('admin.professores.index', compact('registros'));
     }
}
