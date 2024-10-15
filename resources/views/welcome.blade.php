<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Básico</title>
</head>
<body>
    <a href="{{route('counter')}}"><button>Contador</button></a>
    <a href="{{route('afazeres')}}"><button>Afazeres</button></a>

    <p>Este texto pertence à view "welcome". A seguir, o conteúdo é da view do componente Livewire "HelloWorld":</p>
    <br>
    
    <livewire:hello-world/>

    <br>
    <p>Já esse conteúdo a seguir é a view do componente "PesquisaUsuario":</p>
    @livewire("pesquisa-usuario")
</body>
</html>