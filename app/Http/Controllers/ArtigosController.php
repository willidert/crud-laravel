<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigosController
{
    public function index()
    {
        $artigos = Artigo::all();

        return view('artigos.index', compact('artigos'));
    }

    public function criar()
    {
        return view('artigos.criar');
    }

    public function store(Request $request)
    {
        $artigo = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $artigo = new Artigo($artigo);
        if (!$artigo->save()) {
            redirect('artigos');
        }
        return redirect('artigos');
    }

    public function destroy(int $id)
    {
        $artigo = Artigo::findOrFail($id);
        $artigo->delete();

        return redirect('artigos');
    }
}
