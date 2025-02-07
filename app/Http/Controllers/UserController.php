<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function login(){
        return view('home.cadastro.login');
    }

    public function loginSubmit(Request $resquest){

    }

    public function cadastro(){
        return view('home.cadastro.cadastro');
    }

    public function cadastroSubmit(Request $resquest) {

        $resquest->validate(
            [
                'name' => ['required','min:3', 'max:100'],
                'email' => ['required', 'email'],
                'password' => ['required', 'min:3', 'max:100'],
            ],
            [
                'name.required' => 'O nome e obrigatório',
                'name.min' => 'O nome deve ter no mínimo :min caracteres',
                'name.max' => 'O nome deve ter no máximo :max caracteres',
                'email.required' => 'O email é obrigatório',
                'email.email' => 'Deve ser umm email. Ex: exemplo@gmail.com',
                'password.required' => 'A senha é obrigatória',
                'password.max' => 'A senha deve ter no máximo :max caracteres',
                'password.min' => 'A senha deve tere no mínimo :min caracteres',
            ],
        );

        $name = $resquest->input('name');
        $email = $resquest->input('email');
        $password = $resquest->input('password');

        $user = User::where('email', $email)->first();

        if($user != null){
            return redirect()->back()->withErrors('Esse Email já está em uso!');
        }

        $userModel = new User();
        $userModel->name = $name;
        $userModel->email = $email;
        $userModel->password = Crypt::encrypt($password);
        $userModel->created_at = date('Y-m-d H:i:s');
        $userModel->save();

        return redirect()->route('login');
    }
}
