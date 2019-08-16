<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function index(){
       $registros = Aluno::all();
    return view('admin.alunos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.alunos.adicionar');
     }

     public function salvar(Request $req){
         $dados = $req->all();
         //dd($dados);
         Aluno::create($dados);
         return redirect()->route('site.alunos.adicionar');
     }

     public function editar($id){
        $registro = Aluno::find($id);
        return view('admin.alunos.editar', compact('registro'));
    }

    public function atualizar(Request $req,$id){
        $dados = $req->all();
        Aluno::find($id)->update($dados);

        return redirect()->route('site.alunos');
    }

    public function deletar($id){
        Aluno::find($id)->delete();
        return redirect()->route('site.alunos');
    }

}
