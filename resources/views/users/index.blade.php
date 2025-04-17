<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="{{ route ('user.create')}}"> Cadastrar</a> <br> 

    <h2>Listar Usuário</h2>

    @if(session('success'))
    <p style="color: #800080;">


        {{session('success')}}

    </p>

    @endif
 @forelse($users as $user)

 
 ID:{{$user->id}}<br>
 Nome: {{$user->name}}<br>
 E-mail: {{$user->email}}<br>
 
<a href="{{route('user-show', ['user' => $user->id])}}">Vizualizar</a><br>
<a href="{{route('user-edit', ['user' => $user->id])}}">Editar</a><br>

 <hr>

 @empty

 @endforelse
    
</body>
</html>