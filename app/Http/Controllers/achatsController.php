<?php

namespace App\Http\Controllers;

use App\Models\achat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class achatsController extends Controller
{

    public function listachat()
    {
        $achat = achat::paginate(8);
        return view('admin.listesachat', ['var_achat' => $achat]);
    }

    public function ajouterachat(Request $request)
    {
        $achat = new achat;
        $achat->user_id = Auth::id();
        $achat->produits_id =  $request->route('id');
        $achat->save();
        return redirect('/')->with('messagesuccess',"Achat réussie.");
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
    public function show(achat $achat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(achat $achat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, achat $achat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(achat $achat)
    {
        //
    }
}
