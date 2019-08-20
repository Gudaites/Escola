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
        $regras = [
            'descricao' => 'required|min:5',
            'qtd_vagas' => 'required|numeric',
            'nome_professor' => 'required|min:5|max:120'
        ];
        $mensagens = [
            'descricao.required' => 'Descrição é necessaria',
            'descricao.min' => 'É necessario no minimo 5 letras',
            'qtd_vagas.required' => 'Quantidade de vagas é necessario',
            'qtd_vagas.numeric' => 'Apenas numeros',
            'data_nascimento.required' => 'O campo data é necessario',
            'nome_professor.required' => 'Nome professor é necessario',
            'nome_professor.min' => 'É necessario no minimo 5 letras',
            'nome_professor.max' => 'Maximo de 120 letras'
        ];

        $req->validate($regras,$mensagens);
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
