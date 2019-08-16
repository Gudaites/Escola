<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmaController extends Controller
{
    public function index(){
        $registros = Turma::all();
        return view('admin.turmas.index', compact('registros'));
     }

     public function adicionar(){
        return view('admin.turmas.adicionar');
     }

     public function salvar(Request $req){
        $dados = $req->all();
        //dd($dados);
        Turma::create($dados);
        return redirect()->route('site.turmas.adicionar');
    }

    public function atualizar(Request $req,$id){
        $dados = $req->all();
       // dd($dados);
        Turma::find($id)->update($dados);
        return redirect()->route('site.turmas');
    }

     public function editar($id){
        $registro = Turma::find($id);
        return view('admin.turmas.editar', compact('registro'));
    }

    public function deletar($id){
        Turma::find($id)->delete();
        return redirect()->route('site.turmas');
    }
}
