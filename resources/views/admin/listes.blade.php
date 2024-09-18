<x-app-layout>

    <main>
        <section class="container-fluid mt-5 pt-5">
            <div class="container">
                <h1 class="listetitle">Liste des Produits</h1>

                <div class="w-50 mx-auto mb-4 ">
                    <form class="d-flex" role="search" action="{{'recherche_liste'}}" method="get">
                        <input class="form-control me-2" type="text" name="motcle" id="motcle">
                        <input class="btn btn-outline-success" id="btrecher" type="submit" name="rechercher"
                            value="rechercher">
                    </form>
                </div>
                <div class="row">
                    <section class="col-lg-2 col-md-2 col-12 bg">
                        @include('admin.header')
                    </section>
                    <section class="col-lg-10 col-md-10 col-sm-12 col-12">
                        <section class="container">

                            <div class="btn btn-success mb-3 px-4"><a href="{{ url('ajouter') }}"><i
                                        class="fa fa-plus"></i></a></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom du Produit</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Prix</th>
                                            <th scope="col">Images</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">Modifier</th>
                                            <th scope="col">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @isset($var_produit_rechercher)
                                        @php $produits = $var_produit_rechercher; @endphp
                                        @else
                                        @php $produits = $var_produit; @endphp
                                        @endisset

                                        @foreach ($produits as $produit)
                                        <tr>
                                            <td>{{ $produit->nom }}</td>
                                            <td class="desc">{{ $produit->description }}</td>
                                            <td>{{ $produit->prix }}</td>
                                            <td>{{ $produit->image }}</td>
                                            <td>{{ $produit->categorie->nom }}</td>
                                            <td><a class="btn btn-primary px-4"
                                                    href="{{ url('modifier/' . $produit->id) }}"><i
                                                        class="fa fa-plus"></i></a></td>
                                            <td><a class="btn btn-danger px-4"
                                                    href="{{ url('supprimer/' . $produit->id) }}"><i
                                                        class="fa fa-trash"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$produits->links('pagination::bootstrap-4')}}
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </section>

    </main>
</x-app-layout>