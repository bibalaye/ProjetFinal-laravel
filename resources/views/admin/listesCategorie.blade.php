<x-app-layout>
    <main>
        <section class=" conatiner-fluid mt-5 pt-5">
            <div class="container">
                <h1 class="listetitle">Liste des Categories</h1>
                            <div class="w-50 mx-auto mb-4">
                                <form class="d-flex" role="search" action="" method="post">
                                    <input class="form-control me-2" type="text" name="motcle" id="motcle">
                                    <input class="btn btn-outline-success" id="btrecher" type="submit"
                                        name="rechercher" value="rechercher">
                                </form>
                            </div>    
                <div class="row">
                    <section class="col-lg-2 col-md-2 col-12 bg">
                        @include('admin.header')
                    </section>
                    <section class="col-lg-10 col-md-10 col-12">
                        <section class="container">
                            <div class="btn btn-success"><a href="{{ url('ajouterCat') }}">Ajouter une catégorie</a></div>
                            <div class="table-responsive">
                                <table class="table" cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom du Produit</th>
                                            <th scope="col">Modifier</th>
                                            <th scope="col">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($var_categorie as $categorie)
                                            <tr>
                                                <td>{{ $categorie->nom }}</td>
                                                <td><a class="btn btn-primary"
                                                        href="{{ url('modifierCat/' . $categorie->id) }}">Modifier</a>
                                                </td>
                                                <td><a class="btn btn-danger"
                                                        href="{{ url('supprimerCat/' . $categorie->id) }}">Supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </section>
                    </section>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
