<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function listCategorie()
    {
        $categorie = categories::all();
        return view('admin.listesCategorie', ['var_categorie' => $categorie]);
    }
    public function ajouterCategorie()
    {
        return view('admin.ajouterCategorie');
    }

    public function addCategorie(Request $request)
    {
        $categorie = new categories;
        $categorie->nom = $request->nomCategorie;
        $categorie->save();
        return redirect('/Categorie')->with('messagesuccess','Catégorie bien ajoutée.');
    }


    public function modifierCategorie(Request $request)
    {
        $id_categorie = $request->route('id');
        $categorie = categories::where('id', $id_categorie)
            ->get();
        return view('admin.modifierCategorie', ['var_categorie' => $categorie]);
    }
    public function updateCategorie(Request $request)
    {
        $id_categorie = $request->idCategorie;
        $categorie = categories::find($id_categorie);
        $categorie->nom = $request->nomCategorie;
        $categorie->save();
        return redirect('/Categorie')->with('messagesuccess','modification de la catégorie a reussie.');
    }
    public function supprimerCategorie(Request $request)
    {
        $id_categorie = $request->id;
        $categorie = categories::find($id_categorie);
        $categorie->delete();
        return redirect('/Categorie')->with('messagesuccess','Suppression de la catégorie a reussie.');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        //
    }
}
