<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //es un select * from tabla;
        $articles = Article::all();
        return $articles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recibir los datos y lo enviara a la base de datos
        $articles = Article::create($request->all());
        return response()->json($articles,201);



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //buscar y mostrar
        $articles = Article::findOrFail($id);
        return response()->json($articles,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //modificar
        $articles = Article::findOrFail($id);
        $articles->update($request->all());
        return response()->json($articles,200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar
        Article::destroy($id);
        return "eliminado sastifactoriamente!";
    }
}
