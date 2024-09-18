<?php

namespace App\Http\Controllers;

use App\Models\produits;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class produitsController extends Controller
{

    public function listProduits()
    {
        return view('admin.listes');
    }

    public function ajouterProduit()
    {
        return view('admin.ajouter');
    }

    public function modifierProduit(Request $request)
    {
        $id_produit = $request->route('id');
        $produit = produits::where('id', $id_produit)
            ->get();
        return view('admin.modifier', ['var_produit' => $produit]);
    }

    public function addProduit(Request $request)
    {
        $produits = new produits;
        $produits->nom = $request->nomProduit;
        $produits->description = $request->descriptionProduit;
        $produits->prix = $request->prix;
        if ($request->hasfile('imageProduit')) {
            $file = $request->imageProduit;
            $extenstion = $file->getClientOriginalExtension();
            $filename = $produits->nom . '.' . $extenstion;
            $file->move('uploads/', $filename);
            $produits->image = $filename;
        }

        // Traitement des images
        if ($request->hasfile('images')) {
            $imagePaths = [];
            $i=1;
            foreach ($request->file('images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $filename = $produits->nom . '_' . $i . '.' . $extension;
                $image->move('uploads/', $filename);
                $imagePaths[] = $filename;
                $i++;
            }

            // Stocker les chemins des images dans la base de données en tant que chaîne séparée par un délimiteur
            $produits->images = implode(';', $imagePaths);
        }
        $produits->categories_id = $request->categorie;
        $produits->save();
        return redirect('/produit')->with('messagesuccess','Produit bien ajouté.');
    }

    public function updateProduit(Request $request)
    {
        $id_produit = $request->idProduit;
        $produits = produits::find($id_produit);
        $produits->nom = $request->nomProduit;
        $produits->description = $request->descriptionProduit;
        $produits->prix = $request->prix;
        if ($request->hasfile('imageProduit')) {
            $file = $request->imageProduit;
            $extenstion = $file->getClientOriginalExtension();
            $filename = $produits->nom . 'Modif.' . $extenstion;
            $file->move('uploads/', $filename);
            $produits->image = $filename;
        }
        // Traitement des images
        if ($request->hasfile('images')) {
            $imagePaths = [];
            $i=1;
            foreach ($request->file('images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $filename = $produits->nom . 'modif_' . $i . '.' . $extension;
                $image->move('uploads/', $filename);
                $imagePaths[] = $filename;
                $i++;
            }

            // Stocker les chemins des images dans la base de données en tant que chaîne séparée par un délimiteur
            $produits->images = implode(';', $imagePaths);
        }
        $produits->categories_id = $request->categorie;
        $produits->save();
        return redirect('/produit')->with('messagesuccess','Modification du produit a reussie.');
    }

    public function supprimerProduit(Request $request)
    {
        $id_produit = $request->id;
        $produits = produits::find($id_produit);
        $produits->delete();
        return redirect('/produit')->with('messagesuccess','Suppression du produit a reussie.');
    }

    public function articlebycategorie(Request $request)
    {
        $id_categorie = $request->route('id');
        $produit = produits::where('categories_id', $id_categorie)
            ->paginate(8);
        return view('front.listesproduits', ['var_produits' => $produit]);
    }

    public function rechercheproduits(Request $request)
    {
        $mot_cle = $request->input('mot_cle');
        $produit = produits::where('nom', 'Like', "%$mot_cle%")
                        ->orwhere('description', 'Like', "%$mot_cle%")
                         ->paginate(8);
        return view('front.pagerecherche', ['var_produit_rechercher' => $produit]);
    }

    public function rechercheproduits_liste(Request $request)
    {
        $mot_cle = $request->input('motcle');
        $produit = produits::where('nom', 'Like', "%$mot_cle%")
                        ->orwhere('description', 'Like', "%$mot_cle%")
                         ->paginate(8);
        return view('admin.listes', ['var_produit_rechercher' => $produit]);
    }


    public function detailProduit(Request $request)
    {
        $id_produit = $request->route('id');
        $produit = produits::where('id', $id_produit)
            ->get();
        return view('front.detailproduit', ['var_produit' => $produit]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categories::take(2)->get();
        return view('front.index', ['var_categories' => $categories]);
    }
    public function home()
    {
        return view('admin.home');
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
    public function show(produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produits $produits)
    {
        //
    }
}
