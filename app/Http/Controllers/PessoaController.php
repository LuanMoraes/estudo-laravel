<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Http\Requests\StorePessoaPost;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pessoas = \App\Pessoa::all();
        //$pessoas = \App\Pessoa::paginate(10); //cria 10 pessoas por página
        //dd($pessoas); //mostra o que está ocorrendo em pessoas

        $pessoas = auth()->user()->pessoas()->paginate(dd());

        return view('pessoas.index',compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pessoas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePessoaPost $request)
    {
        /*
        $pessoa = new pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->telefone = $request->telefone;
        $pessoa->email = $request->email;

        $pessoa->save();
        */
        /*
        $request->validate([
            'nome'=>'required', 'telefone'=>'required'
        ]);
        */


        //dd(auth()->user());


        //Pessoa::create($request->all());
        
        auth()->user()->pessoas()->create($request->all());

        return redirect('/pessoas'); //voltando para a tela inicial
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoa = Pessoa::find($id);
        return view('pessoas.show',compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //$pessoa = Pessoa::find($id);
        //dd($pessoa);
        return view('pessoas.form',compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePessoaPost $request, Pessoa $pessoa)
    {
        /*
        //$pessoa = Pessoa::find($id);
        $pessoa->nome = $request->nome;
        $pessoa->telefone = $request->telefone;
        $pessoa->email = $request->email;

        $pessoa->save();
        */
        $pessoa->update($request->all());

        return redirect('/pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        //funcao para excluir
        //$pessoa = Pessoa::find($id);
        $pessoa->delete();
        return redirect('/pessoas');

    }
}
