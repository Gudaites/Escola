<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
       $registros = Aluno::all();
    return view('admin.alunos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.alunos.adicionar');
     }

     public function salvar(Request $req){

        $regras = [
            'nome' => 'required|min:5|max:120',
            'data_nascimento' => 'required|date',
            'sexo' => 'required'
        ];
        $mensagens = [
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'É necessario no minimo 5 letras',
            'nome.max' => 'É necessario no maximo 120 letras',
            'nome.alpha' => 'Apenas letras alfabeticas',
            'data_nascimento.required' => 'O campo data é necessario',
            'sexo.required' => 'O campo sexo é necessario'
        ];

        $req->validate($regras,$mensagens);

        $dados = $req->all();
         Aluno::create($dados);
         return redirect()->route('site.alunos.adicionar');
     }

     public function editar($id){
        $registro = Aluno::find($id);
        return view('admin.alunos.editar', compact('registro'));
    }

    public function atualizar(Request $req,$id){
        $regras = [
            'nome' => 'required|min:5|max:120',
            'data_nascimento' => 'required|date',
            'sexo' => 'required'
        ];
        $mensagens = [
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'É necessario no minimo 5 letras',
            'nome.max' => 'É necessario no maximo 120 letras',
            'nome.alpha' => 'Apenas letras alfabeticas',
            'data_nascimento.required' => 'O campo data é necessario',
            'sexo.required' => 'O campo data é necessario',
        ];
        $req->validate($regras,$mensagens);

        $dados = $req->all();
        Aluno::find($id)->update($dados);

        return redirect()->route('site.alunos');
    }

    public function deletar($id){
        Aluno::find($id)->delete();
        return redirect()->route('site.alunos')->withErrors(['Aluno deletado com sucesso!', 'The Message']);
    }

}
