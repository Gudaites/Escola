@include('layout.header')

<div class="container-fluid no-padding table-responsive-md" >
    <h3 align="center" style="margin-top:20px">Alunos da Turma</h3>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">Aluno id</th>
                    <th scope="col">Turma id</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)    
                    <tr>
                    <td>{{ $registro->aluno_id }}</td>
                    <td>{{ $registro->turma_id }}</td>

                @endforeach
            </tbody>
        </table>
    <div class="col align-self-end">
        <a class="btn btn-success btn-block" href="#">Adicionar</a>
    </div>
</div>

@include('layout.footer')
