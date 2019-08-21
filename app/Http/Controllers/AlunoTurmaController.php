<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunoTurma;
use App\Aluno;
use App\Turma;
use DB;
use Illuminate\Support\Facades\Redirect;

class AlunoTurmaController extends Controller
{
    public function index($id){
        $req = AlunoTurma::where('turmas_id', $id)->get();
        $turmaID = $id;
        //dd($registros[0]->alunos_id);
        $registros = [];
        for ($i=0; $i < count($req); $i++) { 
            $registros[$i] = Aluno::where('id','=', $req[$i]->alunos_id)->first();

        } 
        //dd($registros);
        return view('admin.turmas.alunos', compact('registros','turmaID'));
     }

    public function listaAluno($turmaID){
        $registros = Aluno::all();
        return view('admin.turmas.listaAluno', compact('registros', 'turmaID'));
        
    }

    public function salvaAluno($id,$turmaID){
        $teste = AlunoTurma::where('alunos_id',$id)->where('turmas_id', $turmaID)->first();
        $limite = Turma::where('id', $turmaID)->first();
        //dd($limite);
        $vagas = $limite->qtd_vagas;
        //dd($limite->qtd_vagas);
        $limite3 = AlunoTurma::where('turmas_id',$turmaID)->count('turmas_id');
        //dd($limite3);
        if(!($limite3 >= $vagas)){
            if(!(isset($teste))){
                $dados = new AlunoTurma();
                $dados->alunos_id = $id;
                $dados->turmas_id = $turmaID;
                $dados->save();
                //dd($dados);
                return redirect()->route('site.turmas');
        }else{
            return Redirect::back()->withErrors(['Usuario já cadastrado', 'The Message']);
        }  
    }
        return Redirect::back()->withErrors(['Limite ultrapassado', 'The Message']);
}

    public function retiraAluno($id,$turmaID){
        DB::table('aluno_turmas')->where('alunos_id','=', $id)->where('turmas_id','=', $turmaID)->delete();
        return redirect()->route('site.turmas')->withErrors(['Aluno retirado com sucesso!', 'The Message']);
    }
}
