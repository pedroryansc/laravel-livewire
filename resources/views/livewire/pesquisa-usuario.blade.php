<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <input type="text" wire:model.live.debounce.5ms="pesquisa" placeholder="Procurar por usuários..."/>

    <p>{{$pesquisa}}</p>

    @if($pesquisa != "")
        <ul>
            @foreach($usuarios as $usuario)
                <li>{{$usuario->nome}}</li>
            @endforeach
        </ul>
    @endif
</div>
