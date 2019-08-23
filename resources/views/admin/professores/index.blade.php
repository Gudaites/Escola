@include('layout.header')
@include('admin.mensagens')
<div class="container-fluid no-padding table-responsive-sm" >
    <h3 align="center" style="margin-top:20px">Lista de Professores</h3>
        <table class="table" id="example" >
            <thead class="table">
                <tr class="table">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Email</th>
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
                    <td>{{ $registro->email }}</td>
                    <td><a class="btn btn-primary" href="#">Editar</a></td>
                    <td><a class="btn btn-danger" href="#">Deletar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="col align-self-end">
        <a class="btn btn-success btn-block" style="margin-bottom:30px"  href="#">Adicionar</a>
    </div>
</div>

@include('layout.footer')
