<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <h2>Usuários</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr wire:key="{{$usuario->id}}">
                    <td>{{$usuario->id}}</td>
                    <td>{{ str($usuario->nome)->words(2) }}</td>
                    <td>
                        <button
                            type="button"
                            wire:click="excluir({{$usuario->id}})"
                            wire:confirm="Tem certeza que quer excluir este usuário?"
                        >
                            Excluir
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
