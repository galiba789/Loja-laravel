<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class usuarios extends Controller
{
    public function index(){

        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function cadastro(){
        return view ('admin.createUser');
    }

    public function cadastroSubmit(Request $request){

        $request->validate(
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

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if($user != null){
            return redirect()->back()->withErrors('Esse Email já está em uso!');
        }

        $userModel = new User();
        $userModel->name = $name;
        $userModel->email = $email;
        $userModel->password = $password;
        $userModel->created_at = date('Y-m-d H:i:s');
        $userModel->is_admin = 1;
        $userModel->save();

        return redirect()->to('admin/usuarios');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin/usuarios')->with('success', 'Produto excluído com sucesso!');
    }
}
