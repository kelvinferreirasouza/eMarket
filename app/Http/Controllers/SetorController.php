<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Setor;

class SetorController extends Controller {

    private $setor;

    public function __construct(Setor $setor) {
        $this->setor = $setor;
    }

    public function cadastrarSetor() {
        return view('setores.cadastrar');
    }

    public function listarSetores() {
        $setores = Setor::orderBy('nome')->paginate(10);

        return view('setores.listar', compact('setores'));
    }

    public function excluirSetor($id) {
        $setor = Setor::find($id);

        $setor->delete();

        return redirect()->route('listarSetores');
    }

    public function editarSetor($id) {
        $setor = Setor::find($id);
        return view('setores.editar', compact('setor'));
    }

    public function salvarSetor(Request $request) {
        
        $nome = $request->nome;
        $isAtivo = $request->isAtivo;

        if($request->hasFile('file')) {
            foreach($request->file as $file) {
                $novoSetor = new Setor();
                $novoSetor->nome = $nome;
                $novoSetor->isAtivo = $isAtivo;
                $novoSetor->imagem = "";
                $novoSetor->save();
                $id = $novoSetor->id;

                $file_extension = $file->getClientOriginalExtension();
                $filename = $id . "." . $file_extension;
                DB::table('produtosetores')
                    ->where('id', $id)
                    ->update(array('imagem' => $filename));
                $destination_path = public_path('/imgs/setores');
                $file->move($destination_path,$filename);
            }
        }

        return redirect()->route('listarSetores');
    }

    public function atualizarSetor(Request $request, $id) {
        $setor = Setor::find($id);
        $nome = $request->nome;
        $imagem = Setor::find($id)->imagem;
        $isAtivo = $request->isAtivo;
        $isDestaque = $request->isDestaque;

        if($request->hasFile('file')) {
            foreach($request->file as $file) {
                $file_extension = $file->getClientOriginalExtension();
                $filename = $id . "." . $file_extension;
                DB::table('produtosetores')
                    ->where('id', $id)
                    ->update(['nome'=>$nome, 'imagem'=>$filename, 'isDestaque'=>$isDestaque, 'isAtivo'=>$isAtivo]);
                $destination_path = public_path('/imgs/setores');
                $file->move($destination_path,$filename);
            }
        } else {
            DB::table('produtosetores')
                    ->where('id', $id)
                    ->update(['nome'=>$nome, 'imagem'=>$imagem, 'isDestaque'=>$isDestaque,'isAtivo'=>$isAtivo]);
        }

        return redirect()->route('listarSetores');
    }

    public function visualizarSetor($id) {
        $setor = Setor::find($id);

        return view('setores.visualizar', compact('setor'));
    }

    public function pesquisarSetor(Request $request) {

        $setores = $this->setor->pesquisa($request);

        return view('setores.listar', compact('setores'));
    }

}
