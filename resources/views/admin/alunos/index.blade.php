@include('layout.header')
@include('admin.mensagens')
<div class="container-fluid no-padding table-responsive-sm" >
    <h3 align="center" style="margin-top:20px">Lista de Alunos</h3>
        <table class="table" id="example" >
            <thead class="table">
                <tr class="table">
                    <th scope="col">Maticula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)    
                    <tr class="table-light">
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nome }}</td>
                    <td>{{ $registro->sexo }}</td>
                    <td>{{ \Carbon\Carbon::parse($registro->data_nascimento)->format('d/m/Y')}}</td>
                    <td>{{ $registro->cidade }}</td>
                    <td>{{ $registro->bairro }}</td>
                    <td>{{ $registro->rua }}</td>
                    <td>{{ $registro->numero }}</td>
                    <td>{{ $registro->complemento }}</td>
                    <td><a class="btn btn-primary" href="{{ route('site.alunos.editar', $registro->id)}}">Editar</a></td>
                    <td><a class="btn btn-danger" href="{{route('site.alunos.deletar', $registro->id)}}">Deletar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="col align-self-end">
        <a class="btn btn-success btn-block" style="margin-bottom:30px"  href="{{ route('site.alunos.adicionar')}}">Adicionar</a>
    </div>
</div>

@include('layout.footer')
