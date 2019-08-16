@include('layout.header')
<div class="container" style="margin-top:10px">
    <h3 class="center" align="center">Editar Turma</h3>
    <div class=" center">
    <form action="{{route('site.turmas.atualizar', $registro->id)}}" class="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="put">
        @include('admin.turmas._form')
        <button class="btn btn-success btn-block">Atualizar</button>
    </form>
    <br><br><br>
    </div>
</div>

@include('layout.footer')
