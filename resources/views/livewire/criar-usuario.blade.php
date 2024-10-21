<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <h2>Novo Usuário:</h2>

    <form wire:submit="cadastrar">
        <label>
            <span>Nome</span>
            <input type="text" wire:model="nome">
            @error("nome")
                <em>{{ $message }}</em>
            @enderror
        </label>
        <br>
        <br>
        <label>
            <span>E-mail</span>
            <input type="text" wire:model="email">
            @error("email")
                <em>{{ $message }}</em>
            @enderror
        </label>
        <br>
        <br>
        <label>
            <span>Senha</span>
            <input type="password" wire:model="senha">
            @error("senha")
                <em>{{ $message }}</em>
            @enderror
        </label>
        <br>
        <br>
        <label>
            <span>Data de Nascimento</span>
            <input type="date" wire:model="dataNascimento">
            @error("dataNascimento")
                <em>{{ $message }}</em>
            @enderror
        </label>
        <br>
        <br>
        <label>
            <span>Setor</span>
            <select wire:model="setor_id">
                <option value=""></option>
                @foreach($setores as $setor)
                    <option value="{{$setor->id}}">{{$setor->descricao}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</div>
