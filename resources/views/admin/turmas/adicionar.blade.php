@include('layout.header')
<div class="container" style="margin-top:10px">
    <h3 class="center" align="center">Cadastrar Turma</h3>
    <div class=" center">
    <form action="{{ route('site.turmas.salvar')}}" class="" method="post" enctype="multipart/form-data">
        @csrf
@include('admin.turmas._form')
<button class="btn btn-success btn-block" style="margin-bottom:10px"> Salvar</button>
</form>
<br><br>
</div>
</div>

@include('layout.footer')
