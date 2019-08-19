@include('layout.header')

<div class="container-fluid no-padding table-responsive-md" >
        <h3 align="center" style="margin-top:20px">Lista de Alunos na Turma {{$turmaID}}</h3>
            <table class="table" >
                <thead>
                    <tr>
                        <th scope="col">Maticula</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Data Nascimento</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Retirar</th>
    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)    
                        <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->sexo }}</td>
                        <td>{{ $registro->data_nascimento}}</td>
                        <td>{{ $registro->cidade }}</td>
                        <td><a class="btn btn-danger" href="{{route('site.turmas.retiraraluno', [$registro->id, $turmaID])}}">Retirar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col align-self-end">
            <a class="btn btn-success btn-block" href="{{route('site.turmas.listaaluno', $turmaID)}}">Adicionar Aluno</a>
            </div>
        <div class="col align-self-end">
        </div>
    </div>

@include('layout.footer')
