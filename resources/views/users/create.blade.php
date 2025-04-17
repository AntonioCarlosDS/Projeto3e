<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<a href="{{ route('user.index') }}">Listar</a> <br> 

<h2>Cadastrar Usuário</h2>

@if($errors->any()) {{-- Verifica se existem erros na validação --}}
    @foreach($errors->all() as $error) {{-- Gera uma lista das mensagens de erro, caso tenha --}}
        <p style="color: #f00">{{ $error }}</p>
    @endforeach
@endif


<form action="{{ route('user-store') }}" method="POST">
    @csrf
    @method('POST')

    <label>Nome Completo:</label>
    <input type="text" name="name" value = "{{old('name')}}" placeholder="Digite seu nome" required> <br>


    <br><label> Email: </label>
<input type="email" name="email"value = "{{old('email')}}" placeholder="Digite seu e-mail" required>


<br><label for="password">Senha: </label>
<input type="password" id="password" name="password" placeholder="Digite sua senha" required>



    <br><label>Escolha o setor:</label>
    <select name="setor"> 
        <option>Tecnologia</option>
        <option>Administração</option>
        <option>Projeto</option>
    </select> <br>

    <label>Cidade:</label>
    <select name="capitais"> 
        <option>Aracaju(SE)</option>
        <option>Belém(PA)</option>
        <option>Belo Horizonte(MG)</option>
        <option>Boa Vista(RR)</option>
        <option>Brasília(DF)</option>
        <option>Campo Grande(MS)</option>
        <option>Cuiabá(MT)</option>
        <option>Curitiba(PR)</option>
        <option>Florianópolis(SC)</option>
        <option>Fortaleza(CE)</option>
        <option>Goiânia(GO)</option>
        <option>João Pessoa(PB)</option>
        <option>Macapá(AP)</option>
        <option>Maceió(AL)</option>
        <option>Manaus(AM)</option>
        <option>Natal(RN)</option>
        <option>Palmas(TO)</option>
        <option>Porto Alegre(RS)</option>
        <option>Porto Velho(RO)</option>
        <option>Recife(RE)</option>
        <option>Rio Branco(AC)</option>
        <option>Rio de Janeiro(RJ)</option>
        <option>São Luís(MA)</option>
        <option>São Paulo(SP)</option>
        <option>Teresina(PI)</option>
        <option>Vitória(ES)</option>
    </select> <br>

    <label>Data de check-in:</label>
    <input type="date" name="date" value = "{{old('date')}}" required> <br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
