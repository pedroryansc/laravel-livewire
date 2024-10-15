<div>
    {{-- The Master doesn't talk, he acts. --}}

    <form wire:submit="adicionar">
        <input type="text" wire:model="afazer">

        <button type="submit">Adicionar</button>
    </form>
    <br>
    <span>Afazer atual: {{ $afazer }}</span>

    <ul>
        @foreach($afazeres as $afazer)
            <li>{{$afazer}}</li>
        @endforeach
    </ul>
</div>
