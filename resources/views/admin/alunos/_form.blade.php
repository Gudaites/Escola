
    <div class="form-row" >
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
            name="nome" id="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="DATE" value="{{isset($registro->data_nascimento) ? $registro->data_nascimento : ''}}" class="form-control" name="data_nascimento" id="data_nascimento" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="nome">Sexo</label><br>
            <select class="form-control" name="sexo" id="sexo" required >
                <option value="{{isset($registro->sexo) ? $registro->sexo : ''}}" >{{isset($registro->sexo) ? $registro->sexo : 'Selecione'}}</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>
        <div class="form-group col-md-5">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}" id="cidade" placeholder="Cidade">
        </div>
        <div class="form-group col-md-5">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" value="{{isset($registro->bairro) ? $registro->bairro : ''}}" name="bairro" id="bairro" placeholder="Bairro">
        </div>
    </div>
    <div class="form-row">   
        <div class="form-group col-md-4">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" value="{{isset($registro->rua) ? $registro->rua : ''}}" name="rua" id="rua" placeholder="Rua">
        </div>
        <div class="form-group col-md-4">
            <label for="numero">Numero</label>
            <input type="number" class="form-control" value="{{isset($registro->numero) ? $registro->numero : ''}}" name="Numero" id="Numero" placeholder="Numero">
        </div>
        <div class="form-group col-md-4">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" value="{{isset($registro->complemento) ? $registro->complemento : ''}}" name="complemento" id="complemento" placeholder="Complemento">
        </div>
    </div>