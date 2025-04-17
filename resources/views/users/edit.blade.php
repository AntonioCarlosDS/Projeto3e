<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>

    <a href="{{ route ('user.index')}}">Listar</a> <br> 
    <a href="{{ route('user-show', ['user' => $user->id]) }}">Visualizar</a>


    <h2>Editar Usuário</h2>


    
@if($errors->any()) {{-- Verifica se existem erros na validação --}}
@foreach($errors->all() as $error) {{-- Gera uma lista das mensagens de erro, caso tenha --}}
    <p style="color: #f00">{{ $error }}</p>
@endforeach
@endif


<form action="{{ route('user-update', ['user'=> $user->id]) }}" method="POST">
@csrf
@method('PUT')

<label>Nome Completo:</label>
<input type="text" name="name" value = "{{old('name', $user->name)}}" placeholder="Digite seu nome" required> <br>


<br><label> Email: </label>
<input type="email" name="email"value = "{{old('email', $user->email)}}" placeholder="Digite seu e-mail" required>


<br><label for="password">Senha: </label>
<input type="password" id="password" name="password" placeholder="Digite sua senha" required>

<br><br><label>Data de check-in:</label>
<input type="date" name="date" value = "{{old('date')}}" required> <br>

<br><button type="submit">Salvar</button>

</form>


    
</body>
</html>