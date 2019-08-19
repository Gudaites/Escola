@include('layout.header')

<div class="container-fluid no-padding table-responsive-md" >
<h3 align="center" style="margin-top:20px">Adicionar aluno na turma {{$turmaID}}</h3>
        <table id="example" class="table" >
            <thead>
                <tr>
                    <th scope="col">Maticula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Complemento</th>
                    <th scope="col"></th>

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
                    <td>{{ $registro->bairro }}</td>
                    <td>{{ $registro->rua }}</td>
                    <td>{{ $registro->numero }}</td>
                    <td>{{ $registro->complemento }}</td>
                    <td><a class="btn btn-primary" href="{{ route('site.turmas.salvaaluno', [$registro->id, $turmaID])}}">Adicionar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>

@include('layout.footer')
