@include('layout.header')
<div class="container" style="margin-top:10px">
    <h3 class="center" align="center">Editar Aluno</h3>
    <div class="center">
    <form action="{{route('site.alunos.atualizar', $registro->id)}}" class="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="put">
        @include('admin.alunos._form')
        <button class="btn btn-success btn-block" style="margin-bottom:30px">Atualizar</button>
    </form>
    </div>
</div>

@include('layout.footer')
