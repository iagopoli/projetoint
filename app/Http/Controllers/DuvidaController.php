<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Duvida;
use Illuminate\Http\Request;

class DuvidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duvidas=Duvida::all();
        return view('faq', compact('duvidas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dados=$request->validate([
            'titulo' => 'required|min:5|max:50',
            'descricao' => 'required|min:5|max:1500',
        ]);

        if (auth()->user()) {
            $dados['user_id']= auth()->user()->id;
        } else {
            $dados['user_id']= null;
        }

        $duvida=Duvida::create($dados);
        return back()->with('success', 'Pergunta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $duvida=Duvida::find($id);
        return view('perguntas', compact('duvida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $duvida=Duvida::findOrFail($id);

        $comentarios = Comentario::where('duvida_id', $duvida->id)->get();
        foreach ($comentarios as $comentario) {
            $comentario->delete();
        }

        $duvida->delete();
        return back()->with('success', 'Pergunta deletada com sucesso!');
    }
}
