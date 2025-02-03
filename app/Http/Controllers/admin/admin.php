<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class admin extends Controller
{
    public function index() {

        return view('admin.index');
    }

    public function produtos(){
        $produtos = produtos::all();
        return view('admin.produto', compact('produtos'));
    }
    public function cadastro(){
        return view('admin.cadastro');

    }
    public function submit(Request $request) {
        $request->validate(
            [
                'nome' => ['required', 'min:2'],
                'preco' => ['required'],
                'descricao' => ['required', 'max:500'],
                'imagem' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
                'estoque' => ['required', 'min:1'],
            ],
            [
                'nome.required' => 'O nome do produto e obrigatorio',
                'nome.min' => 'O nome do produto deve ter no minimo :min caracteres ',
                'preco.required' => 'O preco e obrigatorio',
                'descricao.required' => 'A descricao do produto e obrigatoria',
                'descricao.max' => 'O produto deve ter no maximo :max caracteres',
                'imagem.required' => 'A imagem do produto e obrigatoria',
                'imagem.image' => 'Deve ser uma imagem',
                'imagem.mimes' => 'Formato nao suportado',
                'imagem.max' => 'a imagem deve ter no maximo :max caracteres',
                'estoque.required' => 'O valor do estoque e obrigatorio',
                'estoque.min' => 'Você deve ter no minimo :min produto no estoque',
            ]
        );
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('produtos', 'public');
        } else {
            return redirect()->back()->with('error', 'Erro ao enviar a imagem.');
        }
        $produtos = new produtos();
        $produtos->nome = $request->nome;
        $produtos->preco = $request->preco;
        $produtos->descricao = $request->descricao;
        $produtos->imagem = $imagemPath ?? null;
        $produtos->estoque = $request->estoque;
        $produtos->save();

        return redirect()->route('admin/produtos');
    }

    public function editar($id){
        $produto = produtos::findOrFail($id);
        return view('admin.edit', compact('produto'));
    }

    public function editarSubmit(Request $request, $id){
        $produto = produtos::findOrFail($id);

        $request->validate([
            'nome' => 'required|min:2',
            'preco' => 'required',
            'descricao' => 'required|max:500',
            'estoque' => 'required|min:1',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->descricao = $request->descricao;
        $produto->estoque = $request->estoque;

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('produtos', 'public');
            $produto->imagem = $imagemPath;
        }

        $produto->save();

        return redirect()->route('admin/produtos')->with('success', 'Produto atualizado com sucesso!');
    }
    public function destroy($id) {
        $produto = produtos::findOrFail($id);

        if ($produto->imagem) {
            Storage::disk('public')->delete($produto->imagem);
        }


        $produto->delete();

        return redirect()->route('admin/produtos')->with('success', 'Produto excluído com sucesso!');
    }

}
