@include('layout.header')
<div class="container-fluid no-padding table-responsive-md" >
    <h3 align="center" style="margin-top:20px">Lista de Turmas</h3>
        <table class="table" id="examplesasa" >
            <thead>
                <tr>
                    <th style="width:5%" scope="col">Numero</th>
                    <th style="width:30%" scope="col">Descricao</th>
                    <th style="width:5%" scope="col">Vagas</th>
                    <th style="width:20%" scope="col">Nome Professor</th>
                    <th style="width:1%"scope="col">Alunos</th>
                    <th style="width:1%"scope="col">Editar</th>
                    <th style="width:1%"scope="col">Deletar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)    
                    <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->descricao }}</td>
                    <td>{{ $registro->qtd_vagas }}</td>
                    <td>{{ $registro->nome_professor }}</td>
                    <td><a class="btn btn-info" href="{{route('site.turmas.alunos',  $registro->id)}}">Alunos</a></td>
                    <td><a class="btn btn-primary" href="{{ route('site.turmas.editar', $registro->id)}}">Editar</a></td>
                    <td><a class="btn btn-danger" href="{{route('site.turmas.deletar', $registro->id)}}">Deletar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="col align-self-end">
        <a class="btn btn-success btn-block" href="{{ route('site.turmas.adicionar')}}">Adicionar</a>
    </div>
    <br><br><br>
</div>
@include('layout.footer')
