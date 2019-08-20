<div class="form-row">
    <div class="form-group col-md-12">
        <label for="descricao">Descrição turma</label>
            <textarea rows="4" cols="50" class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}"
                value="{{isset($registro->descricao) ? $registro->descricao : old('descricao')}}"
                name="descricao" id="descricao" placeholder="Digite a descrição da turma">{{isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
@if($errors->has('descricao'))
            <div class="invalid-feedback">
    {{$errors->first('descricao')}}
            </div>
@endif
    </div>
    <div class="form-group col-md-6">
        <label for="quantidadeVagas">Quantidade de vagas</label>
        <input type="number" class="form-control {{ $errors->has('qtd_vagas') ? 'is-invalid' : '' }}"
        value="{{isset($registro->qtd_vagas) ? $registro->qtd_vagas : old('qtd_vagas')}}"
            name="qtd_vagas" id="qtd_vagas" placeholder="Numero de Vagas">
@if($errors->has('qtd_vagas'))
            <div class="invalid-feedback">
{{$errors->first('qtd_vagas')}}
            </div>
@endif
</div>
<div class="form-group col-md-6">
    <label for="nome_professor">Nome Professor</label>
    <input type="text" class="form-control {{ $errors->has('qtd_vagas') ? 'is-invalid' : '' }}"
    value="{{isset($registro->nome_professor) ? $registro->nome_professor : old('nome_professor')}}"
    name="nome_professor" id="nome_professor" placeholder="Digite o nome do Professor">
    @if($errors->has('nome_professor'))
                <div class="invalid-feedback">
    {{$errors->first('nome_professor')}}
                </div>
    @endif
</div>
</div>