@include('layout.header')

<div class="container" style="margin-top:30px">
  <div class="box" align="center">
    <div class="col-sm-6" align="center">
            <div class="list-group bg-dark text-white">
                    <a href="/" class="list-group-item list-group-item-action active bg-dark text-white">
                      Alunos/Turmas
                    </a>
                    <a href="{{ route('site.alunos') }}" class="list-group-item list-group-item-action">Alunos</a>
                    <a href="{{ route('site.alunos.adicionar') }}" class="list-group-item list-group-item-action">Cadastrar Alunos</a>
                    <a href="{{ route('site.turmas') }}" class="list-group-item list-group-item-action">Turmas</a>
                    <a href="{{ route('site.turmas.adicionar')}}" class="list-group-item list-group-item-action">Cadastrar Turmas</a>
                    <br>
                  </div>
    </div>
  </div>
</div>

@include('layout.footer')
