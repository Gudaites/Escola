@include('layout.header')
<div class="container" style="margin-top:10px">
    <h3 class="center" align="center">Cadastrar Aluno</h3>
    <div class=" center">
    <form action="{{ route('site.alunos.salvar')}}" class="" method="post" enctype="multipart/form-data">
        @csrf
@include('admin.alunos._form')
<button class="btn btn-success btn-block"> Salvar</button>
</form>
<br><br>
</div>
</div>

@include('layout.footer')
