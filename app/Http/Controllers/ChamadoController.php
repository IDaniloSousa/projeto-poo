<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use App\Models\Setor;
use App\Models\Situacao;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamado = Chamados::all();
        $setor = Setor::all();
        $situacao = Situacao::all();
        return view('chamado.index', compact('chamado', 'situacao', 'setor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setores = Setor::all();
        $situacoes = Situacao::all();
        return view('chamado.create', compact('setores', 'situacoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chamado = Chamados::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'setor_id' => $request['setor_id'],
            'situacao_id' => $request['situacao_id'],
            'fim_date' => $request['fim_date']

        ]);

        return redirect()->route('novoChamado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$chamado = Chamados::all();
        $setores = Setor::all();
        $situacoes = Situacao::all();
        $chamado = Chamados::find($id);
        return view('chamado.edit', compact(['chamado', 'setores', 'situacoes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chamado = Chamados::find($id);
        $chamado->update($request->all());

        return redirect()->route('chamados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chamado = Chamados::find($id);
        $chamado->delete($id);

        return redirect()->route('chamados.index');
    }
}
