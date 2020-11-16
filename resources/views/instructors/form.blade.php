<div class="form-row form-group">
    <div class="col-md-6">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ $instructor->name ?? old('name') }}" maxlength="100" placeholder="Digite seu nome" required>
    </div>

    <div class="col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" class="form-control" value="{{ $instructor->cpf ?? old('cpf') }}" maxlength="14" placeholder="Digite seu CPF" onkeydown="javascript: fMasc( this, mCPF );" required>
    </div>
</div>

<div class="form-row form-group">
    <div class="col-md-6">
        <label for="birthdate">Data de Nascimento</label>
        <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ $instructor->birthdate ?? old('birthdate') }}" placeholder="Digite sua data de nascimento" required>
    </div>

    <div class="col-md-6">
        <label for="phone">Telefone</label>
        <input type="phone" id="phone" name="phone" class="form-control" value="{{ $instructor->phone ?? old('phone') }}" maxlength="15" placeholder="Digite seu telefone" required>
    </div>
</div>

<div class="form-row form-group">
    <div class="col-md-6">
        <label for="sex">Sexo</label>
        <select class="form-control" id="sex" name="sex" required>
            <option value="">Informe seu sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="address">Endereço</label>
        <input type="text" id="address" name="address" class="form-control" value="{{ $instructor->address ?? old('address') }}" placeholder="Digite seu endereço" required>
    </div>
</div>