<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OracaoController extends Controller
{
    //Listar oracaoes
    public function index(){
        $oracoes = Oracao::all();
        return view('oracoes.index', compact('oracoes'));
    }

    //Criar nova oracao
    public function store(Request $request)
    {
        $request->validate([
            'nome_solicitante' => 'required',
            'pedido_oracao' => 'required',

        ]);
        Oracao::create($request->all());
        return redirect()->route('oracoes.index')
        ->with('success','Oracao criada com sucesso.');
    }

    //Exibir uma oração especifica
    public function show(Oracao $oracao){
        return view('oracoes.show',compact('oracao'));
    }

    //Atualizar uma oracao
    public function update(Request $request, Oracao $oracao){
        $request->validate([
            'nome_solicitante' => 'required',
            'pedido_oracao' => 'required',

        ]);
        $oracao->update($request->all());

        return redirect()->route('oracoes.index')
        ->with('success','Oracao atualizada com sucesso.');
    }

    //Deletar uma oração
    public function destroy(Oracao $oracao){
        $oracao->delete();

        return redirect()->route('oracoes.index')
        ->with('success','Oracao excluida com sucesso.');
    }
}
