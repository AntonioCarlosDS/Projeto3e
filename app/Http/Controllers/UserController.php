<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){


        //Recuperando registro do banco de dados
        $users = User::orderBy('id' , 'desc')->get();

        //Carregando a view
        return view('users.index',['users' => $users]);
    }

    public function show(User $user)
    {
    
        return view('users.show', ['user' =>$user]);
    }

    public function create(){


        //Carregar a view
        return view ('users.create');


    }

    public function store(UserRequest $request){
       


        //Cadastrando o usuário no banco de dados

    User:: create([
        
        'name' => $request->name,
        'date' => $request->date,
        'email' =>$request->email,
        'password' => Hash::make($request->password),
    ]);


    //Enviando a mensagem de sucesso para o usuário atraves do redirecionamento
        
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado!');




    }

    public function edit(User $user){

        return view('users.edit', ['user' =>$user]);
    }

    public function update(UserRequest $request, User $user){


        //Validar o formulário
        $request-> valited();


        //Editar as informações no banco de dados
      
       $user->update([

        'name' => $request-> name,
        'email' => $request-> email,
        'password' => $request-> password,


               ]);

                   
        return redirect()->route('user-show', ['user' => $user->id ])->with('success', 'Usuário cadastrado!');


    }

    }

