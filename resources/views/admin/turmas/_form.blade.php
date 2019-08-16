<div class="form-row">
    <div class="form-group col-md-12">
        <label for="descricao">Descrição turma</label>
                <textarea rows="4" cols="50" class="form-control" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"
                name="descricao" id="descricao" required placeholder="Digite a descrição da turma">{{isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
    </div>
    <div class="form-group col-md-6">
        <label for="quantidadeVagas">Quantidade de vagas</label>
        <input type="number" class="form-control" value="{{isset($registro->qtd_vagas) ? $registro->qtd_vagas : ''}}"
            name="qtd_vagas" id="qtd_vagas" required placeholder="Numero de Vagas" required>
    </div>
    <div class="form-group col-md-6">
         <label for="nome_professor">Nome Professor</label>
        <input type="text" class="form-control" value="{{isset($registro->nome_professor) ? $registro->nome_professor : ''}}"
            name="nome_professor" id="nome_professor" placeholder="Digite o nome do Professor" required>
    </div>
</div>